<?php 
include 'db.php';
require 'session.php';
Session::start();
$select = $db->query('SELECT id_poject, description, urlgit, image FROM projet ');
$items = $select->fetchAll();
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
    <link href="css/styles.css" rel="stylesheet">
    <link rel="icon" href="../Admin/img/favicon.png" >
    <style>
       .main{
         margin-top:5rem !important;
    }
        #imageWorks {
            width: 25% !important;
        }
        .input {
            background-color: transparent;
            border: 1px solid;
            height: 50px;
            width: 160px;
            color: #CCC;
        }
        a{
            color: white;
        }
    </style>
</head>

<body>

    <header>
         <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-light" style="background-color: #666666 ">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                    <a class="nav-link" href="view.php">view</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="add.php">Add Project</a>
                    </li>
                   <li class="nav-item active">
                        <a class="nav-link" href="delete.php">Delete</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="edit.php">Update</a>
                    </li>
                   
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <a href="logout.php" class="nav-item active"> logout</a>
                </form>
            </div>

        </nav>
        

    </header>
   
    <main class="main mt-5">

<div class="container">

        <div class="row">
        <table class="table" border="1">
             <thead style="background-color: #2b96e4">
                <th>id projet</th>
                <th>Description</th>
                <th>url github</th>
                <th>image</th>   
                
            </thead>
            <tbody>
            <?php foreach($items as $item):?>
            <tr id="<?=$item['id_poject']; ?>">
                <td><input class="input" name="id_poject" disabled value="<?=$item['id_poject']; ?>"></td>
                <td><?=$item['description']; ?></td>
                <td><?=$item['urlgit']; ?></td>
                <td><img id="imageWorks" src="../../img/portfolio/<?=$item['image']; ?>" alt="">
                <a href="firstEdit.php?id_poject=<?=$item['id_poject']; ?>" style="color: blue; padding-left: 100px" >Edit</a></td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
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