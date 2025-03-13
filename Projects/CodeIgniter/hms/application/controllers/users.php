<?php


class Users extends CI_Controller
{
	public function user_index()
	{	
		$this->load->view('admin/user_index');
	}

	public function load_datatable()
	{
		$result_data = $this->user_model->fetch_users_data('*','mst_users',array());
		$result = array();

		$btns = '';

		foreach ($result_data as $key => $value) {
		$btns = '<a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="edit_user('.$value['Id'].');"><i class="fa fa-pencil-square-o"></i></a> &nbsp;';	
		
		$btns .= '<a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="delete_user('.$value['Id'].');"><i class="fa fa-trash"></i></a>';

		$result['data'][] = array(
								$btns,
								$value['UserName'],
								$value['FirstName']." ".$value['LastName'],
								$value['EmailId'],
								$value['UserRole'],
								$value['LastUpdated']
							);
		}

		echo json_encode($result);
	}

	public function create()
	{

		$this->form_validation->set_rules('first_name', 'trim');
		$this->form_validation->set_rules('last_name', 'trim');
		$this->form_validation->set_rules('email_id', 'trim');
		$this->form_validation->set_rules('username', 'trim');
		$this->form_validation->set_rules('password', 'trim');
		$this->form_validation->set_rules('user_role', 'trim');

		$data = array(

						'FirstName' => $this->input->post('first_name'),
						'LastName' => $this->input->post('last_name'),
						'EmailId' => $this->input->post('email_id'),
						'UserName' => $this->input->post('username'),
						'Password' => $this->input->post('password'),
						'UserRole' => $this->input->post('user_role')

					);

		$insert = $this->user_model->create_user($data);
		echo json_encode($insert);

	}



	public function get_data_for_edit()
	{
		$user_id  = $this->input->post('user_id');
		$result = $this->user_model->edit_data($user_id);

		echo json_encode($result);
	}



	public function update()
	{

		$this->form_validation->set_rules('first_name', 'trim');
		$this->form_validation->set_rules('last_name', 'trim');
		$this->form_validation->set_rules('email_id', 'trim');
		$this->form_validation->set_rules('username', 'trim');
		$this->form_validation->set_rules('password', 'trim');
		$this->form_validation->set_rules('user_role', 'trim');

		$user_id = $this->input->post('user_id');	
		$data = array(

						'FirstName' => $this->input->post('first_name'),
						'LastName' => $this->input->post('last_name'),
						'EmailId' => $this->input->post('email_id'),
						'UserName' => $this->input->post('username'),
						'Password' => $this->input->post('password'),
						'UserRole' => $this->input->post('user_role')

					);

		$update = $this->user_model->update_user($data,$user_id);
		echo json_encode($update);

	}

	public function delete_data()
	{	
		$user_id = $this->input->post('user_id');
		$result = $this->user_model->delete_user($user_id);
		echo json_encode($result); 
	}


}




?>


