<?php

class Home_Controller extends Base_Controller {


	public $restful = true;

	public function __construct()
	{
		$this->filter('before', 'csfr')->on('post');
	}

	public function action_index()
	{
		return View::make('home.index');
	}

}