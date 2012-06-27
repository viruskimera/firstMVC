<?php
require_once 'libs/smarty/libs/Smarty.class.php';


class Controller extends Smarty
{
	public $show;
	public $model;

	function __construct(){
		
		parent::__construct();
		$this->show = new Show();
		$this->model = new Model();

		$this->set_smarty();

		//page we are?
		$this->home();
	}

	function set_smarty(){

		$this->template_dir = 'views/';
		$this->cache_dir = 'tmp/chache/';
		$this->compile_dir = 'tmp/template/';

	}

	function left(){
		$this->display('left.tpl');
	}

	function home()
	{
		$this->assign('data', $this->model->get());
		$this->display('template.tpl');

	}

}