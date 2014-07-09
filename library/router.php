<?php

/**
 * This acts as a router file for current app
 */

//TODO::set error reporting here
function error_reporting(){
    
}
// unregister global variables
function unregister_globals(){
    
}

//autoload classes
function __autoload($class){
    if(file_exists(dirname(dirname(__FILE__)).'/controllers/'.$class.'.php')){
        require_once(dirname(dirname(__FILE__)).'/controllers/'.$class.'.php');
    }
    else if(file_exists(dirname(dirname(__FILE__)).'/models/'.$class.'.php')){
        require_once(dirname(dirname(__FILE__)).'/models/'.$class.'.php');
    }
    else if(file_exists(dirname(dirname(__FILE__)).'/library/'.$class.'.php')){
        require_once(dirname(dirname(__FILE__)).'/library/'.$class.'.php');
    }else{
        die("Fatal Error: Class not found");
    }
}

// load all necessary classes
function load(){
    
}