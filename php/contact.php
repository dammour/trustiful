<?php

    $array = array("firstname" => "", "name" => "", "email" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "isSuccess" => false);
    $emailTo = "djamel.manuzo@gmail.com";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $array["firstname"] = test_input($_POST["firstname"]);
        $array["name"] = test_input($_POST["name"]);
        $array["email"] = test_input($_POST["email"]);
        $array["isSuccess"] = true; 
        $emailText = "";
        
        if (empty($array["firstname"]))
        {
            $array["firstnameError"] = "Nous aimerions vous connaître mieux.";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Prénom: {$array['firstname']}\n";
        }

        
        if(!isEmail($array["email"])) 
        {
            $array["emailError"] = "Vous n'avez pas entré une adresse mail valide.";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Email: {$array['email']}\n";
        }

        if (empty($array["name"]))
        {
            $array["nameError"] = "Merci de bien vouloir renseigner votre message.";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Message: {$array['name']}\n";
        }

        
        if($array["isSuccess"]) 
        {
            //$headers = "From: {$array['firstname']} {$array['name']} <{$array['email']}>\r\nReply-To: {$array['email']}";
            $headers = "From: <{$array['email']}>\r\nReply-To: {$array['email']}";
            mail($emailTo, "Formulaire de contact", $emailText, $headers);
        }
        
        echo json_encode($array);
        
    }

    function isEmail($email) 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    function isPhone($phone) 
    {
        return preg_match("/^[0-9 ]*$/",$phone);
    }
    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 
?>



