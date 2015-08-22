<?php

class Home extends CI_Controller{
	
	public function index ()
	{
		$this->load->view('header_view');
                $this->load->view('home/home_nav');
		$this->load->view('footer_view');
             
	}
}