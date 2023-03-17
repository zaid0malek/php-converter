<?php
if(isset($_POST['submit'])){
  $from=$_POST['opt1'];
  $to=$_POST['opt2'];
  $value=$_POST['val1'];
  $reqUrl = "https://api.exchangerate-api.com/v4/latest/$from";
  $responseJson = file_get_contents($reqUrl);

  // Continuing if we got a result
  if(false !== $responseJson) {
      try {
        $responseObject = json_decode($responseJson);
        $price = round(($value * $responseObject->rates->$to), 2);
      }
      catch(Exception $e) {
        echo $e;
      }
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
  <div class="modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-title text-center">
            <h2><a href="index.php" class="text-dark"><i class="fa fa-home" aria-hidden="true"></i></a>  Volume Conversion</h2><hr>  
          </div>
          <div class="d-flex justify-content-center text-center">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="opt1">From</label>
                  <select name="opt1" id="opt1" class="form-control">
                    <option value="CAD" <?php if(isset($from)) if($from=="CAD") echo "selected"?>>Canadian Dollar</option>
                    <option value="EUR" <?php if(isset($from)) if($from=="EUR") echo "selected"?>>Euro</option>
                    <option value="INR" <?php if(isset($from)) if($from=="INR") echo "selected"?>>Indian Rupee</option>
                    <option value="GBP" <?php if(isset($from)) if($from=="GBP") echo "selected"?>>Pound</option>
                    <option value="USD" <?php if(isset($from)) if($from=="USD") echo "selected"?>>US Dollar</option>
                  </select>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="val1" id="val1"  <?php if(isset($value)) echo"value=$value"; else echo "value=0"?>>
                </div>
                <div class="form-group">
                    <label for="opt2">To</label>
                  <select name="opt2" id="opt2" class="form-control">
                    <option value="CAD" <?php if(isset($to)) if($to=="CAD") echo "selected"?>>Canadian Dollar</option>
                    <option value="EUR" <?php if(isset($to)) if($to=="EUR") echo "selected"?>>Euro</option>
                    <option value="INR" <?php if(isset($to)) if($to=="INR") echo "selected"?>>Indian Rupee</option>
                    <option value="GBP" <?php if(isset($to)) if($to=="GBP") echo "selected"?>>Pound</option>
                    <option value="USD" <?php if(isset($to)) if($to=="USD") echo "selected"?>>US Dollar</option>
                  </select>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="val2"  id="val2" readonly <?php if(isset($price)) echo"value=$price";?>>
                </div> 
                <div class="form-group">
                    <span><?php if(isset($value)) echo"Please Note this rates are as of ".date("d/m/Y", strtotime( ' -1 day'));?></span>              
                </div><br>
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