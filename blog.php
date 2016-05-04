<?php
/**
 * Created by PhpStorm.
 * User: 0303077
 * Date: 04/05/2016
 * Time: 11:31
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Blog Entry</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    <meta
        name="viewport"
        content="
        width=device-width,
        initial-scale=1,
        minimum-scale=1,
        maximum-scale=1"
        />
</head>
<body>
<!--Header section starts here-->
<header>
    <div class="header">
        <h2>myBlog</h2>
        <p>because the internet needs to know what I think</p>
    </div>
</header>
<!--Header section ends here-->

<!--Main section starts here-->
<main>

    <div class="nav">
        <nav>
            <ul>
                <li><a href="blog.php?category=all">All Blog Items</a></li>
                <li><a href="blog.php?category=work">Work Items</a></li>
                <li><a href="blog.php?category=university">University Items</a></li>
                <li><a href="blog.php?category=family">Family Items</a></li>
                <li><a href="add.php">Insert a Blog Item</a></li>
            </ul>
        </nav>
    </div>


    <div class="article">

        <?php
        include('connect.php');
        if(isset($_GET['category'])) {
            $category = $_GET['category'];
            $sql_query = "SELECT * FROM blogview where category = '$category'";
            $result = $conn->query($sql_query);
            echo "
        <table>
            <tr>
                    <th>Entry Title </th>
                    <th>Category</th>
                    <th>Submitted By</th>
                    <th>Entry Summary</th>
            </tr> ";

            if(mysqli_num_rows($result)>0){
                while($row = $result->fetch_array()){
                    echo
                        "<tr>
                            <td>".$row['entryTitle']."</td>
                            <td>".$row['category']."</td>
                            <td>".$row['submitter']."</td>
                            <td>".$row['entrySummary']."</td>
                        </tr>";
                }
            }
            echo "</table>";
        } else {

            $sql = "SELECT *  FROM bugs";
            $result = mysqli_query($conn,$sql);
            echo "
    <table>
        <tr>
            <th>Entry Title </th>
            <th>Category</th>
            <th>Submitted By</th>
            <th>Entry Summary</th>
        </tr> ";

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo
                        "<tr>
                            <td>".$row['entryTitle']."</td>
                            <td>".$row['category']."</td>
                            <td>".$row['submitter']."</td>
                            <td>".$row['entrySummary']."</td>
                        </tr>";
                }
            }
            echo "</table>";

        }
        ?>


    </div>


</main>
<!--Main section ends here-->

<!--Footer section starts here-->
<footer>
    <p>&copy; Designed by Uchechi Adiele, 2016</p>
</footer>
<!--Footer section ends here-->
</body>
</html>
