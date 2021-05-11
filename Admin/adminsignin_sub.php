  
<?php
    include("class/users.php");
    $signin=new users;
    extract($_POST);
    if($signin->signin($n,$p))
    {
        $signin->url("admin.php");
    }
    else
    {
        $signin->url("adminlogin.php?run=failed");
    }
?>