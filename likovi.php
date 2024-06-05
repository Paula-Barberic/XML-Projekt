<?php

# load json file
$likovi = json_decode(file_get_contents('likovi.json'), true);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projekt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body class="bg-warning-subtle">
  <nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <h4>JoJo's Bizarre Adventure</h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/projekt/likovi.php">Likovi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/projekt/dijelovi.php">Dijelovi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <table class="table table-dark table-striped">
      <thead>
        <tr class="text-center">
          <th scope="col">Lik</th>
          <th scope="col">Dio</th>
          <th scope="col">Moć/Stand</th>
          <th scope="col">Uloga</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($likovi as $lik) { ?>
        <tr class="text-center">
          <td><?php echo $lik['lik']; ?></td>
          <td><?php echo $lik['dio']; ?></td>
          <td><?php echo $lik['moc-stand']; ?></td>
          <td><?php echo $lik['uloga']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
        </table>
    <div class="text-center">
    <h5><a class="d-inline-flex focus-ring py-1 px-2 bg-warning border rounded-2 link-dark" href="https://youtube.com/playlist?list=PLSk_UPtRnbGL0eiy9DVYDbIrN3vcIIjtv&si=6nHZNeSvzSyYXGz4" target="_blank">Playlista tema likova</a></h5>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
  <footer class="bg-warning text-dark text-center fixed-bottom">
    <h4>Paula Barberić, 2024.</h4>
    </footer>
  
</html>