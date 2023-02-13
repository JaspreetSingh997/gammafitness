<?php
$test = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login / Register - Gamma Fitness</title>

    <link rel="stylesheet" href="../resources/css/app.css">
</head>

<body>
    <section id="Lhome" class="loginHomeContainer">
        <div class="loginContainer">
            <form action="" class="lgForm" method="GET">
                <h2>Login Panel</h2>
                <div class="row">
                    <div class="col-25">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="col-75">
                        <input type="email" name="email" id="email" class="email"
                            placeholder="Enter Email Address" required />
                        <span class="err"><?php echo $test; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="Pass">Password</label>
                    </div>
                    <div class="col-75">
                        <input type="password" name="pass" id="Pass" class="pass" placeholder="Enter Password"
                            required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">

                    </div>
                    <div class="col-75">
                        <input type="submit" value="Login" name="login">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php
    if (isset($_GET['login'])) 
    {
        $email = $_GET['email'];
        $pass = $_GET['pass'];
    
       // $conn = mysqli_connect('localhost', 'root', '', 'gammafitness');
    
        // $conn = DB::connection()->getPDO();
        $conn = new mysqli('localhost', 'root', '', 'gammafitness');
    
        //echo uniqId();
        // if ($result = $conn->query('SELECT * FROM register')) {
        //     echo 'Returned rows are: ' .$result->num_rows;
        //     //echo 'Returned rows are: ' . $result->num_rows;
        //     // Free result set
        //     //$result->free_result();
        //    // echo $result->fetch(MYSQLI_ASSOC);
        // }
    
        if ($conn->connect_error) 
        {
            die('Connection failed: ' . $conn->connect_error);
        } 
        else 
        {
           // echo "email = '". $email . "' AND pass = '". $pass . "'";
           $ins = DB::select("SELECT email, pass, Role from register WHERE email = '$email' AND pass = '$pass'");
            //$ins = $conn->query("SELECT email, pass, Role FROM register WHERE email = '".$email."' AND pass = '".$pass."'");
            
           // echo "<br>Returned result " .$ins->num_rows;
            if($ins)
            {
                echo "<script>alert('Login Successful'); </script>";
                ?>
                <script>
                    window.location.href= "../public/dash/";
                </script>
                <?php
            } else {
                echo "<script>alert('Invalid Login / Password');</script>";
            }
        }
    }
    //echo $test;
    ?>
</body>

</html>
