<?php 
include 'db.php';
require 'session.php';
Session::start();

$select = $db->query("SELECT id_poject, description, urlgit, image  FROM projet");
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
    <style>
        .main {
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin:5rem 5rem 5rem 5rem ;
        }
        .imgstyle{
            width:200px;
           
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

    <main class="main">

        <table class="table" border="1">
            <thead style="background-color: #2b96e4">
                <th>id poject</th>
                <th>Description </th>
                <th>URL Github</th>
                <th>Image</th>
            </thead>

            <tbody>
                <?php foreach($items as $item):?>
                <tr>
                    <td><?= $item['id_poject'];?></td>
                    <td><?= $item['description'];?></td>
                    <td><?= $item['urlgit'];?></td>
                    <td class="d-flex justify-content-center mt-2"><img class="imgstyle" src="../../img/portfolio/<?= $item['image'];?>" alt=""></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <!-- FOOTER -->
        <footer class="container">
            <p>&copy; 2018-2019 &middot;</p>
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