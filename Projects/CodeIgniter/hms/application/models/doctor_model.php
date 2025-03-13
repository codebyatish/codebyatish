<?php


class Doctor_model extends CI_model
{
	public function get_data($postData=null)
	{

	     $response = array();

	     ## Read value
	     $draw = $postData['draw'];
	     $start = $postData['start'];
	     $rowperpage = $postData['length']; // Rows display per page
	     $columnIndex = $postData['order'][0]['column']; // Column index
	     $columnName = $postData['columns'][$columnIndex]['data']; // Column name
	     $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
	     $searchValue = $postData['search']['value']; // Search value

	     // Custom search filter 
	     $select_doctor_category = $postData['select_doctor_category'];
	     // $searchGender = $postData['searchGender'];
	     // $searchName = $postData['searchName'];

	     ## Search 
	     $search_arr = array();
	     $searchQuery = "";
	     if($searchValue != ''){
	        $search_arr[] = " (DoctorCategory like '%".$searchValue."%' or 
	         DoctorCode like '%".$searchValue."%' or 
	         DoctorName like'%".$searchValue."%' or 
	         DoctorAddress like'%".$searchValue."%'or 
	         DoctorEmail like'%".$searchValue."%'or 
	         DoctorPhoneNumber like'%".$searchValue."%'or 
	         DoctorQualification like'%".$searchValue."%'or 
	         LastUpdated like'%".$searchValue."%' ) ";
	     }
	     if($select_doctor_category != ''){
	        $search_arr[] = " DoctorCategory='".$select_doctor_category."' ";
	     }
	     // if($searchGender != ''){
	     //    $search_arr[] = " gender='".$searchGender."' ";
	     // }
	     // if($searchName != ''){
	     //    $search_arr[] = " name like '%".$searchName."%' ";
	     // }
	     if(count($search_arr) > 0){
	        $searchQuery = implode(" and ",$search_arr);
	     }

	     ## Total number of records without filtering
	     $this->db->select('count(*) as allcount');
	     $records = $this->db->get('mst_doctors')->result();
	     $totalRecords = $records[0]->allcount;

	     ## Total number of record with filtering
	     $this->db->select('count(*) as allcount');
	     if($searchQuery != '')
	     $this->db->where($searchQuery);
	     $records = $this->db->get('mst_doctors')->result();
	     $totalRecordwithFilter = $records[0]->allcount;

	     ## Fetch records
	     $this->db->select('*');
	     if($searchQuery != '')
	     $this->db->where($searchQuery);
	     $this->db->order_by('LastUpdated DESC',$columnName, $columnSortOrder);
	     $this->db->limit($rowperpage, $start);	
	     $records = $this->db->get('mst_doctors')->result();

	     $data = array();
	     $btn = '';
	     foreach($records as $record ){
	     	$btn = '<a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="edit_doctor('.$record->Id.')" ><i class="fa fa-edit"></i></a> &nbsp; ';
	     	$btn .= '<a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="delete_doctor('.$record->Id.')"><i class="fa fa-trash"></i></a>';
	       $data[] = array( 
			"Id" => $btn,
			"DoctorCode"=>$record->DoctorCode,
			"DoctorCategory"=>$record->DoctorCategory,
			"DoctorName"=>$record->DoctorName,
			"DoctorEmail"=>$record->DoctorEmail,
			"DoctorPhoneNumber"=>$record->DoctorPhoneNumber,
			"DoctorQualification"=>$record->DoctorQualification,
			"LastUpdated"=>$record->LastUpdated
	       ); 
	     }

	     ## Response
	     $response = array(
	       "draw" => intval($draw),
	       "iTotalRecords" => $totalRecords,
	       "iTotalDisplayRecords" => $totalRecordwithFilter,
	       "aaData" => $data
	     );

	    return $response; 
   }

	public function create_doctor($data)
	{	
		$insert_data = $this->db->insert('mst_doctors',$data);
		return $insert_data;
	}


	public function edit_data($doctor_id)
	{
		$this->db->where('Id',$doctor_id);
		$query = $this->db->get('mst_doctors');
		return $query->row_array();
	}

	public function update_doctor($data,$doctor_id)
	{
		$this->db->where('Id',$doctor_id);
		$query = $this->db->update('mst_doctors',$data);
		return $query;
	}	

	public function delete_doctor($doctor_id)
	{
		$this->db->where('Id',$doctor_id);
		$query = $this->db->delete('mst_doctors');
		if ($query) {
			return true;
		}else{
			return false;
		}
	}


	



}




?>