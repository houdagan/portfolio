<?php 
include 'db.php';
require 'session.php';
Session::start();
Session::set('id_item_edit',$_GET['id_poject']);
if($_SERVER['REQUEST_METHOD'] == "POST"){ 

    /** Traitement Table Work */
        try{
            if(isset($_POST['description'])  && isset($_POST['urlgit']) && isset($_POST['image']) ){
                $id_poject = Session::get('id_item_edit');
                $description = $db->quote($_POST['description']);
                $urlgit = $_POST['urlgit'];
                $image = $_POST['image'];
                
               
                if(!empty($image)){
                    $query = "update projet set description=$description,urlgit='$urlgit',image='$image' where id_poject=$id_poject";

                }else{
                    $query = "update items set projet set description=$description,urlgit='$urlgit' where id_poject=$id_poject";

                }
                $msg=$query;
                $select = $db->query($query);
                if(!empty($select)){
                    header('Location:edit.php');                
                } else {
                    $msg="Error Work";
                }
            }
        }catch(Exception $e){
            $msg ='Exception Work';
        }
        /***************** */

        
       
}
$select = $db->query('SELECT id_poject,description,urlgit,image FROM projet where id_poject = '.Session::get('id_item_edit'));
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
        #imageWorks {
            width: 45% !important;
        }
        .input {
            background-color: transparent;
            border: 0px solid;
            height: 20px;
            width: 160px;
            color: #CCC;
        }
        .tdImg{
            display :grid;
            grid-template-columns: auto auto ;
            align-items: center;
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
                        <a class="nav-link" href="view.php">View </a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <a href="logout.php" class="nav-item active"> logout</a>
                </form>
            </div>

        </nav>
        

    </header>

    <main class="main" style="margin-top:4rem;">
    <?php foreach($items as $item):?>

    <div class="container">
            <div class="row">
                <form method="POST" action="">
                <!--  <p><?php echo($msg);?></p> --> 
                    
                    
                    <div class="form-group">
                        <label for="description_">Description</label>
                        <textarea type="text" class="form-control" id="description_" name="description" aria-describedby="description_c"
                            placeholder="description "><?=$item['description']; ?></textarea>
                        <small id="description_c" class="form-text text-muted">
                            </small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="bref_des" name="urlgit" value="<?=$item['urlgit']; ?>" aria-describedby="bref_desc"
                            placeholder="urlgit">
                        <small id="bref_desc" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group tdImg">
                        <img id="imageWorks" src="../../img/portfolio/<?=$item['image']; ?>" alt="">
                        <input class="input" type="file" name="image" value="C:\xampp\htdocs\php-course\porte\img\portfolio<?=$item['image']; ?>">   
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>
            <?php endforeach;?>


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