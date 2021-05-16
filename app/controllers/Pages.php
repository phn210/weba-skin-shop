<?php
class Pages extends Controller{
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function home(){
        $data = [
            'title' => 'Home page',
            'name' => 'WEBA'
        ];

        $this->view('pages/home', $data);
    }

    public function about(){
        $this->view('pages/about');
    }
}