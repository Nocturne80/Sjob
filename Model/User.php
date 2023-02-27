<?php  

namespace App\Model;
use App\Model\DB;

use \PDOException;

require ("../autoloader.php");

class User{

    private $lastname;
    private $firstname;
    private $mail;
    private $password;
    private $phone;
    private $cv;
    private $area;
    private $address;
    private $role;
    private $admin;



    function __construct($lastname, $firstname, $mail, $password, $phone, $cv, $area, $address, $role, $admin)

    {  
        $this->lastname = $lastname;
        $this->$firstname = strip_tags($_POST["firstname"]); 
        $this->mail = $mail;
        $this->password = password_hash($_POST["password"], PASSWORD_ARGON2I);
        $this->phone = $phone;
        $this->cv = $cv;
        $this->area = $area;
        $this->address = $address;
        $this->role = $role;    
        $this->admin = $admin;
        
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }
 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getMail()
    {
        return $this->mail;
    }
 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCv()
    {
        return $this->cv;
    }

    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }
 
    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
 
    public function getAdmin()
    {
        return $this->admin;
    }

    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    public static function findAll(){
        try{
            $db = new DB();
            $dbh = $db->getDbh();

            $stmt = $dbh->query("SELECT*FROM `user`" );
            return $stmt->fetchAll();
        }catch (PDOException $erreur){
            echo $erreur->getMessage();
        }
    }

    public static function findById($id_user){
        try {

            $db = new DB();
            $dbh = $db->getDbh();
            $stmt = $dbh->prepare("SELECT * FROM user WHERE id_user=?");
            $stmt->bindValue(1, $id_user);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $erreur) {
            echo $erreur->getMessage();
        }
    }

    public static function delete($id_user){
        try {

            $db = new DB();
            $dbh = $db->getDbh();
            $stmt = $dbh->prepare("DELETE FROM user WHERE id_user=?");
            $stmt->bindValue(1, $id_user);
            return $stmt->execute();
        } catch (PDOException $erreur) {
            echo $erreur->getMessage();
        }
    }

    public function create(){
        try{

            $db = new DB();
            $dbh = $db->getDbh();
            $stmt = $dbh->prepare("INSERT INTO `user` (`lastname`,`firstname`,`mail`,`password`,`phone`,`cv`, `area`, `address`, `role`, `admin`) 
            VALUES (?,?,?,?,?,?,?,?,?,?)");

            $stmt->bindValue(1, $this->lastname);
            $stmt->bindValue(2, $this->firstname);
            $stmt->bindValue(3, $this->mail);
            $stmt->bindValue(4, $this->password);
            $stmt->bindValue(5, $this->phone);
            $stmt->bindValue(6, $this->cv);
            $stmt->bindValue(7, $this->area);
            $stmt->bindValue(8, $this->address);
            $stmt->bindValue(9, $this->role);
            $stmt->bindValue(10, false);

           //  $stmt->execute();
             var_dump($stmt->execute());
        }catch (PDOException $erreur) {
            echo $erreur->getMessage();
        }
    }

    public function update($id_user){

        try{

            $db = new DB();
            $dbh = $db->getDbh();
            $stmt = $dbh->prepare("DELETE FROM user WHERE id_user=?");
            $stmt = $dbh->prepare("UPDATE user SET `lastname`=?, `firstname`=?, `mail`=?, 
            `password`=?, `phone`=?, `cv`=?, `area`=?, `address`=?, `role`=?, `admin`=? WHERE id_user=?");
                
            $stmt->bindValue(1, $this->lastname);
            $stmt->bindValue(2, $this->firstname);
            $stmt->bindValue(3, $this->mail);
            $stmt->bindValue(4, $this->password);
            $stmt->bindValue(5, $this->phone);
            $stmt->bindValue(6, $this->cv);
            $stmt->bindValue(7, $this->area);
            $stmt->bindValue(8, $this->address);
            $stmt->bindValue(9, $this->role);
            $stmt->bindValue(10, $this->admin);
            $stmt->bindValue(11, $id_user);
                
            return $stmt->execute();
        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
    }
   
    public static function findByEmail($mail){
        try{
               
            $db = new DB();    
            $dbh = $db->getDbh();                
            $stmt = $dbh->prepare("SELECT * FROM user WHERE mail=?");  
            $stmt->bindValue(1, $mail);  
            $stmt->execute();                
            return $stmt->fetch();                
        } catch (PDOException $erreur){
            echo $erreur->getMessage();
        }
    }

}

?>