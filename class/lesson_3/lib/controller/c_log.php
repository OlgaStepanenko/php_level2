<?php 

class c_log extends c_login {
    public function index() {
        $this-view->render('c_log');
    }
}

public function __construct() {
    Session::init();
    $log = Session::get('logIn');
    if($log == false) {
        Session::destroy();
        exit();
    }
}

public function logout() {
    Session::destroy();
    exit();
}



?>