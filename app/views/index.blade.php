<!DOCTYPE html>
<html>
<head>
    <title>StayZilla - Mining Chat Logs</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="custom">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/morris-chart/morris.css">
</head>
<body>
    <div class="main_bannner">
        <div class="full_screen_overlay">
            <div class="main_logo">
                <img src="img/3vINzVas.png" class="img-responsive">
            </div>
            <div class="middle">
                <!-- <h1>Stayzilla <br> <small>Mining chat analytics application</small></h1> -->
                <!-- <button class="button btn-search-property" data-toggle="tooltip" data-placement="left" title="close">
                    Search Your City
                </button> -->
                {{Form::open(['route' => 'pages.show','class' => 'form banner-form'])}}
                <div class="form-group col-md-6 col-md-offset-3">
                    {{Form::input('text','location',null,['placeholder' => 'Bangalore','required' => 'required'])}}
                    <i class="fa fa-search"></i>
                    {{Form::close()}}
                </div>
                 
                {{Form::close()}}  
            </div>
        </div>
    </div>
    

    <!-- Scripts -->
    <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src ="dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/lazyload/lazyload.js"></script>

    <!--Google Map-->  
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.7"></script>
    <script src="assets/google-map/maplace.js"></script>
    <script src="assets/google-map/data/points.js"></script>

    <!--Morris Chart--> 
    <script src="assets/morris-chart/morris.js"></script>
    <script src="assets/morris-chart/raphael-min.js"></script>
    <script src="assets/morris/morris.init.js"></script>
      
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>-->

    <!-- Common Scripts -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>