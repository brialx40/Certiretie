<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Certiretie.Ltda</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2  
         <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        -->
        <link href="../css/teme2/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" />

        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="../css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="../css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="../css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="../css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->

        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <a class="logo"  style=" background-image: url('../img/logo.png'); " ></a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                
            </nav>
        </header>
        <br/>

        <div class="col-md-2"></div>
        <!-- Buscar Section -->
        <div id='contenedor' class='box_round col-md-8'>
        <center>            
           <form method='POST' accept-charset="UTF-8">
                
                    <legend><h1><b>NUESTRAS SUCURSALES</b></h1></legend>

                     <H2><b><p align="justify">CUCUTA  </p></b></H2>

                   <p align="justify">Dirección: Calle 1N  # 7E – 15 Barrio Quinta Bosch</p>
                                <p align="justify">Teléf. -  Fax:  7 - 5743841  </p> 
                                <p align="justify">Cel. 311 2655589</p>
                                <p align="justify"> Email:  certiretie@gmail.com</p>
                                
                                
    <p align="justify"><a href="https://www.google.es/maps/@7.89941,-72.494688,3a,75y,182.54h,72.26t/data=!3m4!1e1!3m2!1sxfIlTebHznF5Z2PQ_ETkuQ!2e0"><strong>ver Imagen</strong></a></p> 
    <div id="controls">
                    
        <input type="button" name="showMap" value="Ver Localizacion" id="showMap" />    </div>  

              


      

            </form>
            <hr>

                        <div style='clear:both'></div>
        </center>
        </div>
        <!-- End Buscar Section -->
        <div class="col-md-8"></div>



    </body>  
 <script src="../js/funciones.js"></script>
 <script src="../js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="../js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>

        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resize a Google Map in jQuery dialog box by MPS</title>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"  type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"  type="text/javascript"></script>

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/ui-darkness/jquery-ui.css" />
<style>
    .gBubble
    {
        color:black;
        font-family:Tahoma, Geneva, sans-serif;
        font-size:12px;    
    }
</style>
<script>
    var map;
    var coords = new Object();
    var markersArray = [];
    coords.lat = 7.89941;
    coords.lng = -72.494688;
    
    $(document).ready(function() 
    {
        
        $( "#map_container" ).dialog({
            autoOpen:false,
            width: 800,
            height: 400,
            resizeStop: function(event, ui) {
              // mantengo el centro del mapa
              lastCenter=map.getCenter(); 
              google.maps.event.trigger(map, 'resize')  
              map.setCenter(lastCenter); 
              },
            open: function(event, ui) {
              lastCenter=map.getCenter(); 
              google.maps.event.trigger(map, 'resize');
              map.setCenter(lastCenter); 
               }      
        });  

        $( "#showMap" ).click(function() {           
            $( "#map_container" ).dialog( "open" );
            $( "#controls" ).hide();
            map.setCenter(new google.maps.LatLng(coords.lat, coords.lng), 10);
            return false;
            
        });   
       $( "#map_container" ).dialog({
           close: function( event, ui ) {
            $( "#controls" ).show();
                 return false;
            
            }
       });  
 
         
        $(  "input:submit,input:button, a, button", "#controls" ).button();
          initialize();
          plotPoint(coords.lat,coords.lng,'Calle 1N  # 7E – 15 Barrio Quinta Bosch','<span class="gBubble"><b>Certiretie Ltda</b><br>Inspecciones electricas</span>');
    });

    function plotPoint(srcLat,srcLon,title,popUpContent,markerIcon)
    {
            var myLatlng = new google.maps.LatLng(srcLat, srcLon);            
            var marker = new google.maps.Marker({
                  position: myLatlng, 
                  map: map, 
                  title:title,
                  icon: markerIcon
              });
              markersArray.push(marker);
            var infowindow = new google.maps.InfoWindow({
                content: popUpContent
            });
              google.maps.event.addListener(marker, 'click', function() {
              infowindow.open(map,marker);
            });                                          
    }
    function initialize() 
    {      
    
        var latlng = new google.maps.LatLng(coords.lat, coords.lng);
        var myOptions = {
          zoom: 15,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
       map = new google.maps.Map(document.getElementById("map_canvas"),  myOptions);                         
    }        
</script>
</head>

<body>
    <div id="map_container" title=" Mapa reajustable">    
        <div id="map_canvas" style="width:100%;height:100%;"></div>
    </div>
    
    
</body>



</html>
</html>     