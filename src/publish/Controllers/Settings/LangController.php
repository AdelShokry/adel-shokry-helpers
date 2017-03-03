<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lang;
class LangController extends Controller
{
    public function __construct()
    {
        $this->middleware('rule:admin');
        setBreadcrumbs(['lang'=>trans('lang.languages')],route('lang.index'));

    }
    public function index()
    {

        return view(user('rule').'_rule.settings.lang.index');
    }

    public function create()
    {
        $this->validate(request(),[
            'name'=>'required',
            'code'=>'required',
            ]);
        if(request()->has('default'))
        {
            Lang::where('default',1)->update(['default'=>0]);
        }
        $checkCount = Lang::where('code',request('code'))->count();
        if ($checkCount > 0) 
        {
            return response(trans('lang.lang_exists'), 300);
        }
        else{
            $add = new Lang;
            $add->name = request('name');
            $add->code = request('code');
            $add->default = request('default',0);
            $add->direction = request('direction');
            $add->save();
            @full_copy(base_path('resources/lang/ar'),base_path('resources/lang/'.request('code')));
            return trans('lang.system_updated'); 
        }
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name'=>'required',
            'code'=>'required',
            ],[],[
            'name'=>trans('lang.lang_name'),
            'code'=>trans('lang.lang_code'),
            ]);
        if($request->has('default'))
        {
            Lang::where('default',1)->update(['default'=>0]);
        }
        
            $add = Lang::find($id);
            $add->name = $request->name;
            rename(base_path('resources/lang/'.$add->code), base_path('resources/lang/'.$request->code));
            $add->code = $request->code;
            $add->default = $request->has('default') ? 1 : 0;
            $add->direction = $request->direction;
            $add->save();
            return trans('lang.system_updated'); 
        
    }


    public function updateFiles(Request $request)
    {
        $lang = Lang::find($request->lang)->code;
        
        $contents = [];
        foreach ($request->fileName as $key => $file) 
        {
            $ary = [];
            foreach ($request->{'keys_'.str_replace('.', '_', $file)} as $k => $v) 
            {
                $ary[$v] = $request->{'content_'.str_replace('.', '_', $file)}[$k];
                $contents[$file]= $ary;
            }
        }
            foreach ($contents as $filename => $data) 
            {
            $fileContent = '<?php
return [
';
                $file_path = base_path('resources/lang/'.$lang.'/'.$filename);
                foreach ($data as $kk => $vv) 
                {
$fileContent .= "   '".$kk."'  => '".$vv."',
";
                }
            $fileContent .= '];';
                    file_put_contents($file_path,$fileContent);
                
            }
        return trans('lang.system_updated'); 

    }

    public function updateFlug(Request $request)
    {
        $lang = Lang::find($request->lang);
        $lang->flug = $request->name;
        $lang->save();
        return trans('lang.system_updated'); 
    }

    public function deleteLang(Request $request)
    {
        if (Lang::where('id',$request->lang)->count() > 0) 
        {
                # code...
            $lang = Lang::find($request->lang);
            $files = glob(base_path('resources/lang/'.$lang->code.'/*.*'));
            foreach ($files as  $file) 
            {
                @unlink($file);
            }
            @rmdir(base_path('resources/lang/'.$lang->code));
            $lang_name = $lang->name;
            \App\Language::where('lang',$lang->id)->delete();
             $lang->delete();

        return trans('lang.deleted',['var'=>$lang_name]); 
        }
        return trans('lang.deleted',['var'=>trans('lang.lang')]); 
    }

}
