<?php
use PROJECT\Application;
/**
 * @description
 * The env function is used to retrieve the value of an environment variable identified by the provided key.
 * If the variable is not found, the function falls back to a default value specified by the second argument.
 */
if (!function_exists("env")):
    function env($key, $value = null)
    {
        return $_ENV[$key] ?? value($value);
    }
endif;
/**
 * @description
 * the value function is a utility function that checks if the provided value is a Closure (anonymous function).
 * If it is a Closure, the function executes it and returns the result. Otherwise, it simply returns the provided value.
 */
if (!function_exists("value")):
    function value($value)
    {
        return ($value instanceof Closure) ? $value() : $value;
    }
endif;

/**
 * @description
 * The base_path function returns the base directory path of the project by using dirname(__DIR__) to get the parent directory of the current file and appending '/../' to move up one level in the directory structure.
 */
if (!function_exists("base_path")):
    function base_path(): string
    {
        return dirname(__DIR__) . '/../';
    }
endif;

/**
 * @description
 * The view_path function returns the path to the directory where views (templates or HTML files) are typically stored within the project. It utilizes the base_path function to get the base directory path and appends 'views/' to it.
 */
if (!function_exists("view_path")):
    function view_path(): string
    {
        return base_path() . 'views/';
    }
endif;

if(!function_exists("app")){
    function app(): ?Application
    {
        static $instance = null;
        if(!$instance){
            $instance = new Application;
        }
        return $instance;
    }
}