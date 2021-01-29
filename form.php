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
        $msg = $_REQUEST["msg"];

        mail("ajayavasthi18@gmail.com","Job Application Form","$msg");
    ?>
</body>
</html>