<?php


class User_model extends CI_model
{
	
	public function create_user($data)
	{	
		$insert_data = $this->db->insert('mst_users',$data);
		return $insert_data;
	}


	public function fetch_users_data($data,$table_name,$where)
	{
		$query = $this->db->select($data)->from($table_name)->where($where)->get();
		return $query->result_array();
	}

	public function edit_data($user_id)
	{
		$this->db->where('Id',$user_id);
		$query = $this->db->get('mst_users');
		return $query->row_array();
	}

	public function update_user($data,$user_id)
	{
		$this->db->where('Id',$user_id);
		$query = $this->db->update('mst_users',$data);
		return $query;
	}	

	public function delete_user($user_id)
	{
		$this->db->where('Id',$user_id);
		$query = $this->db->delete('mst_users');
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
}







?>