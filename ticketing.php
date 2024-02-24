<?php
  $id = -1;
  if(isset($_POST['select_movie'])){
     $selectValue = $_POST['movieID'];
     $id = $selectValue;
  }
?>

<script>
  var selectedMovie = "<?php echo $id; ?>";
  console.log(selectedMovie);
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="filmPage.css" rel="stylesheet">
    <link href="cinemaStyle.css" rel="stylesheet">
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
     
  <select id="option_movies" name="option_movies" value = "value_of_option" class="form-select" aria-label="Default select example">
      <option selected> Select A Movie : </option>
      <option value="0" <?php if ($id == '0') echo 'selected'; ?>>Fast X</option>
      <option value="1" <?php if ($id == '1') echo 'selected'; ?>>John Wick: Chapter 4</option>
      <option value="2" <?php if ($id == '2') echo 'selected'; ?>>The Super Mario Bros. Movie</option>
      <option value="3" <?php if ($id == '3') echo 'selected'; ?>>Avatar: The Way of Water</option>
      <option value="4" <?php if ($id == '4') echo 'selected'; ?>>Guardians of the Galaxy Vol. 3</option>
      <option value="5" <?php if ($id == '5') echo 'selected'; ?>>Ant-Man and the Wasp: Quantumania</option>
      <option value="6" <?php if ($id == '6') echo 'selected'; ?>>The Pope's Exorcist</option>
      <option value="7" <?php if ($id == '7') echo 'selected'; ?>>To Catch a Killer</option>
      <option value="8" <?php if ($id == '8') echo 'selected'; ?>>Transformers: Age of Extinction</option>
      <option value="9" <?php if ($id == '9') echo 'selected'; ?>>Puss in Boots: The Last Wish</option>
      <option value="10"<?php if ($id == '10') echo 'selected'; ?>>Scream VI</option>
      <option value="11"<?php if ($id == '11') echo 'selected'; ?>>Black Adam</option>
      <option value="12"<?php if ($id == '12') echo 'selected'; ?>>Dungeons & Dragons: Honor Among Thieves</option>
      <option value="13"<?php if ($id == '13') echo 'selected'; ?>>Peter Pan & Wendy</option>
      <option value="14"<?php if ($id == '14') echo 'selected'; ?>>Spider-Man: No Way Home</option>
      <option value="15"<?php if ($id == '15') echo 'selected'; ?>>Black Panther: Wakanda Forever</option>
      <option value="16"<?php if ($id == '16') echo 'selected'; ?>>Transformers: The Last Knight</option>
      <option value="17"<?php if ($id == '17') echo 'selected'; ?>>Renfield</option>
      <option value="18"<?php if ($id == '18') echo 'selected'; ?>>Cocaine Bear</option>
      <option value="19"<?php if ($id == '19') echo 'selected'; ?>>Prey</option>
      <option value="20"<?php if ($id == '20') echo 'selected'; ?>>Fall</option>
      <option value="21"<?php if ($id == '21') echo 'selected'; ?>>Avatar</option>
      <option value="22"<?php if ($id == '22') echo 'selected'; ?>>Split</option>
      <option value="23"<?php if ($id == '23') echo 'selected'; ?>>Top Gun: Maverick</option>
      <option value="24"<?php if ($id == '24') echo 'selected'; ?>>Thor: Love and Thunder</option>
      <option value="25"<?php if ($id == '25') echo 'selected'; ?>>Sonic the Hedgehog 2</option>
      <option value="26"<?php if ($id == '26') echo 'selected'; ?>>Avengers: Infinity War</option>
      <option value="27"<?php if ($id == '27') echo 'selected'; ?>>The Whale</option>
      <option value="28"<?php if ($id == '28') echo 'selected'; ?>>The Batman</option>
      <option value="29"<?php if ($id == '29') echo 'selected'; ?>>Smile</option>
      <option value="30"<?php if ($id == '30') echo 'selected'; ?>>Encanto</option>
  </select>

  <select id="seat_amount" name="seat_amount" class="form-select" aria-label="Default select example">
    <option selected> Seat Amount </option>
    <option value = "1"> 1 </option>
    <option value = "2"> 2 </option>
    <option value = "3"> 3 </option>
    <option value = "4"> 4 </option>
    <option value = "5"> 5 </option>
    <option value = "6"> 6 </option>
  </select>

  <div class="cinema">
    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>N/A</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

    <div class="container">
      <div class="screen"></div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
  </div>
</div>

 <script>
  var selectMovies = document.getElementById('option_movies');
  selectMovies.addEventListener('change', function() {
    selectedMovie = selectMovies.value;
    console.log(selectedMovie);
  });
  
  var selectSeats = document.getElementById('seat_amount');
  selectSeats.addEventListener('change', function(){
    var selectedSeat = selectSeats.value;
    console.log(selectedSeat);
  })
 </script>


</body>
</html>