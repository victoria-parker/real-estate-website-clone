<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

class Message
{
    //Attributes
    private $fullName;
    private $email;
    private $issue;
    private $phone;
    private $message;

    public function sendMessage()
    {
        $fullName = filter_var($_POST['fullName'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
        $issue = filter_var($_POST['issue'], FILTER_SANITIZE_STRING);

        $body='From: '.$fullName.'<br>'.'Email: '.$email.'<br>'.'Phone number:'.$phone.'<br>'.'Message: '.$message;
        $mail = new PHPMailer(true);

        try {
            //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->AuthType = 'PLAIN';
                $mail->Username   = 'example@email.com';                     //SMTP username
                $mail->Password   = '*********';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

            //Recipients
                $mail->setFrom('example@email.com',$fullName);
                $mail->addAddress('example@email.com', 'example');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $issue;
            $mail->Body    = $body;


            $mail->send();
            return 'success';

        } catch (Exception $e) {
            return 'danger';
        }


    }

    /**
     * Get the value of fullName
     */ 
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set the value of fullName
     *
     * @return  self
     */ 
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of issue
     */ 
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Set the value of issue
     *
     * @return  self
     */ 
    public function setIssue($issue)
    {
        $this->issue = $issue;

        return $this;
    }
}