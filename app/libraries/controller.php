<?php
    //Load the model and the view
    class Controller {

        

        public function model($model) {
            //Require model file
            require_once '../app/models/' . $model . '.php';
            //Instantiate model
            return new $model();
        }

        //Load the view (checks for the file)
        public function view($view, $data = []) {
            if (file_exists('../app/views/' . $view . '.php')) {
                require_once '../app/views/' . $view . '.php';
            } else {
                die("View does not exists.");
            }
        }

        public function render($name, $data = []){
            //require_once ('../app/views/Layout/includes/head.php');

            // require_once(ROOT .DS .'app' .DS .'views' .DS .'Layout' .DS .'includes' .DS .'head.php');
            // require_once(ROOT .DS .'app' .DS .'views' .DS .'Layout' .DS .'includes' .DS .'header.php');
  
            // require_once(ROOT .DS .'app' .DS .'views' .DS .'Layout' .DS .'includes' .DS .'sidebar.php');
            // require_once( ROOT .DS .'app' .DS .'views' .DS  . $name . '.php');
            //require_once ('../app/views/Layout/includes/footer.php');

            require_once(ROOT .DS .'app' .DS .'views' .DS .'Layout' .DS .'includes' .DS .'head.php');
            require_once(ROOT .DS .'app' .DS .'views' .DS .'Layout' .DS .'includes' .DS .'header.php');
            require_once(ROOT .DS .'app' .DS .'views' .DS .'Layout' .DS .'includes' .DS .'sidebar.php');
            $this->view($name,$data);
            //require_once ('../app/views/Layout/includes/footer.php');
        }

        public function errview(){

        }
        
    }
