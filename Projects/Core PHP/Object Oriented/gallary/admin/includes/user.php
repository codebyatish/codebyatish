<?php  

class User extends Db_object
{	
	protected static $db_table = "users";
	protected static $db_table_fields = array('username','password','first_name','last_name','user_image');
	public $id;
	public $username;
	public $password;
	public $first_name;
	public $last_name;
	public $user_image;
	public $tmp_path;
	public $upload_directory = "images";
	public $image_placeholder = "https://www.placehold.it/400x400&text=image";
	public $custom_errors = array();
	public $upload_errors_array = array(
	    UPLOAD_ERR_OK => 'There is no error, the file uploaded with success',
	    UPLOAD_ERR_INI_SIZE => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
	    UPLOAD_ERR_FORM_SIZE => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
	    UPLOAD_ERR_PARTIAL => 'The uploaded file was only partially uploaded',
	    UPLOAD_ERR_NO_FILE => 'No file was uploaded',
	    UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder',
	    UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk.',
	    UPLOAD_ERR_EXTENSION => 'A PHP extension stopped the file upload.',
	);



	public function set_file($file)
	{	
		if (empty($file) || !($file) || (!is_array($file))) {
			$this->custom_errors[] = "There is no file upload here.";
			return false;
		}else if ($file['error'] != 0) {
			$this->custom_errors[] = $this->upload_errors_array;
			return false;
		}else{
			$this->user_image = basename($file['name']);
			$this->tmp_path = $file['tmp_name'];
			$this->type = $file['type'];
			$this->size = $file['size'];
		}

	}



	public function save_user_iamge()
	{
		$target_path = SITE_ROOT.DS."admin".DS.$this->upload_directory.DS.$this->user_image;

		if ($this->id) {
			$this->update();

			if (!empty($this->user_image)) {
				move_uploaded_file($this->tmp_path, $target_path);
			}

			
		}else{

			if (!empty($this->custom_errors)) {
				return false;
			}
			

			if (empty($this->user_image) || empty($this->tmp_path)) {
				$this->custom_errors[] = "The File was not available.";
				return false;
			}

			
			if (file_exists($target_path)) {
				$this->custom_errors[] = "The File $this->user_image is already exits try another one or rename it.";
				return false;
			}

			if (move_uploaded_file($this->tmp_path, $target_path)) {
					
				if ($this->create()) {
					unset($this->tmp_path);
					return true;
				}

			}else{

				$this->custom_errors[] = "The file directory probably does not have permission";
				return false;
			}

		}

		
	}



	public static function verify_user($username,$password)
	{	
		global $database;

		$username = $database->escape_string($username);
		$password = $database->escape_string($password);

		$sql = "SELECT * FROM ".self::$db_table." WHERE username = '$username' AND password = '$password'";
		$user_result_array = self::find_by_query($sql);

		return !empty($user_result_array) ? array_shift($user_result_array) : false;


	}


	public function image_path_and_placeholder()
	{
		return empty($this->user_image) ? $this->image_placeholder : $this->upload_directory.DS.$this->user_image;
	}



	public function ajax_save_user_image($user_image, $user_id)
	{

		global $database;

		$user_image = $database->escape_string($user_image);
		$user_id = $database->escape_string($user_id);

		$this->user_image = $user_image;
		$this->id = $user_id;

		$sql = "UPDATE ".self::$db_table. " SET user_image = '$this->user_image' WHERE id = $this->id";
		$update_qry = $database->query($sql);

		echo $this->image_path_and_placeholder();

	}

	public function del_photo()
	{
		if ($this->delete()) {
			
			$target_path = SITE_ROOT.DS."admin".DS.$this->upload_directory.DS.$this->user_image;

			return unlink($target_path) ? true : false;

		}else{
			return false;
		}
	}

	public function get_userData()
	{
		if ($this->delete()) {
			
			$target_path = SITE_ROOT.DS."admin".DS.$this->upload_directory.DS.$this->user_image;

			return unlink($target_path) ? true : false;

		}else{
			return false;
		}
	}

}









?>