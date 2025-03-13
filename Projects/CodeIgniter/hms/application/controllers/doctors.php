<?php

date_default_timezone_set('Asia/Kolkata'); 

class Doctors extends CI_Controller
{

	public function doctor_index()
	{	
		$this->load->view('admin/doctor_index');
	}


	public function load_datatable()
	{	

      $postData = $this->input->post();

      $data = $this->doctor_model->get_data($postData);

      echo json_encode($data);

	}

	public function create()
	{

		$this->form_validation->set_rules('doctor_category', 'trim');
		$this->form_validation->set_rules('doctor_code', 'trim');
		$this->form_validation->set_rules('doctor_name', 'trim');
		$this->form_validation->set_rules('doctor_phone_number', 'trim');
		$this->form_validation->set_rules('doctor_email', 'trim');
		$this->form_validation->set_rules('compliment', 'trim');
		$this->form_validation->set_rules('doctor_qualification', 'trim');
		$this->form_validation->set_rules('doctor_address', 'trim');

		$data = array(

						'DoctorCategory' => $this->input->post('doctor_category'),
						'DoctorCode' => $this->input->post('doctor_code'),
						'DoctorName' => strtoupper("DR. ".$this->input->post('doctor_name')),
						'DoctorPhoneNumber' => $this->input->post('doctor_phone_number'),
						'DoctorEmail' => $this->input->post('doctor_email'),
						'Compliment' => $this->input->post('compliment'),
						'DoctorQualification' => $this->input->post('doctor_qualification'),
						'DoctorAddress' => $this->input->post('doctor_address'),
						'LastUpdated' => date('Y-m-d H:i:s')

					);

		$insert = $this->doctor_model->create_doctor($data);
		echo json_encode($insert);

	}



	public function get_data_for_edit()
	{
		$doctor_id  = $this->input->post('doctor_id');
		$result = $this->doctor_model->edit_data($doctor_id);

		echo json_encode($result);
	}



	public function update()
	{

		$this->form_validation->set_rules('doctor_category', 'trim');
		$this->form_validation->set_rules('doctor_code', 'trim');
		$this->form_validation->set_rules('doctor_name', 'trim');
		$this->form_validation->set_rules('doctor_phone_number', 'trim');
		$this->form_validation->set_rules('doctor_email', 'trim');
		$this->form_validation->set_rules('compliment', 'trim');
		$this->form_validation->set_rules('doctor_qualification', 'trim');
		$this->form_validation->set_rules('doctor_address', 'trim');

		$doctor_id = $this->input->post('doctor_id');	
		$data = array(

						'DoctorCategory' => $this->input->post('doctor_category'),
						'DoctorCode' => $this->input->post('doctor_code'),
						'DoctorName' => strtoupper("DR. ".$this->input->post('doctor_name')),
						'DoctorPhoneNumber' => $this->input->post('doctor_phone_number'),
						'DoctorEmail' => $this->input->post('doctor_email'),
						'Compliment' => $this->input->post('compliment'),
						'DoctorQualification' => $this->input->post('doctor_qualification'),
						'DoctorAddress' => $this->input->post('doctor_address'),
						'LastUpdated' => date('Y-m-d H:i:s')

					);

		$update = $this->doctor_model->update_doctor($data,$doctor_id);
		echo json_encode($update);

	}

	public function delete_data()
	{	
		$doctor_id = $this->input->post('doctor_id');
		$result = $this->doctor_model->delete_doctor($doctor_id);
		echo json_encode($result); 
	}


}



?>


