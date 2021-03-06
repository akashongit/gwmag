<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$this->load->view('basic_form');
	}
	public function loadview()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$this->load->view('basic_form');
	}
public function loadhome()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$this->load->view('home');
	}
public function loadabout()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$this->load->view('about');
	}	
public function loadcontact()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$this->load->view('contact');
	}	
public function loadsayso()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$this->load->view('sayso');
	}
public function loadfaq()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$this->load->view('faq');
	}	
public function loaduslogin()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$this->load->view('uslogin');
	}
public function loadgift()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$this->load->view('gift');
	}		
public function loadjoinus()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$this->load->view('joinus');
	}		
public function loadsample()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$index = 01;
		$this->session->set_userdata('index',$index);
		$this->load->view('sample');
	}	
	public function nextpage()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$index = $this->session->userdata('index');
		$index=$index+1;
		$this->session->set_userdata('index',$index);
		$this->load->view('sample');
	}	
	public function prevpage()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$index = $this->session->userdata('index');
		$index=$index-1;
		$this->session->set_userdata('index',$index);
		$this->load->view('sample');
	}

	public function testing()
	{
		//redirect(base_url().'index.php/login_cont/loginview');
		$this->load->view('testing');
	}			
}
