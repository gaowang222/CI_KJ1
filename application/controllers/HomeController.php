<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	function HomeController(){
		parent::__construct();
		//1,如果不添加这个方法，在前端使用url的时候会出问题
		$this->load->helper('url');
		$this->load->model('SliderModerl');
	}

	public function index()
	{
		$data['sliders'] = $this->SliderModerl->getSlider();
		$this->load->view('home',$data);
	}
}
