<?php

    $server='localhost';
    $username='root'
    $password='';

    $connection=mysqli_connect($server,$username,$password);
    if(!$connection){
        die('connection failed')
    }else{
        echo "conenction success"
    }

    $sql="INSERT INTO `trip` ( `name`, `age`, `gender`, `phone`, `email`, `other`, `created at`) VALUES ( 'satish', '12', 'male', '1234567897', 'abc@gmail.com', 'hello my first php experience', current_timestamp());"




?>