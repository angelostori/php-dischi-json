<?php

require_once "./functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raccolta Musicale</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="custom-bar text-center py-4 vw-100 bg-dark text-success">
        <h1>Raccolta Musicale</h1>
    </div>


    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-1">
            <?php foreach($records as $record) { ?>    
            <div class="col mb-3">
                <div class="card">
                    <img 
                        class="card-img-top mt-3 img-custom" 
                        src=<?php echo $record['cover_url'] ?> 
                        alt=<?php echo $record['title'] . ' - ' . $record['artist'] ?> />
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $record['title'] ?></h4>
                        <p class="card-text"><?php echo $record['artist'] ?></p>
                        <p class="card-text"><?php echo $record['release_date'] . ' - ' . $record['genre']?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <form action="server.php" method="POST">
        <input type="text" id="new-title" name="title" placeholder="Titolo" required>
        <input type="text" id="new-artist" name="artist" placeholder="Artista" required>
        <input type="text" id="new-release-date" name="release_date" placeholder="Data di uscita" required>
        <input type="text" id="new-genre" name="genre" placeholder="Genere" required>
        <input type="text" id="new-cover-url" name="cover_url" placeholder="URL copertina" required>
        <button>Aggiungi</button>
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>