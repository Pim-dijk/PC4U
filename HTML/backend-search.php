<?php

include 'Includes/initialize.php';

$mysqli = new mysqli("localhost", "root", "", "pc4u");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Display live search items in the product name list
if (isset($_REQUEST['artName'], $_REQUEST['catName']))
{
    // Prepare a select statement
    $sql = "SELECT * FROM products WHERE ArtName LIKE ? AND CategoryID = ?";

    if ($stmt = $mysqli->prepare($sql))
    {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("ss", $param_term, $catValue);

        // Set parameters
        $param_term = '%' . $_REQUEST['artName'] . '%';
        $catValue = $_REQUEST['catName'];

        // Attempt to execute the prepared statement
        if ($stmt->execute())
        {
            $result = $stmt->get_result();

            // Check number of rows in the result set
            if ($result->num_rows > 0)
            {
                // Fetch result rows as an associative array
                while ($row = $result->fetch_array(MYSQLI_ASSOC))
                {
                    echo "<p>" . $row["ArtName"] . "</p>";
                }
            }
            else
            {
                echo "<p>No matches found</p>";
            }
        }
        else
        {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
//    $stmt->close();
}

//Obsolete
// Display live search items in the product name list
if(isset($_REQUEST['catNames'])){
    // Prepare a select statement
    $sql = "SELECT * FROM Categories WHERE Category LIKE ?";

    if($stmt = $mysqli->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $param_term);

        // Set parameters
        $param_term = '%' . $_REQUEST['catName'] . '%';

        // Attempt to execute the prepared statement
        if($stmt->execute()){
            $result = $stmt->get_result();

            // Check number of rows in the result set
            if($result->num_rows > 0){
                // Fetch result rows as an associative array
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
//                    echo "<p>" . $row["Category"] . ", " .  $row['CategoryID']. "</p>";
                    echo '<option value="'.$row['CategoryID'].'">'.$row['Category'].'</option>';

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

// Update the category labels when editing product details
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

// Close connection
$mysqli->close();
?>




