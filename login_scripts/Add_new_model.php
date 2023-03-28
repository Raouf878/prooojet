<?php
include 'db_conn.php';

class User {
    

    public function createUser($nom, $prenom, $role, $email,$password) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projet";
    $con = new mysqli($servername, $username, $password,$dbname);
    $new_password=password_hash($password,PASSWORD_DEFAULT);
    $stmt = $con->prepare("INSERT INTO `users`(`nom`,`prenom`,`role`,`email`,`password`) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss",$nom, $prenom, $role, $email,$new_password );
    $stmt->execute();
    $user = $stmt->get_result();
    return true;
    }
    public function showUser(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projet";
    $con = new mysqli($servername, $username, $password,$dbname);
    $stmt = $con->prepare("select * from users");
    $stmt->execute();
    $use = $stmt->get_result();
    return $use;


    }
    public function update_user($nom, $prenom, $role, $email,$password) {
        $id = $_GET['id'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "projet";
        $new_password=password_hash($password,PASSWORD_DEFAULT);
        $con = new mysqli($servername, $username, $password,$dbname);
        $stmt = $con->prepare( "UPDATE `users` SET `nom`='$nom',`prenom`='$prenom',`email`='$email',`password`='$new_password',`role`='$role' WHERE id_user = $id");
        $stmt->execute();
        $user = $stmt->get_result();
        return true;
}
    public function delete_user() {
    $id = $_GET['id'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projet";
    $con = new mysqli($servername, $username, $password,$dbname);
    $stmt = $con->prepare("DELETE FROM `users` WHERE `id_user` = '$id'");
    $stmt->execute();
    $user = $stmt->get_result();
    
    
    
}
public function createOffer($duree_stage, $base_remuneration, $date_d_offre, $Nombre_place_offertes,$promo_concernees,$titre_offre,$desc_offre) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projet";
    $con = new mysqli($servername, $username, $password,$dbname);
    $stmt = $con->prepare("INSERT INTO `offre`(`duree_stage`,`base_remuneration`,`date_d_offre`,`Nombre_place_offertes`,`promo_concernees`,`titre_offre`,`desc_offre`) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$duree_stage, $base_remuneration, $date_d_offre, $Nombre_place_offertes,$promo_concernees,$titre_offre,$desc_offre );
    $stmt->execute();
    $user = $stmt->get_result();
    return true;
    }
    public function showOffer(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projet";
    $con = new mysqli($servername, $username, $password,$dbname);
    $stmt = $con->prepare("SELECT * from offre");
    $stmt->execute();
    $use = $stmt->get_result();
    return $use;


    }
    public function update_Offer($duree_stage, $base_remuneration, $date_d_offre, $Nombre_place_offertes,$promo_concernees,$titre_offre,$desc_offre) {
        $id = $_GET['id'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "projet";
        $new_password=password_hash($password,PASSWORD_DEFAULT);
        $con = new mysqli($servername, $username, $password,$dbname);
        $stmt = $con->prepare( "UPDATE `offre` SET `duree_stage`='$duree_stage',`base_remuneration`='$base_remuneration',`date_d_offre`='$date_d_offre',`Nombre_place_offertes`='$Nombre_place_offertes',`promo_concernees`='$promo_concernees',`titre_offre`='$titre_offre',`desc_offre`='$desc_offre' WHERE id_offre = $id");
        $stmt->execute();
        $user = $stmt->get_result();
        return true;
}
    public function delete_offer() {
    $id = $_GET['id'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projet";
    $con = new mysqli($servername, $username, $password,$dbname);
    $stmt = $con->prepare("DELETE FROM `offre` WHERE `id_offre` = '$id'");
    $stmt->execute();
    $user = $stmt->get_result();
    
    
    
}
}