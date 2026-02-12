<?php

    // leggere il file dei todo e salvarli in una variabile
    $record_text = file_get_contents('./records.json');

    // convertiamo la sringa da json a struttura dati php
    $records = json_decode($record_text, true);

    // modifichiamo questa struttura dati
    //inserire il nuovo record nel file
    $records[] = [
        'title' => $_POST['title'],
        'artist' => $_POST['artist'],
        'release_date' => $_POST['release_date'],
        'genre' => $_POST['genre'],
        'cover_url' => $_POST['cover_url']
    ];

    // riconvertiamo la struttura dati php in stringa json
    $record_text_updated = json_encode($records);

    // sovrascrivere il nuovo record nel file .json
    file_put_contents('./records.json', $record_text_updated);

    // reindirizzare l'utente alla index
    header('Location: ./index.php');

?>