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
                    {{Form::input('text','location',null,['placeholder' => 'Search Your City','required' => 'required'])}}
                    <i class="fa fa-search"></i>
                    {{Form::close()}}
                </div>
                 
                {{Form::close()}}  
            </div>
        </div>
    </div>

    <div id="header">
        <!-- Sidebar -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">Stayzilla</a> -->
        </div>
        <div class="collapse navbar-collapse sidebar animate show" id="main-nav">
           <!--  <button class="animate"><i class="fa fa-navicon"></i></button> -->
            <!--<ul class="nav-actions">
                 <li class="text-right"><a class="animate" href="#"><i class="fa fa-long-arrow-left"></i></a></li> 
                 <li><a class="animate" href="#"><i class="fa fa-home"></i></a></li>
                <li><a class="animate" href="#"><i class="fa fa-search"></i></a></li> 
            </ul>-->
            <!-- <h3 class="nav-title">StayZilla</h3> -->

            <img src="img/5397Stayzilla-logo-400x243.jpg" class="img-responsive">
            <div class="nav-body">
                <div class="divider expander">
                    <h4><i class="fa fa-tasks"></i> MENU</h4>
                    <ul class="animate seen">
                        <li class="thin-divider"><a class="page-scroll" href="#line_chart">Line Chart</a></li>
                        <li class="thin-divider"><a class="page-scroll" href="#bar_chart">Bar Chart</a></li>
                        <li class="thin-divider"><a class="page-scroll" href="#area_chart_2">Area Chart 2</a></li>
                        <li class="thin-divider"><a class="page-scroll" href="#area_chart">Area Chart</a></li>
                        <li class="thin-divider"><a class="page-scroll" href="#location_search">Location Search</a></li>
                        <li><a class="page-scroll" href="#google_map">Google Maps</a></li>
                    </ul>
                </div>
                <!-- <div class="divider expander">
                    <h4><i class="fa fa-cog"></i> Analytics</h4>
                    <ul class="animate">
                        <li class="thin-divider">Charts</li>
                        <li class="thin-divider">Tables</li>
                        <li>Maps</li>
                    </ul>
                </div> -->
              
            </div>
        </div>
        <!-- End Sidebar -->
        <!-- Content -->
        <div class="content">
            <div class="row">
                <div class="col-sm-12" id="line_chart">
                    <section class="panel lazy">
                        <header class="panel-heading">
                            Line Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div id="graph-line" style="height: 250px;"></div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" id="bar_chart">
                    <section class="panel lazy">
                        <header class="panel-heading">
                            Bar Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div id="graph-bar" style="height: 250px;"></div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" id="area_chart_2">
                    <section class="panel lazy">
                        <header class="panel-heading">
                            Area Chart 2
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div id="graph-area" style="height: 250px;"></div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" id="area_chart">
                    <section class="panel lazy">
                        <header class="panel-heading">
                            Area Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div id="graph-area-line" style="height: 250px;"></div>
                        </div>
                    </section>
                </div>
                <div class="col-sm-6" id="location_search">
                    <section class="panel lazy">
                        <header class="panel-heading">
                            Donut Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div id="graph-donut" style="height: 250px;"></div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" id="google_map">
                    <section class="panel lazy">
                        <header class="panel-heading">
                            Google Map with Loaction List
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-cog"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                             </span>
                        </header>
                        <div class="panel-body google-map">

                            <div id="gmap-list" style="height:400px; width:100%;"></div>


                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
    <!-- snip -->
<div id="dom-tar" style="display: none;">
  <?php
  for($i = 0;$i < sizeof($chat_count);$i++)
  {
    echo $chat_count[$i] . " "; 
  }
  ?>
</div>

<div id="dom-get" style="display: none;">
  <?php
  for($i = 0;$i < sizeof($input);$i++)
  {
    echo $input[$i] . " "; 
  }
  ?>
</div>

<script>
    
    
</script>
<!-- snip -->

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