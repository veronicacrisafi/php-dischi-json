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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=DynaPuff:wght@400..700&family=Fascinate+Inline&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Permanent+Marker&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Web-app-dischi</title>
</head>

<body class="bg-secondary">

    <div class="row align-items-start bg-dark mb-3 ps-5">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/031/737/196/small/spotify-icon-spotify-social-media-logo-free-png.png"
            alt="music-logo"
            class="my-4 float-start"
            style="width:90px; height:auto;">
    </div>
    <div class="container">
        <div class="row mb-3 py-4">
            <?php foreach ($dischi as $disco) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border border-3">
                        <img src="<?php echo $disco['URL']; ?>" class="card-img-top" alt="cover">
                        <div class="card-body bg-dark text-light">
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

        <hr class="order border-5 border-light">

        <h1 class="my-4 text-center text-light">Form per aggiungere un nuovo disco</h1>
        <form action="server.php" method="POST" class="my-5">
            <div class="card p-4 bg-dark text-light">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Titolo canzone..." required>
                </div>
                <div class="mb-3">
                    <label for="artist" class="form-label">Artista</label>
                    <input type="text" id="artist" name="artist" class="form-control" placeholder="Nome artista..." required>
                </div>
                <div class="mb-3">
                    <label for="URL" class="form-label">Cover Album</label>
                    <input type="url" id="URL" name="URL" class="form-control" placeholder="https://esempio.com/immagine.jpg" required>
                </div>
                <div class="mb-3">
                    <label for="pubblication-year" class="form-label">Anno</label>
                    <input type="number" id="pubblication-year" name="pubblication-year" class="form-control" placeholder="Anno di pubblicazione..." required>
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genere</label>
                    <input type="text" id="genre" name="genre" class="form-control" placeholder="Scrivi il genere della canzone..." required>
                </div>
                <button class="btn btn-primary">Aggiungi artista</button>
            </div>
        </form>
    </div>



</body>

</html>