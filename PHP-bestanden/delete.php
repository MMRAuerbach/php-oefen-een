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
    <h4>Dit is een voorbeeld van een DELETE statement</h4>
</header>
<?php include('lib/navigation.php'); ?>
<main class="main">
    <h2>Data...</h2>
    <div class="data">
        <?php
            $deleteQuery = "DELETE FROM users WHERE id = :id";
            $query = $pdo->prepare($deleteQuery);
            $id = 14;
            $query->bindParam("id", $id);
            $result = $query->execute();

            if ($result) {
                echo " Gebruiker is gewist";
            } else {
                echo "Gebruiker is niet gewist";
            }
        ?>
    </div>
</main>
</body>
</html>
