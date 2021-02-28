<?php

// getting data form, validate the data, and submit to db

if (isset($_POST['submit_post'])) {


    $post_title = $_POST['post_title'];
    $post_auth = $_POST['post_auth'];
    $post_cat = $_POST['post_cat'];
    $post_body = $_POST['post_body'];

    if (empty($post_title)) {
        // ....
    } elseif (empty($post_auth)) {
        // ...
    } elseif (empty($post_cat)) {
        // ...
    } elseif (empty($post_body)) {
    } else {

        //  submit to db

        $sql_query = "INSERT INTO posts (cat_id, post_title, post_auth, post_body) 
                    VALUES ('{$post_cat}', '{$post_title}', '{$post_auth}', '{$post_body}')";

        $conn->query($sql_query);
    }
}
