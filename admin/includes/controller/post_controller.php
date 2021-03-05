<?php

// getting data form, validate the data, and submit to db

$upload_dir = "../uploads/";

// required file extension
$_img_ext = [
    'jpg',
    'png',
    'JPG',
    'PNG',
    'jpeg',
    'JPEG'
];

if (isset($_POST['submit_post'])) {


    $post_title = $conn->real_escape_string($_POST['post_title']);
    $post_auth = $conn->real_escape_string($_POST['post_auth']);
    $post_cat = $conn->real_escape_string($_POST['post_cat']);
    $post_body = $conn->real_escape_string($_POST['post_body']);

    // getting the image name and the file tmp name
    $img_name = basename($_FILES['post_image']['name']);
    $tmp_name = $_FILES['post_image']['tmp_name'];

    // getting image extension
    $img_ext = explode(".", $img_name); //godswill.jpg
    $extension = $img_ext[1];

    // generate randome file name to store the image
    $img_name = $post_title . time() . "." . $extension;

    if (empty($post_title)) {
        // ....
    } elseif (empty($post_auth)) {
        // ...
    } elseif (empty($post_cat)) {
        // ...
    } elseif (empty($post_body)) {
        // ...
    } else {

        if ($extension == $_img_ext[0] || $extension == $_img_ext[1] || $extension == $_img_ext[2] || $extension == $_img_ext[3] || $extension == $_img_ext[4] || $extension == $_img_ext[5]) {

            // moving image file to server (upload location)
            $upload_dir .= $img_name;
            move_uploaded_file($tmp_name, $upload_dir);

            //  submit to db

            $sql_query = "INSERT INTO posts (cat_id, post_title, post_auth, post_body, post_image) 
                            VALUES ('{$post_cat}', '{$post_title}', '{$post_auth}', '{$post_body}', '{$img_name}')";

            $conn->query($sql_query);
        }
    }
}
