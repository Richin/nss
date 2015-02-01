<?php 
class Basic extends  CI_Controller
{
	function index()
	{
	
		$data["title"]="sample";
		$data["main_content"]="sample";
		$this->load->view("includes/template", $data);
	}	
}
