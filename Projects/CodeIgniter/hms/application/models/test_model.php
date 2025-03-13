<?php


class Test_model extends CI_model
{
	
	public function create_test($data)
	{	
		$insert_data = $this->db->insert('mst_tests',$data);
		return $insert_data;
	}


	public function fetch_data($data,$table_name,$where,$order_by)
	{
		$query = $this->db->select($data)->from($table_name)->where($where)->order_by($order_by)->get();
		return $query->result_array();
	}

	public function edit_data($test_id)
	{
		$this->db->where('Id',$test_id);
		$query = $this->db->get('mst_tests');
		return $query->row_array();
	}

	public function update_test($data,$test_id)
	{
		$this->db->where('Id',$test_id);
		$query = $this->db->update('mst_tests',$data);
		return $query;
	}	

	public function delete_tests($test_id)
	{
		$this->db->where('Id',$test_id);
		$query = $this->db->delete('mst_tests');
		if ($query) {

			$this->db->where('TestId',$test_id);
			$subquery = $this->db->delete('mst_subtests');
			
			if ($subquery) {
				return true;
			}

		}else{
			return false;
		}
	}




}







?>