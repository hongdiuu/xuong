<?php
function loadall_taikhoan()
{
    $sql = "SELECT * FROM users order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id)
{
    $sql = "DELETE FROM users where id=" . $id;
    pdo_execute($sql);
}

function checkuser($user, $pass)
{
    $sql = "SELECT * FROM users WHERE user_name='$user'";
    $user_data = pdo_query_one($sql);

   return $user_data;
}


function insert_taikhoan($user,$pass,$address,$phonenumber)
{
    $sql = "INSERT INTO `users`(`user_name`, `password`, `address`, `phone`)
     VALUES ('$user','$pass','$address','$phonenumber')";
    pdo_execute($sql);
}       