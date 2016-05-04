<?php
/**
 * Created by PhpStorm.
 * User: 0303077
 * Date: 04/05/2016
 * Time: 11:37
 */

define('SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('USER','b83c32ec6ebf14');
define('PASSWORD','02066580');
define('DB','CMM007ALDB-0303077');

$conn = mysqli_connect(SERVER,USER,PASSWORD,DB);

if ($conn){
    echo "";
}else{
    echo "Error".mysqli_error($conn);
}
