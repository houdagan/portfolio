<?php include 'Admin/db.php'; ?>
<?php 
    require 'Admin/session.php';
    Session::start();
    /**Traitement du formulaire */
     
   
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {   
        try{
            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $db->quote($_POST['username']);
                $password = $db->quote($_POST['password']);
                $select = $db->query("select * from user where username = $username and password = $password");
                
                if($select->rowCount() > 0){
                    Session::set('auth',$select->fetch());
                    header('location:Admin/view.php');
                    die;
                }else{
                   echo('Thies is some errors');
                }
            }
        }catch(Exception $e){
            // echo('Exception');
        }
       
    }  
    // else{
    //     echo('Thies is some errors');
    // }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="css/login.css" rel="stylesheet">
    <link rel="icon" href="../img/favicon.png" >
    <title>Login</title>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="../img/favicon.png" id="icon" alt="User Icon" width="20px" />
            </div>

            <!-- Login Form -->
            <form action="<?php echo $_SERVER["PHP_SELF"]?> " METHOD="POST">
                <input type="text" id="username" class="fadeIn second" name="username" placeholder="login">
                <!-- <div class="form-group">
                    <input type="password" class="form-control fadeIn third" name="password" placeholder="Your Password *" value="" />
                </div> -->
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">
                <input type="button" class="fadeIn fourth"value="Sign UP" onclick="push()">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>

    

    </div>
    <script>
        /**  Push to page Using Stack */
            function push(){
                document.location.href = 'signup.php';
            }
        /**************** */
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>