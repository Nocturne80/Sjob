<?php 

use App\Controller\UserController;
require_once("../autoloader.php");

if(isset($_GET["action"])){
   if($_GET["action"] == "all"){
    UserController::All();
  }
   else if($_GET["action"] == "register"){
    UserController::register($_POST);
  }
   else if($_GET["action"] == "read"){
    UserController::findById($_GET["id_user"]);
  }
   else if($_GET["action"] == "delete"){
    UserController::delete($_GET["id_user"]);
  }
   else if($_GET["action"] == "formUpdate"){
    UserController::formUpdate($_GET["id_user"]);
  }
   else if($_GET["action"] == "update"){
    UserController::update($_POST);
  }
   else if($_GET["action"] == "register"){
    UserController::register($_POST);
  }
   else if($_GET["action"] == "login"){
    UserController::login($_POST);
    }

}
?>