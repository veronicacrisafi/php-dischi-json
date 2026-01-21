<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
require_once "./server.php";
?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Web-app-dischi</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center my-4">Dischi</h1>
        <div class="row">
            <?php foreach ($dischi as $disco) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="<?php echo $disco['URL']; ?>" class="card-img-top" alt="cover">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $disco['title']; ?></h5>
                            <p class="card-text">
                                <strong>Artista:</strong> <?php echo $disco['artist']; ?><br>
                                <strong>Anno:</strong> <?php echo $disco['pubblication-year']; ?><br>
                                <strong>Genere:</strong> <?php echo $disco['genre']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>