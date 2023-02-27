<?php

namespace App\Controller;

use App\Model\User;

require("../autoloader.php");

class UserController
{

    public static function All()
    {
        $users = User::findAll();
        require("../View/Admin/readAllUser.php");
    }

    public static function findById($id_user)
    {
        $user = User::findById($id_user);
        require("../View/Admin/readUser.php");
    }

    public static function insert($post)
    {
        $user = new User($post["lastname"], $post["firstname"], $post["mail"], $post["password"], $post["phone"], $post["cv"], $post["area"], $post["address"], $post["role"], false);
        $user->create();
        self::All();
    }

    public static function delete($id_user)
    {
        $delete = user::delete($id_user);
        self::All();
    }

    public static function formupdate($id_user)
    {
        $user = user::findById($id_user);
        require("../View/Admin/formUpdate.php");
    }

    public static function update($post)
    {
        $user = new User($post["lastname"], $post["firstname"], $post["mail"], $post["password"], $post["phone"], $post["cv"], $post["area"], $post["address"], $post["role"], false);
        $user->update($post["id_user"]);
        self::All();
    }

    public static function register($post)
    {
        $erreurs = [];
        $lastname = null;
        $phone = null;
        $cv = null;
        $area = null;
        $address = null;

        if (empty($post["firstname"]) || empty($post["mail"]) || empty($post["password"]) || empty($post["role"])) {
            $erreurs += ["incomplet" => "Veuillez remplir les champs"];
        }

        $mail = filter_var($post["mail"], FILTER_VALIDATE_EMAIL);
        if($mail == false){
            $erreurs += ["mailI" => "mail invalide"];
        }
        
        $check = User::findByEmail($mail);

        if ($check != false) {
            $erreurs += ["mailD" => "Le mail existe déjà"];
        }

        if (empty($erreurs)) {
            $user = new User(
                $post["firstname"],
                $post["mail"],
                $post["password"],
                $post["role"],
                $lastname,
                $phone,
                $cv,
                $area,
                $address,
                false
            );

            $user->create();
            header("Location: ../View/Public/login.php");
        } else {
            var_dump($erreurs);
            require("../View/Public/register.php");
        }
    }

    public static function login($post)
    {

        $erreurs = [];

        if (empty($post["mail"]) || empty($post["password"])) {
            $erreurs += ["incomplet" => "veuillez completer le formulaire correctement"];
        }
        $mail = filter_var($post["mail"], FILTER_VALIDATE_EMAIL);
        if ($mail == false) {
            $erreurs += ["mailI" => "Format email invalide"];
        }
        $user = User::findByEmail($mail);
        if ($user == false) {
            $erreurs += ["mailE" => "ce compte n'existe pas"];
        }
        if (password_verify($post["password"], $user["password"]) == true) {
            session_start();
            $_SESSION["lastname"] = $user["lastname"];
            $_SESSION["admin"] = $user["admin"];
            require("../View/Public/profil.php");
        }
    }
}
?>
