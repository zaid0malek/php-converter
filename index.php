<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Converter</title>
  <!-- Bootstrap CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Demo CSS -->
  <!-- <link rel="stylesheet" href="css/demo.css"> -->

</head>

<body>
  <!-- partial:index.partial.html -->


  <div class="modal " id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="form-title text-center">
          <h2><a href="index.php" class="text-dark"><i class="fa fa-home" aria-hidden="true"></i></a>  Measurement Conversion</h2><hr>
          </div>
          <div class="d-flex flex-wrap text-center">
            <!-- <form>
              <div class="form-group">
                <input type="email" class="form-control" id="email1" placeholder="Your email address...">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password1" placeholder=  "Your password...">
              </div> -->
              <a href="Length.php" class="text-white">
            <button type="button" class="btn btn-info btn-round text-white">
                <h1><i class="fa fa-ruler"></i></h1>Length & Distance
            </button></a>
            <a href="area.php" class="text-white">
            <button type="button" class="btn btn-info btn-round">
                <h1><i class="fa-regular fa-square"></i></h1>Area
            </button></a>
            <a href="volume.php" class="text-white">
            <button type="button" class="btn btn-info btn-round">
                <h1><i class="fa fa-glass-water"></i></h1>Volume & Capacity
            </button></a>
            <a href="weight.php" class="text-white">
            <button type="button" class="btn btn-info btn-round">
                <h1><i class="fa-solid fa-scale-balanced"></i></h1>Mass & Weight
            </button></a>
            <a href="speed.php" class="text-white">
            <button type="button" class="btn btn-info btn-round">
                <h1><i class="fa-solid fa-gauge"></i></h1>Speed
            </button></a>
            <a href="temp.php" class="text-white"><button type="button" class="btn btn-info btn-round">
                <h1><i class="fa-solid fa-temperature-low"></i></h1>Temperature
            </button> </a>
            <a href="numbers.php" class="text-white">
            <button type="button" class="btn btn-info btn-round">
                <h1><i class="fa-solid fa-0"></i> <i class="fa-solid fa-1"></i></h1>Numeral System
            </button></a>
            <a href="currency.php" class="text-white"><button type="button" class="btn btn-info btn-round">
                <h1><i class="fa-solid fa-indian-rupee-sign"></i></h1>Currency
            </button> </a>
            <!-- </form> -->


          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <!-- Custom Script -->
  <script src="js/script.js"></script>
</body>

</html>