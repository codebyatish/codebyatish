<?php 

class Model_customers extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function create($customer_data)
	{

		$data = $this->db->insert('customers', $customer_data);
		return $this->db->insert_id();
	}

	public function update($id = null, $customer_data = array())
	{
		if ($id && $customer_data) {
			$this->db->where('id', $id);
			$update = $this->db->update('customers',$customer_data);
			return ($update == true) ? true : false;
		}
	}

	public function getCustomersData($customer_id){

		$sql = "SELECT * FROM customers WHERE id = ?";
		$query = $this->db->query($sql, array($customer_id));
		return $query->row_array();
	}
}