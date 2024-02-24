<?php
  $linkParam = $_GET['param'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="filmPage.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>
    <title>CrudNema</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body style="background-color: lightcyan;">
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-size: 50px;margin-left: 50px;color: cornflowerblue;">Seanema</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="margin-left: 50px; margin-top: 22px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php" style="font-size: 25px;">Home</a>
              </li>
              <li class="nav-item" style="margin-left: 50px;">
                <a class="nav-link" href="balancing.php" style="font-size: 25px;">Balance</a>
              </li>
              <li class="nav-item" style="margin-left: 50px;">
                <a class="nav-link" href="ticketing.php" style="font-size: 25px;">Ticket</a>
              </li>
              <li class="nav-item" style="margin-left: 50px;">
                <a class="nav-link" href="history.php" style="font-size: 25px;">History</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div id="movie-container">
        <div id="movie-card">
            <h2 id="titleP">.</h2>
            <img id="movie" src="###" alt="###">
            <p id="description">.</p>
            <p id="rate">.</p>
            <p id="price">.</p>
            <form method = "POST" action="ticketing.php">
              <input type="hidden" id="movieID" name="movieID" value="<?php echo $linkParam ?>">
              <button type="submit" name="select_movie" class="btn btn-primary">
                 Book Ticket
              </button>
            <form>
        </div>
    </div>
    <br>
    <br>

    <script>
        let params = new URL(document.location).searchParams;
        let value = params.get("param");
        openMovieDesc(value);
    </script>

</body>
</html>