<?php
$link = new mysqli('localhost', 'client', '12345678', 'neko');


function get_catigories(){
    global $link;

    $sql = "SELECT * FROM posts";

    $result = $link->query($sql);

    $cat = mysqli_fetch_all($result, MYSQLI_ASSOC);

}

function get_posts(){
    global $link;

    $sql = "SELECT * FROM posts";

    $result = $link->query($sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $posts;
}

function get_post_by_id($post_id){
    global $link;
    $sql = "SELECT * FROM posts WHERE id = ".$post_id;
    $result = $link->query($sql);
    $post = mysqli_fetch_assoc($result);
    return $post;
}
?>;