<?php
    include("class/users.php");
    $register=new users;
    extract($_POST); 
    
    $query="insert into signup values('','$n','$e','$p','$u')";
		
	
	if($register->signup($query))
	{
		$register->url("vitlogin.php?run=success");
		
	}
	else{
		
		$register->url("signup.php?run1=failed");
		
	}
	
		
   
    
    ?>