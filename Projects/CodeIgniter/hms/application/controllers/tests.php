<?php

date_default_timezone_set('Asia/Kolkata'); 
class Tests extends CI_Controller
{

	public function test_index()
	{	
		$this->load->view('admin/test_index');
	}


	public function load_datatable()
	{
		$result_data = $this->test_model->fetch_data('*','mst_tests',array(),"'LastUpdated DESC'");
		$result = array();

		$btns = '';

		foreach ($result_data as $key => $value) {
		$btns = '<a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="edit_test('.$value['Id'].');"><i class="fa fa-pencil-square-o"></i></a> &nbsp;';	
		
		$btns .= '<a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="delete_test('.$value['Id'].');"><i class="fa fa-trash"></i></a>';

		$result['data'][] = array(
								$btns,
								$value['TestName'],
								$value['LastUpdated']
							);
		}

		echo json_encode($result);
	}

	public function create()
	{

		$this->form_validation->set_rules('test_name', 'trim');

		$data = array(
						'TestName' => $this->input->post('test_name'),
						'LastUpdated' => date('Y-m-d H:i:s')
					);

		$insert = $this->test_model->create_test($data);
		echo json_encode($insert);

	}



	public function get_data_for_edit()
	{
		$test_id  = $this->input->post('test_id');
		$result = $this->test_model->edit_data($test_id);

		echo json_encode($result);
	}



	public function update()
	{

		$this->form_validation->set_rules('test_name', 'trim');

		$test_id = $this->input->post('test_id');	
		$data = array(
						'TestName' => $this->input->post('test_name'),
						'LastUpdated' => date('Y-m-d H:i:s')
					);

		$update = $this->test_model->update_test($data,$test_id);
		echo json_encode($update);

	}


	public function delete_data()
	{	
		$test_id = $this->input->post('test_id');
		$result = $this->test_model->delete_tests($test_id);
		echo json_encode($result); 
	}


	

}




?>


