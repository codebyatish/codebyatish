<?php


class Admin_model extends CI_model
{
	
	public function get_user_data($user_id)
	{
		$this->db->where('Id',$user_id);
		$query = $this->db->get('mst_users');
		return $query->row();
	}


	public function admin_login($username, $password)
	{	
		$this->db->where('UserName',$username);
		$result = $this->db->get('mst_users');
		$db_password = $result->row(2)->Password;

		if ($password === $db_password){
			return $result->row(0)->Id;
		}else{
			return false;
		}
		
	}

}







?>