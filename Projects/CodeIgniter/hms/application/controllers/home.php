<?php


class Home extends CI_Controller
{

	public function index()
	{	
		return $this->load->view('users/login_view');
	}


	// public function admin()
	// {	
	// 	$this->load->view('admin/admin_view');
	// }



	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}

}





?>


