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
    <h4>Dit is een voorbeeld hoe je een DB connectie kan maken</h4>
</header>
<?php include('lib/navigation.php'); ?>
<main class="main">
    <h2>Data...</h2>
    <div class="data">
        <?php
            $selectQuery = 'SELECT * FROM users';
            $result = $pdo->query($selectQuery);
            $i = 1;
            echo "<table width='80%'>";

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                if ($i == 1) {
                    foreach ($row AS $key => $field) {
                        echo "<th class='$key'>$key</th>";
                    }
                    echo "</tr><tr>";
                }
                foreach ($row AS $key => $field) {
                    echo "<td class='$key'>";
                    echo "<a href='detail.php?id=".$row['id']."'>";
                    echo $field;
                    echo "</a>";
                    echo "</td>";
                }
                $i++;
            }
        ?>
    </div>
</main>
</body>
</html>
