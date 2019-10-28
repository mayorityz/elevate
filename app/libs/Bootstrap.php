<?php
class Bootstrap
{
    function __construct()
    {
        /**
         * @param $url returns an array from any url
         */
        $url = $this->getUrl();

        // default controller
        if ($url[0] == '') {
            require "app/controllers/index.php";
            $controller = new index();
            $controller->loadModel('index');
            $controller->index();
            // return false;
        } else {
            // 1. 
            $file = 'app/controllers/' . $url[0] . '.php';
            if (file_exists($file)) {
                require $file;
                $controller = new $url[0]; //the new $url[0] class is autoloaded .
                $controller->loadModel($url[0]); // the corresponding model is added immediately too; if it exists
                unset($url[0]);
            } else {
                // throw new Exception("file: 404 page");
                $this->errorHand();
                return false;
            }

            // 2. check if the $url[1] exists in the class url[0]
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                    $this->params = $url ? array_values($url) : [];
                    call_user_func_array([$controller, $this->currentMethod], $this->params);
                } else {
                    $this->errorHand();
                }
            }
            else {
                // means every controller must have an index method by default...
                $controller->index();
            }
        }
    }

    public function getUrl()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, "/");
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }

    public function errorHand()
    {
        require_once './app/controllers/notfound.php';
        $error = new notfound;
        $error->index();
        return false;
    }
}
