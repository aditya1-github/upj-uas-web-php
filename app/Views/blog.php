<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>Website | PT Angin Ribut Sejahtera</title>

    <link rel="shortcut icon" href="<?= base_url() ?>/template/assets/images/s4.jpg">

    <!-- Bootstrap -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
    <!-- Icon font -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/styles.css">

    <!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>

<body>

    <header id="header">
        <div id="head" class="parallax" parallax-speed="1">
            <h1 id="logo" class="text-center">
                <img class="img-circle" src="<?= base_url() ?>/template/assets/images/s4.jpg" alt="">
                <span class="title">PT ANGIN RIBUT SEJAHTERA</span>
                <span class="tagline">UNIVERSITAS PEMBANGUNAN JAYA</span>
            </h1>
        </div>

        <nav class="navbar navbar-default navbar-sticky">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>

                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">
                        <li><a href="<?= base_url() ?>/Home">Home</a></li>
                        <li><a href="<?= base_url() ?>/Aboutus">About</a></li>
                        <li class="active"><a href="<?= base_url() ?>/Blog">Blog</a></li>
                    </ul>

                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>

    <main id="main">

        <div class="container">
            <div class="row topspace">
                <div class="col-sm-8 col-sm-offset-2">

                    <article class="post">
                        <header class="entry-header">
                            <div class="entry-meta">
                                <span class="posted-on"><time class="entry-date published" date="2013-09-27">September 27, 2032</time></span>
                            </div>
                            <h1 class="entry-title"><a href="<?= base_url() ?>/Blog/Artikel" rel="bookmark">Hello world!</a></h1>
                        </header>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, molestias, architecto, adipisci, numquam dolor iusto eos reprehenderit placeat quam debitis quas magni eveniet. Saepe, nam, iste consectetur quae necessitatibus dolores provident veritatis possimus rerum facilis quia dicta itaque sapiente iusto natus quidem magni quibusdam. Explicabo nesciunt vel rem obcaecati reprehenderit eveniet culpa repudiandae. Distinctio, quia, provident illum necessitatibus repellendus rem voluptates exercitationem numquam inventore itaque atque sint nihil eveniet consequuntur eius! Laborum, at sit animi quae quidem ex tempora facilis.</p>
                        </div>
                    </article>




                </div> <!-- /container -->

    </main>

    <footer id="footer" class="topspace">
        <div class="container">
            <div class="row">
                <div class="col-md-3 widget">
                    <h3 class="widget-title">Contact</h3>
                    <div class="widget-body">
                        <p>+62 856 66889900<br>
                            <a href="mailto:#">ngopi@somewhere.com</a><br>
                            <br>
                            Jalan Cinta, RT 5 RW 3, 10 Nomor Rumahku
                        </p>
                    </div>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Follow me</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons">
                            <a href=""><i class="fa fa-twitter fa-2"></i></a>
                            <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                            <a href=""><i class="fa fa-github fa-2"></i></a>
                            <a href=""><i class="fa fa-facebook fa-2"></i></a>
                        </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </footer>

    <footer id="underfooter">
        <div class="container">
            <div class="row">

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; 2014, Your awesome name here<br>
                            Design: <a href="http://www.gettemplate.com" rel="designer">Initio by GetTemplate</a> </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </footer>



    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/template.js"></script>
</body>

</html>