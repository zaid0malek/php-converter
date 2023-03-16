<?php
if(isset($_POST['submit'])){
  $opt1=$_POST['opt1'];
  $opt2=$_POST['opt2'];
  $val1=$_POST['val1'];
  // $val2=$_POST['val2'];
  // echo $opt1;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Converter</title>
  <!-- Bootstrap CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Demo CSS -->
  <!-- <link rel="stylesheet" href="css/demo.css">   -->
  <script src="js/jquery.min.js"></script>

</head>

<body>
  <!-- partial:index.partial.html -->


  <div class="modal " id="lengthModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="form-title text-center">
            <h2><a href="index.php" class="text-dark"><i class="fa fa-home" aria-hidden="true"></i></a>  Length Conversion</h2><hr>
          </div>
          <div class="d-flex justify-content-center text-center">
            <form action="#" method="POST">
                 <input type="hidden" class="form-control" id="type" name="type" value="length">
                <div class="form-group">
                    <label for="opt1">From</label>
                <select name="opt1" id="opt1" class="form-control">
                    <option value="Kilometer">Kilometer</option>
                    <option value="Meter">Meter</option>
                    <option value="Centimeter">Centimeter</option>
                    <option value="Millimeter">Millimeter</option>
                    <option value="Micrometer">Micrometer</option>
                    <option value="Nanometer">Nanometer</option>
                    <option value="Mile">Mile</option>
                    <option value="Foot">Foot</option>
                    <option value="Yard">Yard</option>                  
                    <option value="Inch">Inch</option>
                </select>
              </div>
                <div class="form-group">
                <input type="number" class="form-control" name="val1" id="val1" value="0">
              </div>
               <div class="form-group">
                    <label for="opt2">To</label>
                <select name="opt2" id="opt2" class="form-control">
                    <option value="Kilometer">Kilometer</option>
                    <option value="Meter">Meter</option>
                    <option value="Centimeter">Centimeter</option>
                    <option value="Millimeter">Millimeter</option>
                    <option value="Micrometer">Micrometer</option>
                    <option value="Nanometer">Nanometer</option>
                    <option value="Foot">Foot</option>
                    <option value="Yard">Yard</option>                  
                    <option value="Inch">Inch</option>
                </select>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" id="val2" name="val2" readonly>
              </div> <br>
              <div class="form-group">
                <input type="button" class="form-control btn-info btn" name="submit"  value="convert">
              </div> 
            </form>


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