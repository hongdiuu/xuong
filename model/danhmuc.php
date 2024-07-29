<?php
function insert_danhmuc($tenloai){
    $sql = "INSERT INTO `categorys`(`name`) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql = "SELECT * FROM categorys order by id desc";
    $listdanhmuc =  pdo_query($sql);
    return $listdanhmuc;
}

function delete_danhmuc(){
    $sql = "DELETE FROM categorys where id=".$_GET['id'];
    pdo_execute($sql);
}

function loadone_danhmuc($id){
    $sql = "SELECT * from categorys where id=".$_GET['id'];
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$tenloai){
    $sql = "update categorys set name='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from products where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}
//xong
?>