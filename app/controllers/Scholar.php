<?php 

class Scholar extends Controller{
    public function index(){
        $data['title'] =  'Scholar list';
        $data['scholar'] = $this->model('Scholar_model')->getAllSch();
        $this->view('templates/header', $data);
        $this->view('scholar/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['title'] =  'Scholar detail';
        $data['scholar'] = $this->model('Scholar_model')->getSchById($id);
        $this->view('templates/header', $data);
        $this->view('scholar/detail', $data);
        $this->view('templates/footer');
    }
}