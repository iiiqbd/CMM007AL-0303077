<?php
/**
 * Created by PhpStorm.
 * User: Uche
 * Date: 023, 23 Apr 2016
 * Time: 15:18
 */
define('SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('USER','b83c32ec6ebf14');
define('PASSWORD','02066580');
define('DB','CMM007ALDB-0303077');
$conn = mysqli_connect(SERVER,USER,PASSWORD,DB);

if ($conn){
    echo "Connection is up";
}else{
    echo "Error".mysqli_error($conn);
}

/*$db = new mysqli(
    "ap-cdbr-azure-east-c.cloudapp.net",
    "b46959495d6832",
    "0eb13c86",
    "dev2705db"
);*/

// test if connection was established, and print any errors
