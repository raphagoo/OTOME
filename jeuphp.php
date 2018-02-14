<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php

function avoirinfo($param1, $param2, $param3)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "startup";
    try {
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $infos = $bdd->query("SELECT $param1 FROM $param2 WHERE id=$param3");
        $infos->setFetchMode(PDO::FETCH_OBJ);

        if ($param1 == 'image'){

            $infos->bindColumn(1, $image, PDO::PARAM_LOB);
            $infos->fetch(PDO::FETCH_BOUND);
            header("Content-Type: image");
            echo '<img src=';
            print_r($image); echo '>';
        }
        else {
            while ($info = $infos->fetch()) {
                echo  $info->$param1 . '<br>';
            }
        }
    } catch (PDOException $e) {
        print "Erreur! " . "<br>" . $e->getMessage();
        die();
    }
}
?>
</body>
</html>
