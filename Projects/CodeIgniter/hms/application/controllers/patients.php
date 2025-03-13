<?php

date_default_timezone_set('Asia/Kolkata'); 

class Patients extends CI_Controller
{

	public function index()
	{	

		$result_data['test_data'] = $this->test_model->fetch_data('*','mst_tests',array(),"'LastUpdated Id'");
		$result_data['subtest_data'] = $this->test_model->fetch_data('*','mst_subtests',array(),"'LastUpdated Id'");
		$result_data['doctor_data'] = $this->test_model->fetch_data('*','mst_doctors',array('DoctorCategory' => 'Doctor Entry'),"'LastUpdated Id'");
		$this->load->view('admin/patients_index',$result_data);
	}


	public function load_datatable()
	{	

        $result_data = $this->patient_model->fetch_patients_data();

        $html = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
					<thead>
						<tr>
                            <th>Action</th>
                            <th>Patient Name</th>
                            <th>Test Name</th>
                            <th>Sub Test Names</th>
                            <th>Last Updated</th>
                        </tr>
                    </thead>";

		$btns = '';

		foreach ($result_data as $key => $value) {

			$btns = '<a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="edit_test('.$value['Id'].');"><i class="fa fa-pencil-square-o"></i></a> &nbsp;';	
			
			$btns .= '<a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="delete_test('.$value['Id'].');"><i class="fa fa-trash"></i></a>';

			$html  .= "<tr>
							<td>".$btns."</td>
							<td>".$value['FirstName']." ".$value['LastName']."</td>
							<td>".$value['TestName']."</td>
							<td>".$value['SubTestNames']."</td>
							<td>".$value['LastUpdated']."</td>
						</tr>";
		}


		$html .= "</table>";
		
		echo $html;

	}

	public function create()
	{
		$this->form_validation->set_rules('mobile_number', 'trim');
		$this->form_validation->set_rules('registration_code', 'trim');
		$this->form_validation->set_rules('lab_id_no', 'trim');
		$this->form_validation->set_rules('date', 'trim');
		$this->form_validation->set_rules('first_name', 'trim');
		$this->form_validation->set_rules('last_name', 'trim');
		$this->form_validation->set_rules('gender', 'trim');
		$this->form_validation->set_rules('date_of_birth', 'trim');
		$this->form_validation->set_rules('age', 'trim');
		$this->form_validation->set_rules('reference_doctor', 'trim');
		$this->form_validation->set_rules('test_id', 'trim');
		$this->form_validation->set_rules('sub_test_id', 'trim');
		

		$data = array(
						'TestId' => $this->input->post('test_id'),
						'SubTestId' => implode(",", $this->input->post('sub_test_id')),
						'MobileNumber' => $this->input->post('mobile_number'),
						'RegitrationCode' => $this->input->post('registration_code'),
						'LabIDNo' => $this->input->post('lab_id_no'),
						'Date' => $this->input->post('date'),
						'FirstName' => strtoupper($this->input->post('first_name')),
						'LastName' => strtoupper($this->input->post('last_name')),
						'Gender' => $this->input->post('gender'),
						'DateOfBirth' => $this->input->post('date_of_birth'),
						'Age' => $this->input->post('age'),
						'ReferenceDoctor' => $this->input->post('reference_doctor'),
						'LastUpdated' => date('Y-m-d H:i:s')
					);

		$insert = $this->patient_model->create_test($data);
		echo json_encode($insert);

	}



	public function get_data_for_edit()
	{	
		$patient_test_id = $this->input->post('patient_test_id');
		$result = $this->patient_model->edit_patient_test($patient_test_id);

		echo json_encode($result);
	}



	public function update()
	{
		$this->form_validation->set_rules('mobile_number', 'trim');
		$this->form_validation->set_rules('registration_code', 'trim');
		$this->form_validation->set_rules('lab_id_no', 'trim');
		$this->form_validation->set_rules('date', 'trim');
		$this->form_validation->set_rules('first_name', 'trim');
		$this->form_validation->set_rules('last_name', 'trim');
		$this->form_validation->set_rules('gender', 'trim');
		$this->form_validation->set_rules('date_of_birth', 'trim');
		$this->form_validation->set_rules('age', 'trim');
		$this->form_validation->set_rules('reference_doctor', 'trim');
		$this->form_validation->set_rules('test_id', 'trim');
		$this->form_validation->set_rules('sub_test_id', 'trim');
		
		$patient_test_id = $this->input->post('patient_test_id');
		$data = array(
						'TestId' => $this->input->post('test_id'),
						'SubTestId' => implode(",", $this->input->post('sub_test_id')),
						'MobileNumber' => $this->input->post('mobile_number'),
						'RegitrationCode' => $this->input->post('registration_code'),
						'LabIDNo' => $this->input->post('lab_id_no'),
						'Date' => $this->input->post('date'),
						'FirstName' => strtoupper($this->input->post('first_name')),
						'LastName' => strtoupper($this->input->post('last_name')),
						'Gender' => $this->input->post('gender'),
						'DateOfBirth' => $this->input->post('date_of_birth'),
						'Age' => $this->input->post('age'),
						'ReferenceDoctor' => $this->input->post('reference_doctor'),
						'LastUpdated' => date('Y-m-d H:i:s')
					);

		$update = $this->patient_model->update_test($data,$patient_test_id);
		echo json_encode($update);

	}

	public function delete_data()
	{	
		$patient_test_id = $this->input->post('patient_test_id');
		$result = $this->patient_model->delete_patient_test($patient_test_id);
		echo json_encode($result); 
	}


}



?>


