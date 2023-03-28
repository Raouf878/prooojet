<?php
require_once 'login.model.php';

class LoginController {
  private $user;

  public function __construct() {
    $this->user = new LoginModel();
  }
  public function logout() {
  unset($_SESSION['username']);
  header('Location: /login.html');
  }

  public function login($username, $password) {
    if ($resul=$this->user->checkCredentials($username,$password)) {
      if($resul=="success"){
        $message = "false";
        $_SESSION['username'] = $username;
        header("Location: /authentification/projet/nhab zaki/project-web/Home/Final_project/web_pages/home.php");
        $response = array('success' => true);
      }
      else{
        header("Location: /authentification/projet/nhab zaki/project-web/Home/Final_project/web_pages/login.php");
        
        
        
        
        
        
        
      }
    } 
  }
 }


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $loginController = new LoginController();
  $loginController->login($_POST['username'], $_POST['password']);
}
?>