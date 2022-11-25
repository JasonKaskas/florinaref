<?php
if(isset($_GET['ID'])){
    
    require 'connect.php';
    $ID = mysqli_real_escape_string($dbc, $_GET['ID']);
    
    $sql = "SELECT * FROM search WHERE id = '$ID'";
    $result = mysqli_query($dbc, $sql) or die ("Bad Quary: $sql");
    $row = mysqli_fetch_array($result);
} else {
    header('index.php');
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Οι πρόσφυγες του &amp;apos;22 στη Φλώρινα, Αναλυτικές πληροφ​ορίες, (όνομα)">
    <meta name="description" content="">
    <title>Καρτέλα πρόσφυγα</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="details.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="details">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-xl-mode" data-lang="en">
    <section class="u-clearfix u-section-1" id="carousel_b840">
      
      
      
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-hover-feature u-text u-text-1">ΟΙ ΠΡΟΣΦΥΓΕΣ ΤΟΥ 1922 ΣΤΗ ΦΛΩΡΙΝΑ</h1>
        <img class="u-hover-feature u-image u-image-circle u-image-contain u-preserve-proportions u-image-1" src="images/bridge-modified.png" alt="" data-image-width="1269" data-image-height="1269">
        <h2 class="u-align-center u-custom-font u-font-raleway u-hover-feature u-text u-text-2">Καρτέλα πρόσφυγα</h2>
        <a href="index.php" class="u-border-2 u-border-hover-palette-3-light-2 u-border-palette-3-light-2 u-btn u-btn-round u-button-style u-hover-palette-3-light-2 u-none u-radius-50 u-text-body-color u-btn-1"><span class="u-file-icon u-icon"><img src="images/507257.png" alt=""></span>&nbsp;Πίσω
        </a>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-grey-5 u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1"><span class="u-file-icon u-icon u-icon-2"><img src="images/561845.png" alt=""></span>
                  <h1 class="u-custom-font u-font-raleway u-text u-text-default u-text-3"><?php echo $row['Name'] ?></h1>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-4"><b>Επίθετο: </b><?php echo $row['Description'] ?>
                  </h6>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-5"><b>Οικισμός προέλευσης: </b><?php echo $row['Οικισμός_προέλευσης'] ?>
                  </h6>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-6"><b>Φύλο:</b><?php echo $row['Φύλο'] ?>
                    <br>
                  </h6>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-7"><b>Πατρώνυμο Όνομα συζύγου: </b><?php echo $row['ΠατρώνυμοΌνομα_συζύγου'] ?>
                    <br>
                  </h6>
                  <div class="u-expanded-width u-list u-list-1">
                    <div class="u-repeater u-repeater-1"></div>
                  </div>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-8"><b>Μητρόπολη προέλευσης: </b><?php echo $row['Μητρόπολη_προέλευσης'] ?>
                    <br>
                  </h6>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-9"><b>Κοντινή πόλη προέλευσης: </b><?php echo $row['Κοντινή_πόλη_προέλευσης'] ?>
                    <br>
                  </h6>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-10"><b>Περιοχή προέλευσης: </b><?php echo $row['Περιοχή_προέλευσης'] ?>
                    <br>
                  </h6>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-11"><b>Αριθμός δήλωσης: </b><?php echo $row['Αριθμός_δήλωσης'] ?>
                    <br>
                  </h6>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-12"><b>Συμπληρωματικός αριθμός: </b><?php echo $row['Συμπληρωματικός_αριθμός'] ?>
                    
                    <br>
                  </h6>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-13"><b>Κατάσταση πρόσφυγα: </b><?php echo $row['Κατάσταση_πρόσφυγα'] ?>
                  
                    <br>
                  </h6>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-14"><b>Οικισμός εγκατάστασης: </b><?php echo $row['Οικισμός_εγκατάστασης'] ?>
                    <br>
                  </h6>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-15"><b>Δήμος εγκατάστασης: </b><?php echo $row['Δήμος_εγκατάστασης'] ?>
                    <br>
                  </h6>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-16"><b>Είδος εγκατάστασης: </b><?php echo $row['Είδος_εγκατάστασης'] ?>
                    <br>
                  </h6>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-17"><b>Επώνυμο 2: </b><?php echo $row['Επώνυμο_2'] ?>
                    <br>
                  </h6>
                  <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-18"><b>Γένος: </b><?php echo $row['Γένος'] ?>
                    <br>
                  </h6>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2"></div>
                <div class="card" id ='map' style = 'width:100%; height:100%;'>
              </div>
            </div>
          </div>
        </div>
        <p class="u-align-center u-text u-text-default u-text-19">Εγκατάσταση<br>
        </p>
        <img class="u-image u-image-circle u-image-contain u-preserve-proportions u-image-2" src="images/icons8-blue-circle-48.png" alt="" data-image-width="48" data-image-height="48">
        <p class="u-align-center u-text u-text-default u-text-20">Προέλευση</p>
        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-3" src="images/icons8-red-circle-48.png" alt="" data-image-width="48" data-image-height="48">
      </div>
    </section>
    <?php
      $long = $row['Προέλευσημήκος'];
      $lat = $row['Προέλευσηπλάτος'];
      $longAr = $row['Εγκατάστασημήκος'];
      $latAr = $row['Εγκατάστασηπλάτος'];
      $origin = $row["Οικισμός_προέλευσης"];
      $where = $row["Οικισμός_εγκατάστασης"]
    ?>
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-d123"><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-1">Developed by Iason Kaskamanidis<br>©Copyright 2022 all rights reserved
        </p>
      </div></footer>
      <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
      <script>  
    var long = '<?= $long ?>';
    var lat = '<?= $lat ?>';
    var longAr = '<?= $longAr ?>';
    var latAr = '<?= $latAr ?>';
    var origin = '<?=$origin ?>';
    var where = '<?=$where ?>';
    let text = 'εδώ';
    let hyperlink = text.link("detailsorigins.php");
    
    let mapOptions = {
    center:[ lat , long ],
    zoom: 5
  }
 
 // Creating a map object document.getElementById("long") document.getElementById("lang")
 let map = new L.map('map', mapOptions);
 
 // Creating a Layer object
 let layer = new     L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
 
 // Adding layer to the map
 map.addLayer(layer);

  let customIcon = {
    iconUrl:"icons8-blue-circle-48.png",
    iconSize:[30 , 30]
  }
  let customIcon1 = {
    iconUrl:"icons8-red-circle-48.png",
    iconSize:[30 , 30]
  }

  let myIcon = L.icon(customIcon);
  let myIcon1 = L.icon(customIcon1);

  let IconOptions = {
    icon:myIcon,
  }
  let IconOptions1 = {
    icon:myIcon1,
  }


 let marker = new L.Marker([lat , long] , IconOptions);
 marker.addTo(map);
 let marker1 = new L.Marker([latAr , longAr] , IconOptions1);
 marker1.addTo(map);
 marker.bindPopup(origin).openPopup;
 marker1.bindPopup(where).openPopup;
</script>



    </body></html>