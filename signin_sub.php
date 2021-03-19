  
<?php
    include("class/users.php");
    $signin=new users;
    extract($_POST);
    if($signin->signin($n,$p))
    {
        $signin->url("vtophome.php");
    }
    else
    {
        $signin->url("vitlogin.php?run=failed");
    }
?>