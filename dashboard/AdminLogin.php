
<?php

session_start();
$con = mysqli_connect('localhost','root');
if ($con) {
    echo "";
    # code...
}else{
    echo "no connection";
}
?>

<!DOCTYPE htmel>

<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <?php  include 'link.php'; ?>
</head>
<body class="two">
    <header>
        <div class="container center-div">
        <div class="heading text-center text-uppercasete text-white">ADMIN LOGIN PAGE
            
        </div>
        <div class="container row">
            <div class="admin-form">
                <form action="LoginCheck.php" method="POST">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="user" value="" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="pass" value="" class="form-control">
                        
                    </div>
                    <input type="submit" class="btn btn-success" name="submit" value="Login">
                    
                </form>
                
            </div>
            
        </div>
    </div>
    </header>

</body>
</html>