<?php

class User extends Db_object{
	protected static $db_table = "users";
	protected static $db_table_fields = array('username', 'password', 'first_name', 'last_name', 'user_image');
	public $id;
	public $username;
	public $password;
	public $first_name;
	public $last_name;
	public $user_image;
	
	public $placeholder_image = 'http://placehold.it/300x300&text=User Image';

	public $tmp_path;
	public $upload_directory = 'images';




	public function user_image(){
		return empty($this->user_image) ? $this->placeholder_image : ADMIN_URL . '/' . $this->upload_directory . '/' . $this->user_image;
	}



	public static function verify_user($username, $password){
		global $database;
		$username = $database->escape_string($username);
		$password = $database->escape_string($password);

		$sql = "SELECT * FROM ". self::$db_table ." WHERE username='$username' AND password='$password' LIMIT 1";
		$the_result_array = self::find_by_query($sql);

		return !empty($the_result_array) ? array_shift($the_result_array) : false;
	}

	


	public function set_file($file){
		if(empty($file) || !$file || !is_array($file)){
			$this->errors[] = 'There was no file uploaded';
			return false;
		} elseif($file['error'] != 0) {
			$this->errors[] = $this->upload_errors_array[$file['error']];
			return false;
		} else {
			$this->user_image = basename($file['name']);
			$this->tmp_path = $file['tmp_name'];
			$this->type = $file['type'];
			$this->size = $file['size'];
		}
	}


	public function upload_photo(){
		if(!empty($this->errors)){
			return false;
		}

		if(empty($this->user_image) || empty($this->tmp_path)){
			$this->errors[] = 'The file was not available';
			return false;
		}

		$target_path = SITE_ROOT . '/admin/' . $this->upload_directory . '/' . $this->user_image;

		if(file_exists($target_path)){
			$this->errors[] = "The file {$this->user_image} is alreade exists";
			return false;
		}

		if(move_uploaded_file($this->tmp_path, $target_path)){
			unset($this->tmp_path);
			return true;
		} else {
			$this->errors[] = 'The file upload folder probably does not have the permission';
			return false;
		}
			
	} //end of save method







}