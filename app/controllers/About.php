<?php

class About {
    public function index($name = 'Bean', $job = 'Programmer'){
        echo "Hello, my name is ".$name." and I'm a ".$job;
    }
    public function page(){
        echo "About/page";
    }
}