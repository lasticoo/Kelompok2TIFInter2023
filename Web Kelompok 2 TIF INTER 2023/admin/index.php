<?php
session_start();

if ((empty($_SESSION['username'])) and (empty($_SESSION['password']))) {

echo '  

';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisatku.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .posisitengah{
            margin: 0 auto;
        }
        
        body {
           
            background-image: url("image/login.png");
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center; 
            align-items: center; 
            
        }

        .card {
              
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>

</head>
<body>
     <div class="container mt-5">
        <div class="col-md-4 posisitengah">
            <div class="card mt-4">
                <div class="card-body">
                    <form action="ceklogin.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter Username" required
                            value="<?php echo (isset($_COOKIE["username"])) ? $_COOKIE["username"] : '' ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required
                             value="<?php echo (isset($_COOKIE['password'])) ? $_COOKIE['password'] : '' ?>">
                        </div>
                        
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember"
                            <?php echo (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) ? "checked" : "" ?>>
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>

<?php
}else{
    echo "<script>window.history.go(-1)</script>";
}

?>