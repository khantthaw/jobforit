<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('news_model');
	}
	public function index(){
		$this->lang->load('email_lang', 'english');
		// $this->lang->load('cs_module_messages', 'czech');

		// $res['language']=$this->lang->line('email_lang');
		// echo $this->lang->line('cs_language_key');
		$res['position']=$this->news_model->getPosition();
		print_r($res);exit;
		$this->load->view('news_show',$res);
	
	}
	public function showbyId($id){
		
		$res['infobyid']=$this->news_model->getPositionbyId($id);
		$this->load->view('newsbyId',$res);
	
	}

	public function showPosWithEdu(){
		$res['posbyedu']=$this->news_model->getPosWithEdu();
		$this->load->view('news_show',$res);
	}

	public function showNewsInsertForm(){
		$this->load->view('news_insert');
	}
	public function saveNewsInsertForm(){

		$data=array(
			'title'=>$this->input->post('news-title'),
			'content'=>$this->input->post('news-content'),
			'photo'=>$this->input->post('news-photo')
		);
	 $status=$this->news_model->insertNews($data);
	 if(isset($status)){
	 	print_r($_FILES);exit;
	 }
	 // print_r($status);exit;
	}
}

?>