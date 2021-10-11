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
<nav>
    <?php include('lib/navigation.php'); ?>
<main class="main">
    <h2>Data...</h2>
    <div class="data">
        <?php
            //het id-veld hoeven we niet op te slaan, deze gaat automatisch omhoog
            //de anderen velden vullen we wel allemaal
            $query = "INSERT INTO users (username, password, email, age, city) 
                          VALUES ('Jean', 123545, 'jean@jiemeel.kom', 48, 'Koog aan de zaan')";
            $result = $pdo->query($query);

            //Tweede insert query
            //LET OP: We voegen maar 3 velden in, de rest blijft leeg (de waarde is in de database dan NULL)
            $query = "INSERT INTO users (username, password, email) 
                      VALUES ('Jean', 123545, 'jean@jiemeel.kom')";
            $result = $pdo->query($query);
            var_dump($result);
            print_r($pdo->errorInfo());
        ?>
    </div>
</main>
</body>
</html>
