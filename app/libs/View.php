<?php
    class View{
        function __construct()
        {
            
        }

        public function render($view , $name, $data){
            require_once 'app/views/'.$view.'/incs/header.php';
            require 'app/views/'.$view.'/'.$name.'.php';
            require_once 'app/views/'.$view.'/incs/footer.php';
        }

        public function login($view , $name){
            require 'app/views/'.$view.'/'.$name.'.php';
        }

        public function removeUnderScore($string){
            $newString = str_replace("_", " ", $string);
            return $newString;
        }

        public function source($string){
            $newString = str_replace("../", ROOT."/", $string);
            return $newString;
        }

        public function miniText($body){
            $body = substr($body, 0, 140);
            return $body;
        }

        public function greeting(){
            $hr = date("H");
            $mins = date("i");
            $hr = $hr - 1;
            
                if ($hr <= 11 && $mins < 59 && $mins != 0) {
                    return "Good Morning, ";
                } elseif ($hr > 11 && $hr <= 17 && $mins < 59 ) {
                    return "Good Afternoon, ";
                } else{
                    return "Good Evening, ";
                }
        }
    }