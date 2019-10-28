<?php
class Controller
{
    function __construct()
    {
        $this->view = new View;
    }

    // renders the default index page(method) ...
    public function defaultIndex($view, $url, $title)
    {
        $this->view->render($view, $url, $title);
    }

    // models shld run in the controller...
    public function loadModel($name)
    {
        $path = 'app/models/' . $name . '_model.php';
        if (file_exists($path)) {
            require $path;
            $modelName = $name . '_model';
            $this->model = new $modelName;
        }
    }

    // user unique session
    protected function ip(){
        Session::init();
        if(Session::get('cart') == ''){
        $uniqTime = date('d-m-Y H:i:s').rand(1,1000);
        $value = Hash::create('sha256', $uniqTime, 'cart');
            Session::set('cart', $value);
        }
        
        return $ip = Session::get('cart');
    }

    // General Error Pages
    public function errorPage($msg)
    {
        require_once './app/controllers/pages/displayerror.php';
        return $error = new Displayerror($msg);
    }

    public function removeUnderScore($string){
        $newString = str_replace("_", " ", $string);
        return $newString;
    }

    


    // clean up any string
    public function cleanString($string)
    {
        $string = trim($string);
        $string = preg_replace('/[^a-z0-9-]+/', '_', strtolower($string));
        return $string;
    }


    // Auth Controller
    public function adminAuth()
    {
        Session::init();
        $sess = Session::get('adminlog');
        if (!isset($sess)) {
            // Session::destroy();
            header('location: ../auth/login');
            exit();
        }
    }
}
