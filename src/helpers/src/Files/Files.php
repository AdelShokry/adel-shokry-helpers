<?php 
namespace AdelShokry\Helpers\Src\Files;

/**
* 
*/
use Illuminate\Http\Request;
use App\Image;
class Files
{
	public static function upload(Request $req,$prefix=null,$parent = null,$inputs = [])
  {
   
    
    if (!is_null($prefix)) 
    {
$model_name = '\App\\'.ucfirst(camel_case($prefix));

$id = is_null($parent) ? $model_name::all()->last()->id : $parent;
    }
    if (isAssoc($inputs)) 
    {
      foreach ($inputs as $input => $dir) 
      {
        if ($req->hasFile($input)) 
        {

        $files = $req->file($input);
        if (!is_dir(base_path($dir))) 
        {
            mkdir(base_path($dir));
        }
          if (is_array($files)) 
          {
              foreach ($files as $value) 
              {
                $fileName = uniqid($prefix).'.'.$value->getClientOriginalExtension();
                $value->move(base_path($dir),$fileName);
               if (!is_null($prefix)) 
               {
                $add_img = new Image;
                $add_img->parent = $id;
                $add_img->extends = $prefix;
                $add_img->url = $dir.'/'.$fileName;
                $add_img->save();
               }
               }
            
          }else{
              $fileName = uniqid($prefix).'.'.$files->getClientOriginalExtension();
             
              $files->move(base_path($dir),$fileName);
              if (!is_null($prefix)) 
              {
                $add_img = new Image;
                $add_img->parent = $id;
                $add_img->extends = $prefix;
                $add_img->url = $dir.'/'.$fileName;
                $add_img->save();
              } 
          }
        }
      }
    }else{
      foreach ($inputs as $input) 
      {
        if ($req->hasFile($input)) 
        {
        $files = $req->file($input);
        $dir = 'public/upload';
        if (!is_dir(base_path($dir))) 
        {
            mkdir(base_path($dir));
        }
        
          if (is_array($files)) 
          {
              foreach ($files as $value) 
              {
                $fileName = uniqid($prefix).'.'.$value->getClientOriginalExtension();
                $value->move(base_path($dir),$fileName);
               if (!is_null($prefix)) 
               {
                $add_img = new Image;
                $add_img->parent = $id;
                $add_img->extends = $prefix;
                $add_img->url = $dir.'/'.$fileName;
                $add_img->save();
               }
               }
            
          }else{
              $fileName = uniqid($prefix).'.'.$files->getClientOriginalExtension();
             
              $files->move(base_path($dir),$fileName);
              if (!is_null($prefix)) 
              {
                $add_img = new Image;
                $add_img->parent = $id;
                $add_img->extends = $prefix;
                $add_img->url = $dir.'/'.$fileName;
                $add_img->save();
              } 
          }

          
        }
      }
    }

  }	
	public static function update(Request $req,$prefix=null,$parent = null,$inputs = [])
  {

    
    if (!is_null($prefix)) 
    {
$model_name = '\App\\'.ucfirst(camel_case($prefix));

$id = is_null($parent) ? $model_name::all()->last()->id : $parent;
    }
    if (isAssoc($inputs)) 
    {
      foreach ($inputs as $input => $dir) 
      {
        if ($req->hasFile($input)) 
        {
        $files = $req->file($input);
        if (!is_dir(base_path($dir))) 
        {
            mkdir(base_path($dir));
        }
          if (is_array($files)) 
          {
            self::delete($prefix,$parent);
              foreach ($files as $value) 
              {
                $fileName = uniqid($prefix).'.'.$value->getClientOriginalExtension();
                $value->move(base_path($dir),$fileName);
               if (!is_null($prefix)) 
               {
                $add_img = new Image;
                $add_img->parent = $id;
                $add_img->extends = $prefix;
                $add_img->url = $dir.'/'.$fileName;
                $add_img->save();
               }
               }
            
          }else{
             self::delete($prefix,$parent);
              $fileName = uniqid($prefix).'.'.$files->getClientOriginalExtension();
             
              $files->move(base_path($dir),$fileName);
              if (!is_null($prefix)) 
              {
                $add_img = new Image;
                $add_img->parent = $id;
                $add_img->extends = $prefix;
                $add_img->url = $dir.'/'.$fileName;
                $add_img->save();
              } 
          }
        }
      }
    }else{
      foreach ($inputs as $input) 
      {
        if ($req->hasFile($input)) 
        {
        $files = $req->file($input);
        $dir = 'public/upload';
        if (!is_dir(base_path($dir))) 
        {
            mkdir(base_path($dir));
        }
        
          if (is_array($files)) 
          {
             self::delete($prefix,$parent);
              foreach ($files as $value) 
              {
                $fileName = uniqid($prefix).'.'.$value->getClientOriginalExtension();
                $value->move(base_path($dir),$fileName);
               if (!is_null($prefix)) 
               {
                $add_img = new Image;
                $add_img->parent = $id;
                $add_img->extends = $prefix;
                $add_img->url = $dir.'/'.$fileName;
                $add_img->save();
               }
               }
            
          }else{
             self::delete($prefix,$parent);
              $fileName = uniqid($prefix).'.'.$files->getClientOriginalExtension();
             
              $files->move(base_path($dir),$fileName);
              if (!is_null($prefix)) 
              {
                $add_img = new Image;
                $add_img->parent = $id;
                $add_img->extends = $prefix;
                $add_img->url = $dir.'/'.$fileName;
                $add_img->save();
              } 
          }

          
        }
      }
    }

    
  }

	public static function delete($prefix,$parent)
  {
	if (Image::where(['parent'=>$parent,'extends'=>$prefix])->count() > 0) 
       {
           $imgs = Image::where(['parent'=>$parent,'extends'=>$prefix])->get();
           foreach ($imgs as $img) 
           {
               if(file_exists(base_path($img->url)))
               {
                unlink(base_path($img->url));
                Image::where(['parent'=>$parent,'extends'=>$prefix])->delete();
               }
           }
       }    
  }


}











