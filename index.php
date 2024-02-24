<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="imageStyle.css" rel="stylesheet">
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

      <h1 style="margin-left: 65px;font-size: 30px;margin-top: 30px;">
        Currently Airing
      </h1>

      <p class="lead" style="margin-left: 65px;">
        <?php echo "SeaPay : Rp.$balance"?>
      </p>

      <ul id="imageList">
        <!--GENERATE IMAGE USING JS-->
      </ul>

      <script>
        generateImageList();
      </script>


</body>
</html>