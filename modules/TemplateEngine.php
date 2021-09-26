<?php
namespace modules;

session_start();

class TemplateEngine {

    public function __construct($template, $params, $layout)
    {
        include_once LAYOUTS . $template . ".php";
        if (is_array($params)) {
            extract($params);
        }
        ob_start();
        $file_view = PAGES . $layout . ".php";
        if (is_file($file_view)) {
            require $file_view;
        } else {
            return "ERORR!";
        }
        $content = ob_get_clean();
        $_SESSION['content'] = $content;
        $_SESSION['params'] = $params;
        $_SESSION['products'] = $products;
    }
}