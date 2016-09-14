<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chinua_model extends CI_Model {

	
	public function __construct()
	{
		parent::__construct();
	}

	public function regList()
	{
		$query =   $this->db->query("SELECT username,email,password FROM forever_list");
		return $query->result_array();
	}
	public function register($username,$password,$email)
	{
		$created = date('Y-m-d H:i:s');
		$this->db->query("INSERT INTO 
								forever_list(username,password,email,date_time)
								VALUES('{$username}','{$password}','{$email}','{$created}' )
								");

	}
	
	public function getUser($username)
	{	
				
		$query = $this->db->query("SELECT username,password,email,u_id,date_time FROM forever_list WHERE username = '{$username}'");
		if($query->num_rows() === 1)
		{
			return $query->result_array();
		}else{
			return false;
		}
	}
}
