<?php


class LoginModel {
  private $db;

  public function __construct() {
    $this->db = new mysqli('localhost','root','','projet');
  }

  public function checkCredentials($username, $password) {
    $stmt = $this->db->prepare("SELECT password FROM users WHERE email = ? ;");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    if(!$row){
      header("Location: /authentification/projet/nhab zaki/project-web/Home/Final_project/web_pages/login.php");
    }
    if ($result){
      $hash = $row['password'];

    if (password_verify($password,$hash)) {
      
     
        return "success";
      }else{
        return"down";
   }}}}

?>