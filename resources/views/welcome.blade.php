<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="Gn5Tce0xf04HJAc1eA8aPwmckHNerW6VirrnO8hk">
    <title>
            Laravel Home
    </title>

    <!-- Import Css -->
    <link rel="stylesheet" href="http://doctor.local/dashboard/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://doctor.local/dashboard/css/icons.css">
    <link rel="stylesheet" href="http://doctor.local/dashboard/css/style.css">
    <link rel="stylesheet" href="http://doctor.local/dashboard/css/animate.css">
    <link rel="stylesheet" href="http://doctor.local/dashboard/css/dashboard.css">
</head>


<body class="account-pages">

<div class="close-layer" id="closeLayer" style="display: none;"></div>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <a class="navbar-brand mobile" href="#">Dr.Assistant</a>
        <button class="navbar-toggler" type="button">
            <span class="fa fa-bars"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="http://doctor.local"> <i class="fa fa-home fa-lg"></i> &nbsp; Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="http://doctor.local/appointment"> <i class="fa fa-calendar"></i> &nbsp; Appointment</a>
                </li>
            </ul>
                        <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="http://doctor.local/register"><i class="fa fa-user-plus fa-lg"></i> &nbsp; Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="http://doctor.local/login"><i class="fa fa-sign-in fa-lg"> </i> &nbsp; Login</a>
                </li>
            </ul>
                    </div>
            </nav>
</div>
;

    <style>
        .text-center > h1,h2,h3,h4,p{
            color: #fff;
        }

    </style>
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <img height="400px" src="" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-6" style="padding-top: 56px;">
                <div class="text-center">
                    <h2>mohamed</h2>
                    <p>
                        
                    </p>
                </div>
            </div>
           <div class="col-md-12" style="padding-top: 85px;">
               <div class="card-box">
                   <div class="panel-heading">
                       <h4 class="text-center"><strong>About Me</strong></h4>
                   </div>
                   <div class="card-content" style="padding-top: 25px;">
                       <center>
                           Demo About
                       </center>
                   </div>

               </div>
           </div>
        </div>
        <div style="padding: 100px"></div>
    </div>





<script>
    var resizefunc = [];
</script>
<script src="http://doctor.local/dashboard/js/jquery.min.js"></script>
<!-- Bootstrap plugins -->
<script src="http://doctor.local/dashboard/js/popper.min.js"></script>
<script src="http://doctor.local/dashboard/js/bootstrap.min.js"></script>
<script>
    var mobile_menu_open = 0;

    $(document).ready(function () {
        $("#closeLayer").hide();
        $(".navbar-toggler").on('click', function () {
            if (mobile_menu_open == 0) {
                mobile_menu_open = 1;
                $("#navbarSupportedContent").addClass('show');
                $("#closeLayer").show();
                $(".navbar").css('margin-right','172px');
            } else {
                mobile_menu_open = 0;
                $("#navbarSupportedContent").removeClass('show');
                $("#closeLayer").hide();
                $(".navbar").css('margin-right','0px');
            }
        });

        $("#closeLayer").on('click', function () {
            mobile_menu_open = 0;
            $("#navbarSupportedContent").removeClass('show');
            $("#closeLayer").hide();
            $(".navbar").css('margin-right','0px');

        });
    });
</script>

</body></html>