<?php
const DS = DIRECTORY_SEPARATOR;
//$str = str_replace("\\", DS, __DIR__);
//substr($str, 0, strrpos($str, DS));
//$root = substr(str_replace("\\", DS, __DIR__), 0, strrpos(str_replace("\\", DS, __DIR__), DS)) . DS;
define("ROOT", substr(str_replace("\\", DS, __DIR__), 0, strrpos(str_replace("\\", DS, __DIR__), DS)) . DS);
//const ROOT = $str . DS;
//const VIEWS = ROOT . "/views/";
const COMPONENTS = ROOT . "views" . DS . "components" . DS;
const LAYOUTS = ROOT . "views" . DS . "layout" . DS;
const PAGES = ROOT . "views" . DS . "pages" . DS;
/** class autoloading */
spl_autoload_register(
function ($class) {
    $file = ROOT . str_replace("\\", DS, $class) . ".php";
    //echo $file;
    if (is_file($file)) {
        require_once $file;
    }
}
);