<?php 
class cocktail_model extends CI_Model {

   	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
  
	function getAllCocktails(){
       $q = "SELECT * FROM `cocktail` WHERE 1";
       $res = $this->db->query($q);
       return $res->result_array();
	}
	
     
}

