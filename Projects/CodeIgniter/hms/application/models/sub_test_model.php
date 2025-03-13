<?php



class Sub_test_model extends CI_model
{
	
	public function create_sub_test($data,$input_names,$dy_table_name)
	{	

		$insert_data = $this->db->insert('mst_subtests',$data);
		$this->load->dbforge();

		$this->dbforge->add_field("id");
		for ($i=0; $i < count($input_names); $i++) { 

			$this->dbforge->add_field("".$input_names[$i]." varchar(100) NOT NULL");

		}

		if ($this->dbforge->create_table("sub_test_".$dy_table_name)) {
			$fields = array(
		        
			        'PatientId' => array('type' => 'INT','after' => 'id')
			);
			$this->dbforge->add_column("sub_test_".$dy_table_name, $fields);
			return $insert_data;
		}else{
			return false;
		}

	}


	// public function fetch_data($data,$table_name,$where,$order_by)
	// {
	// 	$query = $this->db->select($data)->from($table_name)->where($where)->order_by($order_by)->get();
	// 	return $query->result_array();
	// }


	// public function fetch_ref_doctor_data($data,$table_name,$where,$order_by)
	// {
	// 	$query = $this->db->select($data)->from($table_name)->where($where)->order_by($order_by)->get();
	// 	return $query->result_array();
	// }

	public function fetch_data()
	{	

		$query = $this->db->select('*')->from('mst_tests')->join('mst_subtests','mst_tests.Id = mst_subtests.TestId')->order_by('`mst_tests`.`Id` ASC, `mst_subtests`.`LastUpdated` DESC')->get();
		return $query->result_array();

	}

	public function edit_data($sub_test_id)
	{	


		$this->db->where('`mst_subtests`.`Id`',$sub_test_id);
		$query = $this->db->select('*')->from('mst_tests')->join('mst_subtests','mst_tests.Id = mst_subtests.TestId')->get();
		return $query->row();

		// $this->db->where('Id',$sub_test_id);
		// $query = $this->db->get('mst_subtests');
		// return $query->row_array();
	}



	public function update_sub_test($data,$sub_test_id,$input_names,$dy_table_name)
	{	
		$this->load->dbforge();
		$this->db->where('Id',$sub_test_id);
		$result = $this->db->get('mst_subtests');
		$old_table_name = $result->row(6)->DynamicTableName;
		$input_count = $result->row(3)->InputCount;

		if ($input_count == count($input_names) || $input_count != count($input_names)) {

			$old_tbl_drop = $this->dbforge->drop_table($old_table_name);

			$this->dbforge->add_field("id");
			for ($i=0; $i < count($input_names); $i++) { 

				$this->dbforge->add_field("".$input_names[$i]." TEXT NOT NULL");

			}

			if ($this->dbforge->create_table("sub_test_".$dy_table_name)) {
				$fields = array(
			        
				    'PatientId' => array('type' => 'INT','constraint' => '11','after' => 'id')
				);
				$this->dbforge->add_column("sub_test_".$dy_table_name, $fields);
				$this->db->where('Id',$sub_test_id);
				$query = $this->db->update('mst_subtests',$data);

				if ($query) {

					return true;

				}else{

					return false;
				}
				
			}else{

				return false;
			}

		}


	}	

	public function delete_sub_test($sub_test_id,$table_name)
	{	
		$this->load->dbforge();
		$this->db->where('Id',$sub_test_id);
		$query = $this->db->delete('mst_subtests');
		$table_drop = $this->dbforge->drop_table($table_name,TRUE);

		if ($query && $table_drop) {
			return true;
		}else{
			return false;
		}
	}

	public function check_sub_test_name($sub_test_name)
	{

		$result = $this->db->select('SubTestName')->from('mst_subtests')->get();
		$SubTestName = $result->result_array();
		$row_array = array_column($SubTestName, "SubTestName");

		if (!in_array($sub_test_name, $row_array)) {
			return true;
		}else{
			return false;
		}

		
	}


	public function get_sub_test_data($test_id,$status,$sub_test_id)
	{	
		$html = '';
		$query = $this->db->select('*')->from('mst_subtests')->where('TestId',$test_id)->get();

		if ($status == 'Add') {

			$result = $query->result_array(); 

			$html .= '<label for="sub_test_id">Select Sub-Test AJAX</label><select class="form-control selectpicker" multiple name="sub_test_id[]" id="sub_test_id" data-live-search="true" data-actions-box="true">';

				foreach ($result as $key => $value) {
					$html .= '<option value="'.$value['Id'].'">'.$value['SubTestName'].'</option>';
				}

			$html .= '</select>';

			return $html;


		}else{

			$result = $query->result_array(); 

			$html .= '<label for="update_sub_test_id"> er Select Sub-Test AJAX</label><select class="form-control selectpicker" multiple name="sub_test_id[]" id="update_sub_test_id" data-live-search="true" data-actions-box="true">';

				$sub_test_id1 = explode(",", $sub_test_id);

				foreach ($result as $key => $value) {

					$sel = (in_array($value['Id'], $sub_test_id1)) ? 'selected' : '';
					
					$html .= '<option value="'.$value['Id'].'" '.$sel.'>'.$value['SubTestName'].'</option>';

				}

			$html .= '</select>';

			return $html;
		}

	}	

		








}







?>