<?php 
include 'db.php';
require 'session.php';
Session::start();

if($_SERVER['REQUEST_METHOD'] == "POST"){ 

    /** Traitement Table Work */
        try{
            if(isset($_POST['description']) && isset($_POST['urlgit']) &&  isset($_POST['image'])){
                $description = $db->quote($_POST['description']);
                $urlgit = $db->quote($_POST['urlgit']);
                $image = $db->quote($_POST['image']);
                $query = "INSERT INTO projet( description, urlgit, image) VALUES ($description,$urlgit,$image)";
                $select = $db->query($query);
                if(!empty($select)){
                    header('Location:view.php');                
                } else {
                    $msg="Error Work";
                }
            }
        }catch(Exception $e){
            $msg ='Exception Work';
        }
        /***************** */

        
       
}else{
    $msg ='Erreur POST';
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="../css/styles.css" rel="stylesheet">
<style>
    .main {

            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;     
        }
        form{
            margin-left: 400px;
            margin-top: 50px;
        }
        a{
            color: white;
        }
</style>
</head>

<body class="p-0">

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-light" style="background-color: #666666 ">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a class="nav-link active" href="view.php">view</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="add.php">Add Project</a>
                    </li>
                   <li class="nav-item">
                        <a class="nav-link active" href="delete.php">Delete</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="edit.php">Update</a>
                    </li>
                    
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <a href="logout.php" class="nav-link active"> logout</a>
                </form>
            </div>

        </nav>


    </header>

    <main class="main">

             <h1 class="center" style="color: #2b96e4 ">add a project </h1>
        <div class="container">
            <div class="row">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="description_">Description</label>
                        <textarea type="text" class="form-control" id="description_" name="description" aria-describedby="description_c"
                            placeholder="description"></textarea>
                        <small id="description_c" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="prix_">URL GIThub</label>
                        <input type="text" class="form-control" id="prix_"  name="urlgit" aria-describedby="prix_c"
                            placeholder="URL GIThub">
                        <small id="prix_c" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="container">
            
        </footer>
    </main>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>