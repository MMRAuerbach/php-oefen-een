<?php
    //Load library file with database connection
    include('lib/database.php');

    if (empty($_GET['id'])) {
        die('Illegal request');
    }

    $selectQuery = "SELECT * FROM users WHERE id = :id";
    $query = $pdo->prepare($selectQuery);
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    $query->bindParam("id", $id);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ophalen van 1 gebruiker</title>
</head>
<body>
<header class="header">
    <h1>Detail voorbeeld - 1 gebruiker</h1>
    <h4>Dit is een voorbeeld hoe je 1 gebruiker op kan halen</h4>
</header>
<?php include('lib/navigation.php'); ?>
<main class="main">
    <h2>Data...</h2>
    <div class="data">
        <?php
            if (empty($result)) {
                echo "User $id not found...";
            } else {
        ?>
            <pre><code><?php var_dump($result); ?></code></pre>
        <?php
            }
        ?>
    </div>
</main>
</body>
</html>
