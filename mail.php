<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['submit'])){
    $to=$_POST['to'];
    // echo"here";
    $sub=$_POST['subject'];
    $body=$_POST['body'];
    $from="From: hekahekameka@gmail.com";
        echo "her11dsrf";

    if(mail($to, $sub, $body, $from)){
        echo "mail sent to: $to, having :$sub//$body ,,, by $from";
    }
}

// phpinfo();
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
  <!-- <link rel="stylesheet" href="css/demo.css"> -->
  <script src="js/jquery.min.js"></script>

</head>

<body>
  <!-- partial:index.partial.html -->


  <div class="modal " id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="form-title text-center">
            <h2><a href="index.php" class="text-dark"><i class="fa fa-home" aria-hidden="true"></i></a>  Mail</h2><hr>
            
          </div>
          <div class="d-flex justify-content-center text-center">
            <form action="#" method="POST">
               
                <div class="form-group">
                    <label for="to">To</label>
                <input type="email" class="form-control" name="to" id="to" >
                    
              </div>
              <div class="form-group">
                 <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" >
              </div>
               <div class="form-group">
                    <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control"></textarea>

              </div>
            
              <div class="form-group">
                <input type="submit" class="form-control btn-info " name="submit" value="Mail">
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