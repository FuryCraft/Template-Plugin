<?php

class EmptyController extends AppController
{
	public function index()
	{
		return true;
	}
	
	public function admin_index()
	{
		$this->layout = 'admin';
	}
}