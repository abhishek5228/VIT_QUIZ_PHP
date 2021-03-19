<?php
    session_start();
    class users
    {
        public $host="localhost";
        public $username="root";
        public $pass="";
        public $db_name="quiz_oops";
        public $conn;
        public $data;
        public $cat;
        public $qus;
	
        public function __construct()
        {
            $this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
            if($this->conn->connect_errno)
            {
                die("Database connection failed ".$this->conn->connect_errno);
            }
			
			
        }
		 public function signup($data)
		 
		 {
			 
			//$this->conn->query($data);
			
				$this->conn->query($data);
				return true;
				
			
		}
		
		
		public function signin($name,$pass)
        {
			
			
            $query=$this->conn->query("select name,pass from signup where name='$name' and pass='$pass'");
            $query->fetch_array(MYSQLI_ASSOC);
            if($query->num_rows>0)
            {
                $_SESSION['name']=$name;
                return true;
            }
            else{
                return false;
				}
		}
		 public function url($url)
        {
            header("location:".$url);
        }
		public function users_profile($name)
        {
            $query=$this->conn->query("select * from signup where name='$name'");
            $row=$query->fetch_array(MYSQLI_ASSOC);
            if($query->num_rows>0)
            {
                $this->data[]=$row;
            }
            return $this->data;
        }

		 public function cat_shows()
        {
            $query=$this->conn->query("select * from category");
            while($row=$query->fetch_array(MYSQLI_ASSOC))
            {
                $this->cat[]=$row;
            }
            return $this->cat;
        }
		
		
	}
    
    ?>