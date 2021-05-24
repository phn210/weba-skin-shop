<?php
    // Core App Class
    class Core{
        protected $currentController = 'Pages';
        protected $currentMethod = 'home';
        protected $params = [];
        
        public function __construct() {
            $url = $this->getUrl();
            // Check controller exist, ucword capitalize first letter
            if(isset($url[0]) &&file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }

            require_once '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;

            if(isset($url[1])) {
                if(method_exists($this->currentController, $url[1])) {
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }

            // Get parameters
            //$this->params = $url ? array($url) : [];
            $this->params = array_values(array($url)); 
            // Call a callback with array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);      
                    
        }

        public function getUrl() {
            if(isset($_GET['url'])) {
                $url = rtrim($_GET['url'], '/');
                
                // Filter variables as string/number
                $url = filter_var($url, FILTER_SANITIZE_URL);
                // Break url into array
                $url = explode('/', $url);
                return $url;
            }
        }
    }