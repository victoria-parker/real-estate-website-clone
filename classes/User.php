<?php
class User{

    private $userName;
    private $userEmail;
    private $userPassword;
    private $adminPermits;
    private $userId;

    public function login(){

        $userEmail=$_POST['userEmail'];
        $userPassword=$_POST['userPassword'];

        $link=Connexion::connect();

        $sql="SELECT userName, adminPermits FROM users WHERE userEmail= :userEmail AND userPassword=:userPassword";

        $stmt=$link->prepare($sql);

        $stmt->bindParam(':userEmail', $userEmail, PDO::PARAM_STR);
        $stmt->bindParam(':userPassword', $userPassword, PDO::PARAM_STR);

        $stmt->execute();

        $amount=$stmt->rowCount();

        var_dump($stmt);
        if($amount == 0){
            header('location: formlogin.php?error=1');
        }else{
            $_SESSION['login']=1;
            $infoUser=$stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['userName']=$infoUser['userName'];
            $_SESSION['adminPermits']=$infoUser['adminPermits'];

            header('location: admin.php');
        }

    }

    public function authenticate(){
        if(!isset($_SESSION['login'])){
            header('location: formLogin.php?error=2');
        }
    }

    public function authenticateAdmin(){
        if(!isset($_SESSION['adminPermits'])){
            header('location: formLogin.php?error=3');
        }
    }

    public function listUsers(){

        $link=Connexion::connect();

        $sql="SELECT userName, userEmail, userPassword, adminPermits, id FROM users";

        $stmt=$link->prepare($sql);

        $stmt->execute();
        $users=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;

    }

    public function modifyUser(){

        $userEmail=$_POST['userEmail'];
        $userName=$_POST['userName'];
        $userPassword=$_POST['userPassword'];
        $adminPermits=$_POST['adminPermits'] == 'true' ? true : false;
        $userId=$_POST['userId'];
        
        $link=Connexion::connect();

        $sql="UPDATE users SET userEmail=:userEmail, userName=:userName, userPassword=:userPassword, adminPermits=:adminPermits WHERE id=:userId";

        $stmt=$link->prepare($sql);
        
        $stmt->bindParam(':userEmail',$userEmail,PDO::PARAM_STR);
        $stmt->bindParam(':userName',$userName,PDO::PARAM_STR);
        $stmt->bindParam(':userPassword',$userPassword, PDO::PARAM_STR);
        $stmt->bindParam(':adminPermits',$adminPermits, PDO::PARAM_BOOL);
        $stmt->bindParam(':userId',$userId,PDO::PARAM_INT);

        if($stmt->execute()){
            $this->setUserEmail($userEmail);
            $this->setUserName($userName);
            $this->setUserPassword($userPassword);
            $this->setAdminPermits($adminPermits);
            $this->setUserId($userId);
            return true;
        }

        return false;
    }

    public function seeUserById(){
        
        $userId=$_GET['id'];

        $link=Connexion::connect();

        $sql="SELECT userEmail, userName, userPassword, adminPermits FROM users WHERE id=:userId";

        $stmt=$link->prepare($sql);
        $stmt->bindParam(":userId",$userId,PDO::PARAM_INT);

        if($stmt->execute()){
            $user=$stmt->fetch();
            $this->setUserEmail($user['userEmail']);
            $this->setUserName($user['userName']);
            $this->setUserPassword($user['userPassword']);
            $this->setAdminPermits($user['adminPermits']);
            $this->setUserId($userId);
            return true;
        }

        return false;
    }

    public function addUser(){
        $userEmail=$_POST['userEmail'];
        $userName=$_POST['userName'];
        $userPassword=$_POST['userPassword'];
        $adminPermits=$_POST['adminPermits'] == 'true' ? true : false;

        $link=Connexion::connect();

        $sql="INSERT INTO users SET
        userEmail= :userEmail,
        userName= :userName,
        userPassword= :userPassword,
        adminPermits=:adminPermits";

        $stmt=$link->prepare($sql);

        $stmt->bindParam(':userEmail',$userEmail,PDO::PARAM_STR);
        $stmt->bindParam(':userName',$userName,PDO::PARAM_STR);
        $stmt->bindParam(':userPassword',$userPassword, PDO::PARAM_STR);
        $stmt->bindParam(':adminPermits',$adminPermits, PDO::PARAM_BOOL);
        
        
        if($stmt->execute()){

            $this->setUserEmail($userEmail);
            $this->setUserName($userName);
            $this->setUserPassword($userPassword);
            $this->setAdminPermits($adminPermits);
            return true;
        }

        return false;
    }

    public function deleteUser(){
        $userId=$_POST['userId'];
        $userEmail=$_POST['userEmail'];

        $link=Connexion::connect();

        $sql="DELETE FROM users WHERE id=:userId";

        $stmt=$link->prepare($sql);

        $stmt->bindParam(':userId',$userId, PDO::PARAM_INT);

        if($stmt->execute()){
            $this->setUserId($userId);
            $this->setUserEmail($userEmail);
            return $this;
        }
        return false;
    }

    public function logout(){
        session_destroy();
        header('location: formLogin.php');
    }


    /**
     * Get the value of userName
     */ 
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set the value of userName
     *
     * @return  self
     */ 
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get the value of userEmail
     */ 
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set the value of userEmail
     *
     * @return  self
     */ 
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get the value of userPassword
     */ 
    public function getUserPassword()
    {
        return $this->userPassword;
    }


    /**
     * Set the value of userPassword
     *
     * @return  self
     */ 
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get the value of adminPermits
     */ 
    public function getAdminPermits()
    {
        return $this->adminPermits;
    }

    /**
     * Set the value of adminPermits
     *
     * @return  self
     */ 
    public function setAdminPermits($adminPermits)
    {
        $this->adminPermits = $adminPermits;

        return $this;
    }

    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

}
?>