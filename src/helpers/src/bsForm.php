<?php

namespace AdelShokry\Helpers\Src;

class bsForm 
{
    public static function start($attributes=null)
    {
    	return view('Helper::bsForm.start',compact('attributes'))->render();
    } 



    public static function end($options=null)
    {
    	return view('Helper::bsForm.end',compact('options'))->render();
    } 



    public static function text($name,$value=null,$attributes=null)
    {
        return view('Helper::bsForm.text',compact('name','value','attributes'))->render();
    }


    public static function textarea($name,$value=null,$attributes=null)
    {
    	return view('Helper::bsForm.textarea',compact('name','value','attributes'))->render();
    }


    public static function number($name,$value=null,$attributes=null)
    {
        return view('Helper::bsForm.number',compact('name','value','attributes'))->render();
    }

    public static function url($name,$value=null,$attributes=null)
    {
        return view('Helper::bsForm.url',compact('name','value','attributes'))->render();
    }

    public static function password($name,$attributes=null)
    {
    	return view('Helper::bsForm.password',compact('name','attributes'))->render();
    }


    public static function email($name,$value=null,$attributes=null)
    {
        return view('Helper::bsForm.email',compact('name','value','attributes'))->render();
    }

    public static function time($name,$value=null,$attributes=null)
    {
    	return view('Helper::bsForm.time',compact('name','value','attributes'))->render();
    }


    public static function checkbox($name,$options,$labels,$value=null,$attributes=null)
    {
    	return view('Helper::bsForm.checkbox',compact('name','options','labels','value','attributes'))->render();
    }

    public static function radio($name,$options,$value=null,$attributes=null)
    {
      return view('Helper::bsForm.radio',compact('name','options','value','attributes'))->render();
    }

    public static function birthday($values=null,$attributes=null)
    {
      return view('Helper::bsForm.birthday',compact('values','attributes'))->render();
    }

    public static function select($name,$options,$value=null,$attributes=null)
    {
      return view('Helper::bsForm.select',compact('name','options','value','attributes'))->render();
    }
    public static function deleteSelect($id=null)
    {
      return view('Helper::bsForm.deleteSelect',compact('id'))->render();
    }
    public static function image($name=null,$url=null)
    {
      return view('Helper::bsForm.image',compact('name','url'))->render();
    }

    public static function deleteAllSelect()
    {
      return view('Helper::bsForm.deleteAll')->render();
    }
    
    public static function translate($callback)
    {
        if (is_callable($callback)) 
        {
            return view('Helper::bsForm.translate',compact('callback'))->render();
        }
    }


}
