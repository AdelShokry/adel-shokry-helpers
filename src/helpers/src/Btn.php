<?php

namespace AdelShokry\Helpers\Src;

class Btn
{
    public static function create($url = null,$attr = null)
    {
    	return view('Helper::btns.create',compact('url','attr'))->render();
    }

    public static function edit($id,$url = null,$attr = null)
    {
    	return view('Helper::btns.edit',compact('id','url','attr'))->render();
    }
    public static function delete($options = null,$name = null)
    {
    	return view('Helper::btns.delete',compact('options','name'))->render();
    }    
    public static function view($id,$attr = null)
    {
    	return view('Helper::btns.view',compact('id','attr'))->render();
    }    

    public static function deleteAll($attr = null)
    {
        return view('Helper::btns.deleteAll',compact('attr'))->render();
    }

}
