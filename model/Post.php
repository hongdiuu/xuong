<?php
function listPost()
{
    // $sql = "SELECT post.id AS 'id_post',users.user_name,users.role,users.id AS 'id_user', `image`, `content`, `date`, `user_post` FROM `post` 
    // JOIN users ON users.id = post.user_post";
    $sql="SELECT * FROM `post`";
    return pdo_query($sql);
}
function insertPost($ImageUpload, $mota, $date, $name)
{
    $sql = "INSERT INTO `post`(`image`, `content`, `date`, `user_post`) VALUES 
    ('$ImageUpload','$mota','$date','$name')";
    return pdo_execute($sql);
}
function insterPostID($id)
{
    $sql = "SELECT * FROM `post`
    JOIN users ON post.user_post = users.id
    WHERE post.id=$id";
    return pdo_query_one($sql);
}
function updataPost($ImageUpload, $mota, $date, $id)
{
    $sql = "UPDATE `post` SET `image`='$ImageUpload',`content`='$mota',
    `date`='$date' WHERE `id`='$id'";
    return pdo_execute($sql);
}
function deletePost($id)
{
    $sql = "DELETE FROM `post` WHERE id=$id";
    return pdo_query_one($sql);
}
?>