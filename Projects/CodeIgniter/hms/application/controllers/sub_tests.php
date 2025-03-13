<?php

date_default_timezone_set('Asia/Kolkata'); 
class Sub_tests extends CI_Controller
{

	public function sub_test_index()
	{	
		$this->load->view('admin/sub_test_index');
	}

	public function sub_test()
	{	
		$this->load->view('admin/sub_test');
	}

	public function load_datatable()
	{
		$result_data = $this->sub_test_model->fetch_data();

		// print_r($result_data);
		$result = array();

		$btns = '';

		foreach ($result_data as $key => $value) {
		$btns = '<a href="'.base_url("sub_tests/sub_test/".$value['Id']."").'" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i></a> &nbsp;';	
		
		$btns .= '<a href="javascript:void(0)" class="btn btn-sm btn-danger" alt="'.$value['DynamicTableName'].'" onclick="delete_sub_test(this,'.$value['Id'].');"><i class="fa fa-trash"></i></a>';

		$result['data'][] = array(
								$btns,
								$value['TestName'],
								$value['SubTestName'],
								$value['LastUpdated']
							);
		}

		echo json_encode($result);
	}



	public function create()
	{

		$input_label_name = $this->input->post('input_label_name');
		$input_labels = [];
		$input_names = [];

		for ($i=0; $i < count($input_label_name); $i++) { 

			$input_labels[] = ucwords($input_label_name[$i]);
			$input_names[] = preg_replace('!\s+!', '', ucwords($input_label_name[$i]));
			$input_count = count($input_label_name);

		}

		$dy_table_name = preg_replace('!\s+!', '', strtolower($this->input->post('sub_test_name')));
		$this->form_validation->set_rules('sub_test_name', 'trim');
		$this->form_validation->set_rules('input_label_name', 'trim');


		$data = array(	
						'TestId' => $this->input->post('test_id'),
						'SubTestName' => strtoupper($this->input->post('sub_test_name')),
						'InputCount' => $input_count,
						'InputLabels' => implode(",", $input_labels),
						'InputNames' => implode(",", $input_names),
						'DynamicTableName' => "sub_test_".$dy_table_name,
						'LastUpdated' => date('Y-m-d H:i:s')
					);

		$insert = $this->sub_test_model->create_sub_test($data,$input_names,$dy_table_name);
		echo json_encode($insert);

	}



	public function get_data_for_edit()
	{
		$sub_test_id  = $this->input->post('sub_test_id');
		$result = $this->sub_test_model->edit_data($sub_test_id);
		echo json_encode($result);
	}



	public function update()
	{

		
		$sub_test_id = $this->input->post('sub_test_id');	
		$input_label_name = $this->input->post('input_label_name');

		// print_r($input_label_name);
		// echo "<br>";
		//echo count($input_label_name);

		//die();

		
		$input_labels = [];
		$input_names = [];

		for ($i=0; $i < count($input_label_name); $i++) { 

			$input_labels[] = ucwords($input_label_name[$i]);
			$input_names[] = preg_replace('!\s+!', '', ucwords($input_label_name[$i]));
			$input_count = count($this->input->post('num_row'));

		}

		$dy_table_name = preg_replace('!\s+!', '', strtolower($this->input->post('sub_test_name')));



		$data = array(	
						'TestId' => $this->input->post('test_id'),
						'SubTestName' => strtoupper($this->input->post('sub_test_name')),
						'InputCount' => $input_count,
						'InputLabels' => implode(",", $input_labels),
						'InputNames' => implode(",", $input_names),
						'DynamicTableName' => "sub_test_".$dy_table_name,
						'LastUpdated' => date('Y-m-d H:i:s')
					);

		$update = $this->sub_test_model->update_sub_test($data,$sub_test_id,$input_names,$dy_table_name);
		echo json_encode($update);

	}


	public function delete_data()
	{	
		$sub_test_id = $this->input->post('sub_test_id');
		$table_name = $this->input->post('table_name');
		$result = $this->sub_test_model->delete_sub_test($sub_test_id,$table_name);
		echo json_encode($result); 
	}

	public function check_subtest_name()
	{
		$sub_test_name = trim(strtoupper($this->input->post('sub_test_name')));
		echo $check_subtest_name = $this->sub_test_model->check_sub_test_name($sub_test_name);
	}

	public function get_sub_test()
	{	

		$sub_test_id = $this->input->post('sub_test_id');
		$test_id = $this->input->post('test_id');
		$status = $this->input->post('status');
		$result = $this->sub_test_model->get_sub_test_data($test_id,$status,$sub_test_id);
		echo $result;
	}


}




?>


