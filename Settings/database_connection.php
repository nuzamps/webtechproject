<?php
//another way to connect to database is to use classes 
//classes make work cleaner and simpler

	require('database_credentials.php');

	class db_connection{
		
		//properties
		public $db=null;
		public $results=null;

		//connect to database
		function connect(){
			//connection
			$this->db=mysqli_connect(servername,username,password,dbname);
			//test connection
			if(mysqli_connect_error()){
				return false;
			}
			else{
				return true;
			}
		}
		
		//execute queries	
		function db_query($sql){
			if(!$this->connect()){
				return false;
			}
			elseif($this->db==null){
				return false;
			}
		
			//run query
			$this->results=mysqli_query($this->db, $sql); 
			if($this->results==false){ 
				return false;
			}
			else{
				return true; 
			}
        }

        //fetch data 
        function db_fetch(){
        	//check if results is set
        	if($this->results==null){
        		return false;
        	}
        	elseif($this->results==false){
        		return false;
        	}
            //takes in query results and returns a row in database as an associative array
        	return mysqli_fetch_assoc($this->results); 
        }

	}

?>