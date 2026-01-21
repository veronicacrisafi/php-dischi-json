<?php
$json_list = file_get_contents('./musicRecord.json');

$dischi = json_decode($json_list, true);

if (
    isset($_POST['title']) &&
    isset($_POST['artist']) &&
    isset($_POST['URL']) &&
    isset($_POST['pubblication-year']) &&
    isset($_POST['genre'])
) {
    $nuovo_disco = [
        'title' => $_POST['title'],
        'artist' => $_POST['artist'],
        'URL' => $_POST['URL'],
        'pubblication-year' => $_POST['pubblication-year'],
        'genre' => $_POST['genre']
    ];

    $dischi[] = $nuovo_disco;
    $json_dischi_update = json_encode($dischi);
    file_put_contents('./musicRecord.json', $json_dischi_update);
    header('Location: ./index.php');
    exit;
}
