
<?php

// getting data for form, validate the data, and submit to db
if (isset($_POST['cat_publish'])) {


    // collect form values
    $cat_name = $_POST['cat_name'];
    $cat_details = $_POST['cat_details'];

    // validate the data
    if (empty($cat_name)) {
        // ...
    } elseif (empty($cat_details)) {
        // ...
    } else {
        // inserte data to db
        $conn->query("INSERT INTO categories(cat_name, cat_details) VALUES ('{$cat_name}', '{$cat_details}')");

        header('Location: add_category.php');
    }
}



// fetching the categories form database 

$sql_cat = "SELECT * FROM categories";
$cat_result = $conn->query($sql_cat);
