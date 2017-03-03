<?php
try {
	Breadcrumbs::register('cp.home', function($breadcrumbs){
	    $breadcrumbs->push(trans('lang.home'), url(cp),['icon'=>'fa fa-home']);
	});


	Breadcrumbs::register('cp.settings', function($breadcrumbs){
	    $breadcrumbs->parent('cp.home');
	    $breadcrumbs->push(trans('lang.settings'), route('main.settings'),['icon'=>'icon-settings']);
	});

} catch (\Exception $e) {
	
}
function setBreadcrumbs($name,$url,$parent = 'cp.home')
{
	try {
		if (is_array($name)) 
		{
			foreach ($name as $key => $trans) 
			{
				Breadcrumbs::register($key, function($breadcrumbs) use($key,$trans,$url,$parent){
				    !is_null($parent) ? $breadcrumbs->parent($parent) : '';
				    $breadcrumbs->push($trans, $url);
				});
			}
		}else{
			Breadcrumbs::register($name, function($breadcrumbs) use($name,$url,$parent){
			    !is_null($parent) ? $breadcrumbs->parent($parent) : '';
			    $breadcrumbs->push(trans('lang.'.$name), $url);
			});
		}
	} catch (\Exception $e) {
		
	}
	
}

function resourceBreadcrumbs($name , $colum , $urls = [],$cp = true,$customName = null)
{
try {
	$indexUrl = isset($urls['index']) ? $urls['index'] : route(str_plural($name).'.index');
	$createUrl = isset($urls['create']) ? $urls['create'] : route(str_plural($name).'.create');
	$model = '\App\\'.ucfirst(str_singular(camel_case($name)));
	Breadcrumbs::register(str_plural($name), function($breadcrumbs) use($name,$indexUrl,$cp,$customName){
	    $breadcrumbs->parent(($cp ? 'cp.home' : 'home'));
	    $trans = !is_null($customName) ? $customName : trans('lang.'.str_plural($name));
	    $breadcrumbs->push($trans, $indexUrl);
	});

	Breadcrumbs::register(str_plural($name).'.create', function($breadcrumbs) use($name,$createUrl){
	    $breadcrumbs->parent(str_plural($name));
	    $breadcrumbs->push(trans('lang.create'), $createUrl);
	});

	Breadcrumbs::register(str_plural($name).'.show', function($breadcrumbs,$id) use($name,$model,$colum ){
		$showUrl = isset($urls['show']) ? $urls['show'] : route(str_plural($name).'.show',$id);
	    $breadcrumbs->parent(str_plural($name));
	    $query = $model::find($id);
	    if (is_callable($colum)) 
	    {
	    	$dbname = @call_user_func_array($colum, [$query]);
	    }else{
	    	$dbname = @$query->{$colum};
	    }
	    $breadcrumbs->push($dbname, $showUrl);
	});

	Breadcrumbs::register(str_plural($name).'.edit', function($breadcrumbs,$id) use($name,$model,$colum ){
		$showUrl = isset($urls['show']) ? $urls['show'] : route(str_plural($name).'.show',$id);
		$editUrl = isset($urls['edit']) ? $urls['edit'] : route(str_plural($name).'.edit',$id);
	    $breadcrumbs->parent(str_plural($name));
	    $query = $model::find($id);
	    if (is_callable($colum)) 
	    {
	    	$dbname = @call_user_func_array($colum, [$query]);
	    }else{
	    	$dbname = @$query->{$colum};
	    }
	    $breadcrumbs->push($dbname, $showUrl);
	    $breadcrumbs->push(trans('lang.edit'), $editUrl);
	});

} catch (\Exception $e) {
	
}
	
}


function breadcrumbs($name = 'settings')
{
	return Breadcrumbs::renderIfExists($name);
}
function getBreadcrumbs($name,$id = null)
{

	return (object)[
		'get' => Breadcrumbs::renderIfExists($name),
		'index' => Breadcrumbs::renderIfExists(str_plural($name)),
		'create' => Breadcrumbs::renderIfExists(str_plural($name).'.create'),
		'show' => Breadcrumbs::renderIfExists(str_plural($name).'.show',$id),
		'edit' => Breadcrumbs::renderIfExists(str_plural($name).'.edit',$id),
		'order' => Breadcrumbs::renderIfExists(str_plural($name).'.order'),
	];
}
