
<?php
/*try
{
  $pdo = new PDO('mysql:host=localhost;dbname=woodsmans_log', 'cclair', 'Cac120712!');
}
catch (PDOException $e)
{
  echo $e->getMessage();
} */
 function dbConnect($usertype, $connectionType = 'mysqli') {
    $host = 'localhost';
    $db = 'csooter_bpa2017';
    if ($usertype  == 'read') {
        $user = 'csooter_bpa';
        $pwd = 'G0t3am';
    } else {
        exit('Unrecognized user');
    }
    if ($connectionType == 'mysqli') {
        $conn = @ new mysqli($host, $user, $pwd, $db);
        if ($conn->connect_error) {
            exit($conn->connect_error);
        }
        return $conn;
    } else {
        try {
            return new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
