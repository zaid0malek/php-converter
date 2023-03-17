<?php

if( isset($_POST['submit']) ){
  $from = $_POST['opt1'];
  $to = $_POST['opt2'];
  $value = $_POST['val1'];
  switch($from){
    case "dec":
      $decimal = $value;
      break;
    case "bin":
      $decimal = bindec($value);
      break;
    case "oct":
      $decimal = octdec($value);
      break;
    case "dec":
      $decimal = hexdec($value);
      break;
  }
  switch($to){
    case "dec":
      $result = $decimal;
      break;
    case "bin":
      $result = decbin($decimal);
      break;
    case "oct":
      $result = decoct($decimal);
      break;
    case "dec":
      $result = dechex($decimal);
      break;
  }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Converter</title>
  <link rel="icon" type="image/x-icon" href=" ">
  <!-- Bootstrap CSS -->
  <link rel='stylesheet' href='css/bootstrap.min.css'>
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
</head>

<body>  
  <div class="modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-title text-center">
            <h2><a href="index.php" class="text-dark"><i class="fa fa-home" aria-hidden="true"></i></a>  Numbers Conversion</h2><hr>
          </div>
          <div class="d-flex justify-content-center text-center">
            <form action="" method="POST">
              <div class="form-group">
                <label for="opt1">From</label>
                <select name="opt1" id="opt1" class="form-control">
                  <option value="dec" <?php if(isset($from)) if($from=="dec") echo "selected"?>>Decimal</option>
                  <option value="bin" <?php if(isset($from)) if($from=="bin") echo "selected"?>>Binary</option>
                  <option value="oct" <?php if(isset($from)) if($from=="oct") echo "selected"?>>Octal</option>
                  <option value="hex" <?php if(isset($from)) if($from=="hex") echo "selected"?>>Hexa Decimal</option>
                </select>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="val1" id="val1"  <?php if(isset($value)) echo"value=$value"; else echo "value=0"?>>
              </div>
               <div class="form-group">
                <label for="opt2">To</label>
                <select name="opt2" id="opt2" class="form-control">
                  <option value="dec" <?php if(isset($to)) if($to=="dec") echo "selected"?>>Decimal</option>
                  <option value="bin" <?php if(isset($to)) if($to=="bin") echo "selected"?>>Binary</option>
                  <option value="oct" <?php if(isset($to)) if($to=="oct") echo "selected"?>>Octal</option>
                  <option value="hex" <?php if(isset($to)) if($to=="hex") echo "selected"?>>Hexa Decimal</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="val2"  id="val2" readonly  <?php if(isset($result)) echo"value= $result";?>>
              </div> <br>
              <div class="form-group">
                <input type="submit" class="form-control btn-info " name="submit" value="convert">
              </div> 
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Custom Script -->
  <script src="js/script.js"></script>
</body>
</html>