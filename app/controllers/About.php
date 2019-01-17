<?php

class About extends Controller {
    public function index(string $name = 'Bean',string $job = 'Programmer',int $age = 26){
        $data['name'] = $name;
        $data['job'] = $job;
        $data['age']  = $age;
        $data['title'] = 'About me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        $data['title'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
        
    }
}