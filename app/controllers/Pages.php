<?php
class Pages extends Controller{
    public function __construct() {
        
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

    public function service(){
        $this->view('pages/service');
    }

    public function cart(){
        $this->view('pages/cart');
    }
}