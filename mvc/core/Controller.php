<?php
namespace core;

use app\classes\Uri;
use Exception;

class Controller {
    private $uri;

    public function __construct() {
        $this->uri = Uri::uri();
    }

    public function load() {
        if ($this->isHome()) {
            return $this->controllerHome();
        }
        return $this->controllerNotHome();
    }

    private function controllerHome() {
        if (!$this->controllerExist(HomeController)) {
            throw new ExceptionControllerExist("Esse Controller não existe!");
        }

        return $this->instantiateController();
    }
    
    private function controllerNotHome() {
        
    }

    private function isHome() {
        return ($this->uri == "/");
    }

    private function controllerExist(){
        
    }

    private function instantiateController() {

    }
}
?>