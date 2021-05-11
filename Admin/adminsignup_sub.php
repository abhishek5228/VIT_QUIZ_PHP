<?php
    include("class/adminuser.php");
    $register=new adminuser;
    extract($_POST); 
    
    $query="insert into adminsignup values('','$n','$e','$p','$u')";
		
	
	if($register->signup($query))
	{
		$register->url("adminlogin.php?run=success");
		
	}
	else{
		
		$register->url("adminsignup.php?run1=failed");
		
	}
	
		
   
    
    ?>