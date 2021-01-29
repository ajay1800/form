<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
</head>
<body>
    <?php 
        $name = $_REQUEST["name"];
        $email = $_REQUEST["mail"];
        $message = $_REQUEST["msg"];

        if(empty($name) || empty($email) || empty($message)){
            echo "Please Fill All The Required Fields";
        }
        else{
            mail("ajayavasthi18@gmail.com","job application form",$message);
        }
    ?>
</body>
</html>
