<?php 

class Scholar extends Controller{
    public function index(){
        $data['title'] =  'Scholar list';
        $data['scholar'] = $this->model('Scholar_model')->getAllSch();
        $this->view('templates/header', $data);
        $this->view('scholar/index', $data);
        $this->view('templates/footer');
    }
}