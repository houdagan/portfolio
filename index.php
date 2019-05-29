<?php 
  include"config.php";
  include 'dashboard/Admin/db.php';
  require 'dashboard/Admin/session.php';
Session::start();
$select = $db->query('SELECT id_poject, description, urlgit, image FROM projet');
$items = $select->fetchAll();
$first_order = 2;
$seconde_order = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio Houda Gangaffou">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,youcode,portfolio,2019">
    <title><?php echo $lang['title']; ?></title>
    <link rel="icon" href="img/log.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/typed.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">

            <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar">
            </div>

        </div>
    </div>
    <!-- ./Preloader -->

    <!-- header -->
    <header class="navbar-fixed-top navbar navbar-expand-md navbar-dark navbar-light ">
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        <nav class="nav">

            <ul class="nav-links">
                <li><a href="#about"><?php echo $lang['about']; ?></a></li>
                <li><a href="#experience"><?php echo $lang['experience']; ?></a></li>
                <li><a href="#skill"><?php echo $lang['skill'] ;?></a></li>
                <li><a href="#projects"><?php echo $lang['projects'] ;?></a></li>
                <li><a href="#contact"><?php echo $lang['contact'] ;?></a></li>
                <li><a href="dashboard/login.php"><?php echo $lang['login'] ;  ?></a></li>
            </ul>
        </nav>
    </header>
    <!-- ./header -->

    <!-- home -->
    <div class="section" id="home" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="disply-table">
                <div class="table-cell" data-aos="fade-up" data-aos-delay="0">
                    <h4>Houda Gangaffou</h4>

                    <h1 class="type"></h1>

                </div>
            </div>
        </div>

    </div>
    <!-- typed -->
    <script type="text/javascript">
    var typed = new Typed(".type", {
        strings: ["<?php echo $lang['Frontend']; ?>", "<?php echo $lang['website']; ?>"],
        typeSpeed: 50,
        backSpeed: 50,
        loop: true // Default value
    });
    </script>
    <!-- /typed -->



    <!-- ./home -->

    <!-- about -->

    <div class="section" id="about">
        <div class="container">
            <div class="col-md-6" data-aos="fade-up">

                <h1><?php echo $lang['Aboutm']; ?></h1>
                <div class="h-50"></div>
                <p><?php echo $lang['Descp1']; ?></p>
                <p><?php echo $lang['Descp2']; ?></p>

                <div class="h-50"></div>
                <div class="h-50"></div>


            </div>
            <div class="image">
                <div class="col-md-6 about-img-div">
                    <img src="img/pexels.png" width="300" class="img-responsive" alt="" align="right"
                        data-aos="fade-right" data-aos-delay="0" />
                </div>
            </div>
        </div>
    </div>
    <!-- ./about -->

    <!-- experience  -->
    <div class="section" id="experience">
        <div class="container">
            <div class="col-md-12">
                <h1><?php echo $lang['my']; ?> <br /><?php echo $lang['Experience']; ?> </h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-12">
                <ul class="timeline">
                    <li class="timeline-event" data-aos="fade-up">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail"><?php echo $lang['February']; ?> 2019</p>
                            <h3><?php echo $lang['h3-1']; ?></h3>
                            <h4><?php echo $lang['h4-1']; ?></h4>
                            <p> <?php echo $lang['Ex1']; ?></p>

                        </div>
                    </li>
                    <li class="timeline-event" data-aos="fade-up">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail"><?php echo $lang['nov']; ?> 2018</p>
                            <h4><?php echo $lang['h4-2']; ?></h4>
                            <p><?php echo $lang['Ex2']; ?></p>
                        </div>
                    </li>
                    <li class="timeline-event" data-aos="fade-up" data-aos-delay=".2">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail"><?php echo $lang['avr']; ?> 2018</p>
                            <h3><?php echo $lang['h3-3']; ?> </h3>
                            <h4><?php echo $lang['h4-3']; ?></h4>
                            <p><?php echo $lang['Ex3']; ?></p>
                        </div>
                    </li>
                    <li class="timeline-event" data-aos="fade-up" data-aos-delay=".4">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail"><?php echo $lang['Mars']; ?> 2018 –
                                <?php echo $lang['avr4']; ?> 2018 </p>
                            <h3> <?php echo $lang['h3-4']; ?></h3>
                            <h4> <?php echo $lang['h4-4']; ?></h4>
                            <p><?php echo $lang['Ex4']; ?>
                                <br><?php echo $lang['Ex5']; ?></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./experience -->
    <!--skill-->

    <section id="abou" class="about-mf sect-pt4 route">
        <div class="section" id="skill">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="skill-mf">

                                        <h1 class="title-s"><?php echo $lang['skill'] ;?></h1>
                                        <span>HTML</span> <span class="pull-right">85%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>CSS3</span> <span class="pull-right">75%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>SQL SERVER</span> <span class="pull-right">80%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>JAVASCRIPT</span> <span class="pull-right">55%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 55%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>PHP</span> <span class="pull-right">45%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Trello</span> <span class="pull-right">55%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 55%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="imag">
                                    <div class="col-md-6">
                                        <div class="about-me pt-4 pt-md-0">
                                            <div class="col-md-6 about-img-div">
                                                <div class="abou-border" data-aos="fade-up" data-aos-delay=".5"></div>
                                                <img src="img/coding.jpg" class="img-responsive" alt="" algin="right"
                                                    data-aos="fade-right" data-aos-delay="0" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--skill-->

    <!-- projects -->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="section" id="projects">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="title-s"><?php echo $lang['pro'] ;?></h1>
                        <div class="line-mf"></div>
                    </div>
                </div>

                <div class="row">
                    <?php foreach($items as $item):?>
                    <div class="col-md-4">
                        <div class="work-box">
                            <div class="work-img">
                                <a href="<?=$item['urlgit']; ?>" target="_blank"> <img
                                        src="img/portfolio/<?=$item['image'];?>" alt="" class="img-fluid"></a>
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="w-title"><?=$item['description']; ?>.</h4>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <?php 
            if($first_order == 2 && $seconde_order == 1){
                $first_order = 1;
                $seconde_order = 2;
            }else{
                $first_order = 2;
                $seconde_order = 1;
            }
            endforeach;?>



                </div>
            </div>
        </div>
    </section>

    <!-- ./projects -->

    <!-- contact -->
    <div class="section" id="contact">
        <div class="container">
            <div class="col-md-12">
                <h1 class="size-50"><?php echo $lang['contme'] ;?></h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <h3><?php echo $lang['phone'] ;?></h3>
                <p>+212 0644126246</p>
                <h3><?php echo $lang['email'] ;?></h3>
                <p>houdagn1@gmail.com</p>

                <h3><?php echo $lang['social'] ;?></h3>

                <ul class="social">
                    <li><a href="https://www.linkedin.com/in/houda-gangaffou-432895173/"><i
                                class="ion-social-linkedin"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="https://github.com/houdagan"><i class="ion-social-github"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <div class="h-50"></div>

            </div>
            <div class="col-md-8" data-aos="fade-up">
                <form class="contact-bg" id="contact-form" name="contact" method="post" novalidate="novalidate">
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $lang['Yname'] ;?>"
                        onfocus="this.value=''" />
                    <input type="email" name="email" class="form-control" placeholder="<?php echo $lang['Yemail'] ;?> "
                        onfocus="this.value=''" />
                    <input type="text" name="phone" class="form-control" placeholder="<?php echo $lang['Yphone'] ;?>"
                        onfocus="this.value=''" />
                    <textarea name="message" class="form-control" placeholder="<?php echo $lang['Ymessage'] ;?>"
                        style="height:120px" onfocus="this.value=''"></textarea>
                    <button id="submit" type="submit" name="submit"
                        class="btn btn-glance"><?php echo $lang['send'] ;?></button>
                    <div id="success">
                        <p class="green textcenter"><?php echo $lang['message'] ;?> </p>
                    </div>
                    <div id="error">
                        <p><?php echo $lang['messageEror'];?> </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="fot">
            <p><a href="index.php?lang=en"><img src="languages/eng.png" width="18px" height="15px"></a>|<a
                    href="index.php?lang=fr"><img src="languages/france.png" width="18px" height="15px"></a></p>
        </div>
    </footer>

    <!-- ./contact -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!--  plugins  -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>

    <!--  main script  -->
    <script src="js/custom.js"></script>
    <script src="js/app.js"></script>

</body>

</html>