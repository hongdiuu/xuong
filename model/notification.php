<?php
// lấy toàn bộ form liên hệ từ khách hàng
function load_all_notification(){
    $sql="
    SELECT 
    notification.*,
    products.name_product,
    products.image
FROM 
    notification
JOIN 
    products ON notification.id_product = products.id


     ";
    $result=pdo_query($sql);
    return $result;
}
function insert_notification($product_id, $message, $email, $name_user, $phone_number, $date_time)
{
    $sql = "INSERT INTO `notification` ( `message`, `email`, `name_user`, `phone`, `date`,`id_product`) VALUES ( '$message', '$email', '$name_user', '$phone_number', '$date_time','$product_id')";
    $result = pdo_execute($sql);
}


?>