<?php
    //Load library file with database connection
    include('lib/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database voorbeeld</title>
</head>
<body>
<header class="header">
    <h1>Database connectie voorbeeld</h1>
    <h4>Dit is een voorbeeld van een INSERT statement</h4>
</header>
<?php include('lib/navigation.php'); ?>
<main class="main">
    <h2>Data...</h2>
    <div class="data">
        <?php
            try {
                $query = "UPDATE users SET password = :password, city = :city WHERE id = :id";
                $query = $pdo->prepare($selectQuery);
                $id = 13;
                $pass = '1234567';
                $city = 'Raamsdonkveer';

                $query->bindParam("id", $id);
                $query->bindParam("password", $pass);
                $query->bindParam("city", $city);
                $result = $query->execute();

                var_dump($result);
                if ($result) {
                    echo "Gebruiker aangepast";
                } else {
                    echo "Er ging iets mis...";
                }
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
        ?>
    </div>
</main>
</body>
</html>
