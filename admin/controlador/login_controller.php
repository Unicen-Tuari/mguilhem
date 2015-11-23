<?php
include_once 'controlador/checksesioncontroller.php';
include_once 'vista/login_view.php';
include_once 'modelo/usuarios_model.php';

class LoginController extends CheckSesionController {

  function __construct() {
    $this->model = new UsuariosModel();
    $this->vista = new LoginView();
  }

  function logout(){
    session_start();
    session_destroy();
    header("Location: index.php");
    die();
  }

  function login(){
    if(isset($_REQUEST["txtEmail"]) && isset($_REQUEST["txtPassword"])){
      
      $email = $_REQUEST["txtEmail"];
      $pass = $_REQUEST["txtPassword"];
      $usuario = $this->model->getUsuario($email);
      
      //if(password_verify($pass, $usuario["password"]))
      if (md5($pass)==$usuario["password"])
      {
        session_start();
        $_SESSION["email"] = $email;
        header("Location: index.php");
        die();
      }
      else {
        $this->vista->mostrarError("Usuario y/o Password Invalidos");
      }
    }
    
    $this->vista->mostrar();
  }
}

?>
