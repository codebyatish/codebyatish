<?php


class Admin extends CI_Controller
{
	public function index()
	{	
		return $this->load->view('admin/admin_view');
	}

	public function login()
	{	
		$this->form_validation->set_rules('username', 'Username', 'trim');
		$this->form_validation->set_rules('password', 'Password', 'trim');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user_id = $this->admin_model->admin_login($username,$password);
		
		if (!empty($user_id)) {
			$user_data = array('user_id' => $user_id,'username' => $username,'logged_in' => true);
			$this->session->set_flashdata('login_success','You are now logged in');
			$this->session->set_userdata($user_data);

			return $this->load->view('admin/admin_view',$user_data);
			//redirect(base_url().'admin/','refresh');
		}else{
			$this->session->set_flashdata('login_failed','Sorry you are not logged in');
			redirect(base_url().'admin/login','refresh');
			
		}
	}

}





?>


