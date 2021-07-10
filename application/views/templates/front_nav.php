<style>
    .btn-primary,
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary:visited {
        background-color: #348ceb !important;
    }

    ,
    .footer {
        clear: both;
        position: relative;
        height: 200px;
        margin-top: -200px;
    }

    .navbar {
        transition: all 0.4s;
        box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
    }


    .navbar .nav-link {
        color: #3b64c4;
    }

    .navbar .nav-link:hover,
    .navbar .nav-link:focus {
        color: #3b64c4;
        text-decoration: none;
    }

    .navbar .navbar-brand {
        color: #fff;
    }


    /* Change navbar styling on scroll */
    .navbar.active {
        background: #fff;
        box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar.active .nav-link {
        color: #000000;
    }

    .navbar.active .nav-link:hover,
    .navbar.active .nav-link:focus {
        color: #000000;
        text-decoration: none;
    }

    .navbar.active .navbar-brand {
        color: #000000;
    }

    .nav-link .text-uppercase .font-weight-bold {
        color: #000000;
    }
</style>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPK</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/js/bootstrap.min.js') ?>" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/logo5.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?= base_url('/') ?>" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="<?= base_url('about') ?>" class="nav-link text-uppercase font-weight-bold">About</a></li>
                    <li class="nav-item"><a href="<?= base_url('faqs') ?>" class="nav-link text-uppercase font-weight-bold">FAQs</a></li>
                    <li class="nav-item"><a href="<?= base_url('contact') ?>" class="nav-link text-uppercase font-weight-bold">contact</a></li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!--- End Navigation -->
<script>
    $(function() {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 10) {
                $('.navbar').addClass('active');
            } else {
                $('.navbar').removeClass('active');
            }
        });
    });
</script>