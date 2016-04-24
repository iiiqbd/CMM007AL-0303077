<?php
/**
 * Created by PhpStorm.
 * User: Uche
 * Date: 023, 23 Apr 2016
 * Time: 15:16
 */
include('server.php');
$sql = "SELECT yearReleased, title, productionStudio, notes 
        FROM marvelmovies WHERE yearReleased > '2010'";
$result = mysqli_query($conn,$sql);//procedural programming
echo "
<table>
<tr>
<th>Year Released</th>
<th>Title</th>
<th>Production Studio</th>
<th>Notes</th>
</tr> ";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
        <td>{$row['yearReleased']}</td>
        <td>{$row['title']}</td>
        <td>{$row['productionStudio']}</td>
        <td>{$row['notes']}</td>
            </tr>";
    }
}
echo "</table>";

//$res= $conn->query($sql);//object oriented programming