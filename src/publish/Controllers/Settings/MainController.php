<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting;
class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('rule:admin');
        setBreadcrumbs('main_settings',route('main.settings'));
    }
    public function index()
    {
    	return view(user('rule').'_rule.settings.main.index');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'translate' => [
                'site_name' =>  'required',
                ],
                'mail' => 'required|email',
                'phone' => 'required',
                'maintenance' => 'required',
            ]);

         return \Control::update($request,1,'setting',[
                'mail' => $request->mail,
                'phone' => $request->phone,
                'maintenance' => $request->maintenance,
                'facebook' => $request->facebook,
                'keywords' => $request->keywords,
                'translate'=>['site_name','site_desc']
                ],null,function($request)
                {

                    if ($request->hasFile('logo')) 
                    {
                            $dir     = base_path('public/assets/cpanel/img');
                            $image = $request->file('logo');
                            $logo = 'logo.png';
                            @unlink($dir.'/'.$logo);
                            $image->move($dir,$logo);
                    }
                   
                    if ($request->hasFile('icon')) 
                    {
                            $dir     = base_path('public/assets/cpanel/img');
                            $image = $request->file('icon');
                            $icon = 'favicon.png';
                            @unlink($dir.'/'.$icon);
                            $image->move($dir,$icon);
                    }
                    session()->flash('success',trans('lang.system_updated'));

                });
        
		
                
            }

    public function lang($lang)
    {
        $lang = \App\Lang::where('code',$lang);
        $default = \App\Lang::where('default',1);
        if ($lang->exists()) 
        {
            $local = $lang->first()->code;
        }else{
            if ($default->exists()) {
                # code...
                $local = $default->first()->code;
            }else{
                
                $local = 'ar';
            }
        }
           \Cookie::queue(\Cookie::make('locale', $local, 43200));
        return back();
    }

    public function maintenance()
    {
        if (site('maintenance') == 'open') 
        {
           return redirect('/');
        }else{
            
            return view('Helper::maintenance');
        }
    }
    
}
