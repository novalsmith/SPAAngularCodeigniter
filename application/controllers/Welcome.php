<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	


	public function index()
	{
		$this->load->view('index');
	}
	
	public function home(){
            $this->load->view('home');
    }

    	public function about(){
            $this->load->view('about');
    }

    	public function contact(){
            $this->load->view('contact');
    }
}
