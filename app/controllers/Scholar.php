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

    public function insert(){
        if($this->model('Scholar_model')->insertScholar($_POST)>0){
            Flasher::setFlash('successfully','added','success');
            header('Location: '.BASEURL.'/scholar');
            exit;
        }
        else{
            Flasher::setFlash('failed','to be added','danger');
            header('Location: '.BASEURL.'/scholar');
            exit;
        }
    }

    public function delete($id){
        if($this->model('Scholar_model')->deleteScholar($id)>0){
            Flasher::setFlash('successfully','deleted','success');
            header('Location: '.BASEURL.'/scholar');
            exit;
        }
        else{
            Flasher::setFlash('failed','to delete','danger');
            header('Location: '.BASEURL.'/scholar');
            exit;
        }
    }

    public function getUpdate(){
        echo json_encode($this->model('Scholar_model')->getSchById($_POST['id']));
    }

    public function update(){
        if($this->model('Scholar_model')->updateScholar($_POST)>0){
            Flasher::setFlash('successfully','updated','success');
            header('Location: '.BASEURL.'/scholar');
            exit;
        }
        else{
            Flasher::setFlash('failed','to be updated','danger');
            header('Location: '.BASEURL.'/scholar');
            exit;
        }
    }
}