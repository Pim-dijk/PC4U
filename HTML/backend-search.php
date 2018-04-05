<?php

include 'Includes/initialize.php';

$mysqli = new mysqli("localhost", "root", "", "pc4u");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

if(isset($_REQUEST['term'])){
    // Prepare a select statement
    $sql = "SELECT * FROM products WHERE ArtName LIKE ?";

    if($stmt = $mysqli->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $param_term);

        // Set parameters
        $param_term = '%' . $_REQUEST['term'] . '%';

        // Attempt to execute the prepared statement
        if($stmt->execute()){
            $result = $stmt->get_result();

            // Check number of rows in the result set
            if($result->num_rows > 0){
                // Fetch result rows as an associative array
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                    echo "<p>" . $row["ArtName"] . "</p>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }

    // Close statement
    $stmt->close();
}


if(isset($_REQUEST['cat'])) {
    $param_term = $_REQUEST['cat'];
    // Prepare a select statement
    $sql = "SELECT * FROM categories WHERE CategoryID = $param_term";

    $result = $category->find_by_sql($sql);

    // Check number of rows in the result set
    if (!empty($result)) {

        $category = $result[0];
        $json = $category->Properties;
        $decoded_json = json_decode($json, true)["fields"];

        // Fetch result rows as an associative array
        $PropertyLabel1 = $decoded_json['0']["key"];
        $PropertyLabel2 = $decoded_json['1']["key"];

        echo $PropertyLabel1 . "," . $PropertyLabel2;

        ?>
        <?php
    } else {
        echo "<p>Something went wrong!</p>";
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
$mysqli->close();
?>




