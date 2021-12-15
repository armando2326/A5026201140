<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

    <style>
    @font-face {
        font-family: 'Glyphicons Halflings';
        src: url('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/fonts/glyphicons-halflings-regular.eot');
        src: url('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),
            url('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/fonts/glyphicons-halflings-regular.woff2') format('woff2'),
            url('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/fonts/glyphicons-halflings-regular.woff') format('woff'),
            url('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/fonts/glyphicons-halflings-regular.ttf') format('truetype'),
            url('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
    }

    .glyphicon {
        position: relative;
        top: 1px;
        display: inline-block;
        font: normal normal 16px/1 'Glyphicons Halflings';
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        margin-right: 4px;
    }

    /* Add icons you will be using below */
    .glyphicon-time:before {
        content: '\e023';
    }

    .glyphicon-calendar:before {
        content: '\e109';
    }

    .input-group-addon{
        padding-left: 12px;
        padding-right: 8px;
        padding-top: 8px;
        border-radius: 0 3px 3px 0;
        color:#333333;
        background-color:#ececec;
    }

    .vertical-nav {
        min-width: 17rem;
        width: 17rem;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.4s;
    }

    .page-content {
        width: calc(100% - 17rem);
        margin-left: 17rem;
        transition: all 0.4s;
    }

    .footer {
        bottom: 0;
    }

    .header {
        top: 0;
    }

    #sidebar {
        margin-left: -17rem;
    }

    #content {
        width: 100%;
        margin: 0;
    }

    #sidebar.active {
        margin-left: 0;
    }

    #content.active {
        margin-left: 17rem;
        width: calc(100% - 17rem);
    }

    @media (max-width: 768px) {
        #sidebar {
            margin-left: -17rem;
        }
        #sidebar.active {
            margin-left: 0;
        }
        #content {
            width: 100%;
            margin: 0;
        }
        #content.active {
            margin-left: 17rem;
            width: calc(100% - 17rem);
        }
    }

    body {
        font-family: 'Readex Pro', sans-serif;
        background: #845EC2;
        background: -webkit-linear-gradient(to right, #845EC2, #2C73D2, #0081CF, #0089BA, #008E9B, #008F7A);
        background: linear-gradient(to top right, #845EC2, #2C73D2, #0081CF, #0089BA, #008E9B, #008F7A);
        min-height: 100vh;
        overflow-x: hidden;
    }

    .card {
        border-radius: 25px;
        box-shadow: 7px 7px 10px 5px rgba(0, 0, 0, 0.05);
    }

    h3 {
        text-align: center;
    }

    td, th {
        padding: 10px;
        text-align: center;
    }

    .nav-item a{
        font-weight: 500;
        color: black;
        border-radius: 10px;
    }

    .nav-item a:hover{
        color: #02b499;
        background-color: #eff5fd;
    }

    </style>

</head>

<body>
    <!-- Side Menu -->
    <div class="vertical-nav bg-white px-2" id="sidebar">

        <h4 class="mt-4 py-2 mb-3 px-3"><b>LIST TUGAS DAN PRAKTIKUM</b></h4>

        <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="/pegawai" class="nav-link">
                    Pegawai
                </a>
        </li>
        <li class="nav-item">
            <a href="/absen" class="nav-link">
                    Absen
                </a>
        </li>
        <li class="nav-item">
            <a href="/tugas" class="nav-link">
                    Tugas (Query Builder)
                </a>
        </li>
        <!--<li class="nav-item">
            <a href="/pendapatan" class="nav-link">
                    Pendapatan
                </a>
        </li>-->
        <li class="nav-item">
            <a href="/bolpen" class="nav-link">
                    Bolpen
                </a>
        </li>
        <li class="nav-item">
            <a href="/karyawan1" class="nav-link">
                    Karyawan (EAS)
                </a>
        </li>
        </ul>
    </div>

    <script>
        $(function() {
            //toggle
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
            });
        });
    </script>
    <!--Batas Side menu -->

    <!--Header-->
    <div class="page-content header" id="content">
        <div class="py-4 px-3 bg-light">
            <div class="media d-flex align-items-center">
                <button id="sidebarCollapse" type="button" class="btn btn-light rounded-pill shadow mt-1 ml-4 px-4 mb-2" style="position: fixed;">
                    <i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small>
                </button>
                <div class="media-body" style="text-align: right;">
                    <h4 class="m-0">Muhammad Armando Nur Rizqy Ansar</h4>
                    <p class="font-weight-light text-muted mb-0">NRP 5026201140</p>
                </div>
                <img src="/images/profile-photo.png" alt="..." width="65" class="ml-4 mr-1 rounded-circle img-thumbnail shadow-sm">
            </div>
        </div>
    </div>
    <!--Batas Header-->

    <!-- Content -->
    <div class="page-content p-5" style="min-height: calc(100vh - 159px);" id="content">
        <div class="row justify-content-center no-gutters">
            <div class="col-sm-8">
                <div class="card mt-5 p-sm-5">

                    <h3>@yield('judulhalaman')</h3>
                    <br>
                    @section('content')

                    @show

                </div>
            </div>
        </div>
    </div>

     <!--Footer-->
     <div class="page-content footer" id="content">
        <div class="py-3 bg-light">
            <div class="media d-flex align-items-center">
                <div class="media-body">
                    <p class="font-weight-light text-muted mb-0" style="font-size: 7pt; text-align: center;">Hak Cipta oleh
                NRP 5026201140 - Muhammad Armando Nur Rizqy Ansar</p>
                </div>
            </div>
        </div>
    </div>
    <!--Batas Footer-->
</body>

</html>
