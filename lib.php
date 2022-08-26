<?php
function dbConnection(){
    global $config;
    $db = new mysqli($config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['dbname']);
    $db->query("SET NAMES utf8") or die($db->error);
    return $db;
}

function insertDb(){
    $db = dbConnection();
    $sql = $db->query("INSERT INTO `student` (`id`,`fullname`,`gender`,`guruh`,`date`,`phone`,`status`,`shahar_id`)
VALUES(NULL, 'Salom','man','17','2021-10-28 17:20:50','','active','1')") or die($db->error);
    if($sql)
        return "Bazaga qo'shildi";
    return "Bazaga qo'shishda xatolik";
}

function createDB($dbname=0){
    $name = $dbname ? $dbname : 'backend'.random_int(0,100);
    $db = dbConnection();
    $sql = $db->query("CREATE DATABASE `{$name}`") or die($db->error);
    if($sql){
        return "To'g'ri";
    }
    else{
        return "Noto'g'ri";
    }
}

function dropDB($dbname){
    $db = dbConnection();
    $sql = $db->query("DROP DATABASE `{$dbname}`") or die($db->error);
    if($sql){
        return "O'chirildi";
    }
    else{
        return "Noto'g'ri";
    }
}
function websayt(){
    $db = dbConnection();
//    $id = $_GET['id'];
    $name = $_GET['login'];
    $tel = $_GET['telefon'];
    $joy = $_GET['joylar'];
    $son = $_GET['sonlar'];
    $sql = $db->query("INSERT INTO `kategoriya` SET `name` = '{$name}', `tel` = '{$tel}', `joy` = '{$joy}', `son` = '{$son}'") or die($db->error);
    if($sql)
        header('Location:bosh.php');
}

function DBJoin($dbname, $tbname1,$tbname2){
    $db = dbConnection();
    $sql = $db->query("ALTER TABLE `{$dbname}`.`{$tbname1}` ADD FOREIGN KEY (`viloyat_id`) REFERENCES `{$dbname}`.`{$tbname2}`(`id`) ON DELETE CASCADE ON UPDATE CASCADE") or die($db->error);
    if($sql){
        return 'Ishladi';
    }
    else{
        return 'Ishlamadi';
    }
}

function getAll(){
    $db = dbConnection();
    $query = $db->query("SELECT * from `kategoriya` ORDER BY `id` DESC LIMIT 1") or die($db->error);
    $array = [];
    $i=0;
    while($sql = $query->fetch_array()){
        $array[$i]=$sql;
        $i++;
    }
    return $array;
}

function getAllActives(){
    $db = dbConnection();
    $query = $db->query("SELECT * from `kategoriya` WHERE `status`='active'") or die($db->error);
    $array = [];
    $i=0;
    while($sql = $query->fetch_array()){
        $array[$i]=$sql;
        $i++;
    }
    return $array;
}

function getAllTest(){
    $db = dbConnection();
    $query = $db->query("SELECT * from `kategoriya` WHERE `status`='active' ORDER BY `id` ASC LIMIT 3,5") or die($db->error);
    $array = [];
    $i=0;
    while($sql = $query->fetch_array()){
        $array[$i]=$sql;
        $i++;
    }
    return $array;
}

function getAllCount(){
    $db = dbConnection();
    $query = $db->query("SELECT count(*) as 'jami soni' from `kategoriya` WHERE `id`>=2 AND `id`<=5 AND `status`='active'") or die($db->error);
    $sql = $query->fetch_array();

    echo $sql[0];
//    print_r($sql);
}

function update(){
    $db = dbConnection();
    $query = $db->query("UPDATE `kategoriya` SET `name` = 'Abdurahmon' WHERE `kategoriya`.`id` = 5") or die($db->error);
}

function getById($id){
    $db = dbConnection();
    $query = $db->query("SELECT * from `kategoriya`") or die($db->error);
    $array = [];
    $i=0;
    while($sql = $query->fetch_array()){
        $array[$i]=$sql;
        $i++;
    }
    return $array;
}