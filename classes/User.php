<?php
class User{

    public function login(){
        
        $userEmail=$_POST['userEmail'];
        $userPassword=$_POST['userPassword'];

        $link=Connexion::connect();

        $sql="SELECT userName FROM users WHERE userEmail= : userEmail AND userPassword=:userPassword";

        $stmt=$link->prepare($sql);

        $stmt->bindParam(':userEmail',$userEmail, PDO::PARAM_STR);
        $stmt->bindParam(':userPassword', $userPassword, PDO::PARAM_STR);

        $stmt->execute();

        $amount=$stmt->rowCount();

        if($amount == 0){
            header('location: formlogin.php?error=1');
        }else{
            $_SESSION['login']=1;
            $infoUser=$stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['userName']=$infoUser['userName'];

            header('location: admin.php');
        }

    }

    public function authenticate(){
        if(!isset($_SESSION['login'])){
            header('location: formLogin.php?error=2');
        }
    }

}
?>