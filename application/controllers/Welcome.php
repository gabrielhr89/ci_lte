<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		var_dump("hla"); die;
		redirect(base_url('admin'));
	}
}
