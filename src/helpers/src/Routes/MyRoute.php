<?php 
namespace AdelShokry\Helpers\Src\Routes;
/**
* 
*/
use Route;
class MyRoute
{
    public static function shareVariables()
    {
        $shareVariables = app_path('Http/Variables/shareVariables.php');
        if (file_exists($shareVariables)) 
        {
            $share = include $shareVariables;
            $defines = !empty($share['defines']) ? $share['defines'] : [];
            foreach ($defines as $key => $value) 
            {
                define($key, $value);
            }

            $variables = !empty($share['viewShareVariables']) ? $share['viewShareVariables'] : [];
            foreach ($variables as $key => $value) 
            {
                view()->share($key,$value);
            }
        }

    }

    public static function system()
    {
        get('lang/{lang}','Settings\MainController@lang','lang');
        get('maintenance', 'Settings\MainController@maintenance','maintenance');
    }

    
    public static function auth($prefix = null, $controllerPrefix = null)
    {
        $prefix = is_null($prefix) ? '' : $prefix;
        $prefix = str_finish($prefix,'/') ? $prefix : $prefix.'/';
        $controllerPrefix = is_null($controllerPrefix) ? '' : $controllerPrefix.'\\';
        // Authentication Routes...
        Route::get($prefix.'login', $controllerPrefix.'Auth\LoginController@showLoginForm');
        Route::post($prefix.'login', $controllerPrefix.'Auth\LoginController@login');
        Route::get($prefix.'logout', $controllerPrefix.'Auth\LoginController@logout');

        // Registration Routes...
        Route::get($prefix.'register', $controllerPrefix.'Auth\RegisterController@showRegistrationForm');
        Route::post($prefix.'register', $controllerPrefix.'Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get($prefix.'password/reset/{token?}', $controllerPrefix.'Auth\ResetPasswordController@showResetForm');
        Route::post($prefix.'password/email', $controllerPrefix.'Auth\ResetPasswordController@sendResetLinkEmail');
        Route::post($prefix.'password/reset', $controllerPrefix.'Auth\ResetPasswordController@reset');
    }

}
