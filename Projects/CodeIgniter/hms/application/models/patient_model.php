<?php


class Patient_model extends CI_model
{
	
	public function fetch_patients_data()
	{		

		$this->db->select('TestName,mpt.*,GROUP_CONCAT(ms.SubTestName) AS SubTestNames');
		$this->db->from('mst_patients_tests mpt'); 
		$this->db->join('mst_subtests ms', 'FIND_IN_SET(ms.Id,mpt.SubTestId)', 'left');
		$this->db->join('mst_tests mt', 'mt.id = mpt.TestId', 'left');
		$this->db->order_by('mpt.LastUpdated DESC');   
		$this->db->group_by('mpt.Id');

		return $records = $this->db->get()->result_array();

	}


	public function create_test($data)
	{	
		$insert_data = $this->db->insert('mst_patients_tests',$data);
		return $insert_data;
	}


	public function update_test($data,$patient_test_id)
	{
		$this->db->where('Id',$patient_test_id);
		$query = $this->db->update('mst_patients_tests',$data);
		return $query;
	}


	public function edit_patient_test($patient_test_id)
	{
		$this->db->where('Id',$patient_test_id);
		$query = $this->db->get('mst_patients_tests');
		return $query->row_array();
	}

	public function delete_patient_test($patient_test_id)
	{
		$this->db->where('Id',$patient_test_id);
		$query = $this->db->delete('mst_patients_tests');
		if ($query) {
			return true;
		}else{
			return false;
		}

	}

}







?>