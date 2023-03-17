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
  <div class="modal " id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-title text-center">
            <h2><a href="index.php" class="text-dark"><i class="fa fa-home" aria-hidden="true"></i></a>  Volume Conversion</h2><hr>
          </div>
          <div class="d-flex justify-content-center text-center">
            <form>
              <input type="hidden" class="form-control" id="type" name="type" value="volume">
              <div class="form-group">
                <label for="opt1">From</label>
                <select name="opt1" id="opt1" class="form-control">
                  <option value="mcube">Cubic meter</option>
                  <option value="cmcube">Cubic centimeter</option>
                  <option value="mmcube">Cubic millimeter</option>
                  <option value="liter">Liter</option>
                </select>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="val1" id="val1" value="0">
              </div>
              <div class="form-group">
                <label for="opt2">To</label>
                <select name="opt2" id="opt2" class="form-control">
                  <option value="mcube">Cubic meter</option>
                  <option value="cmcube">Cubic centimeter</option>
                  <option value="mmcube">Cubic millimeter</option>
                  <option value="liter">Liter</option>
                </select>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="val2"  id="val2" readonly>
              </div> <br>
              <div class="form-group">
                <input type="button" class="form-control btn-info btn" name="submit" value="convert">
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