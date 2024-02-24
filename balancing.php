<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
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
<body>
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

    <?php
      echo "<h1> Current Balance = $balance </h1>";
    ?>

    <div class="container">
      <form method="POST" action="update.php">
        <div class = "mb-3 row">
          <input type="number" name="money" class="form-control" id="money" placeholder="Enter Amount (Ex : 50000)">
        </div>
        <div class = "mb-3 row mt-4">
          <button type="submit" name="aksi" value="topup" class="btn btn-primary" onClick="return confirm('Confirmation for Top - Up')">
            Top Up
          </button>
          <button type="submit" name="aksi" value="withdraw" class="btn btn-secondary" onClick="return confirm('Confirmation for Withdrawal')">
            Withdraw
          </button>
        </div>
      </form>
    </div>
</body>
</html>