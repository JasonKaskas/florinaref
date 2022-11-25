<?php

require_once 'connect.php';

$sql = "SELECT * FROM search";
$result = mysqli_query($dbc , $sql) or die ("Bad Query: $sql");
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Οι πρόσφυγες του &amp;apos;22 στη Φλώρινα, Aνακάλυψε την ιστορία σου!">
    <meta name="description" content="">
    <title>Οι πρόσφυγες του 22 στη Φλώρινα </title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Main.css" media="screen">
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
    <meta property="og:title" content="Main">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Main.html" data-home-page-title="Main" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header" id="sec-aa63" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-custom-font u-font-raleway u-hover-feature u-text u-title u-text-1" data-animation-name="" data-animation-duration="0" data-animation-direction="">ΟΙ ΠΡΟΣΦΥΓΕΣ ΤΟΥ 1922 ΣΤΗ ΦΛΩΡΙΝΑ</h1>
        <img class="u-hover-feature u-image u-image-circle u-image-contain u-preserve-proportions u-image-1" src="images/bridge-modified.png" alt="" data-image-width="1269" data-image-height="1269">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-top-bottom-menu-spacing u-nav-link" href="#" style="padding: 6px 14px; font-size: calc(1em + 12px);">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-25dd"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-25dd" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-0 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-1 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-black u-text-grey-90 u-text-hover-palette-1-base" href="Main.html" style="padding: 0px 20px;">Περιοχή προέλευσης</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Ανατολική Θράκη</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Ανατολική Ρωμυλία</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Καππαδοκία</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Καρς</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Μικρά Ασία</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Πόντος</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Πόντος (υπερόριοι οικισμοί)</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Καύκασος - Ν. Ρωσία</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Ελλάδα</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Αλβανία</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-border-1 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-black u-text-grey-90 u-text-hover-palette-1-base" href="about.html" style="padding: 0px 20px;">Σχετικά</a>
</li><li class="u-nav-item"><a class="u-border-1 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-black u-text-grey-90 u-text-hover-palette-1-base" href="#" style="padding: 0px 20px;">Δήμος εγκατάστασης</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Πρεσπών</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Αμυνταίου</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Φλώρινας</a>
</li></ul>
</div>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-border-2 u-border-grey-75 u-container-style u-inner-container-layout u-opacity u-opacity-65 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Main.html">Περιοχή προέλευσης</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link">Ανατολική Θράκη</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Ανατολική Ρωμυλία</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Καππαδοκία</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Καρς</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Μικρά Ασία</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Πόντος</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Πόντος (υπερόριοι οικισμοί)</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Καύκασος - Ν. Ρωσία</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Ελλάδα</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Αλβανία</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="about.html">Σχετικά</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Δήμος εγκατάστασης</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link">Πρεσπών</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Αμυνταίου</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Φλώρινας</a>
</li></ul>
</div>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-45"></div>
          </div>
        </nav>
        <form action="#" method="get" class="u-border-3 u-border-black u-expanded-width-xs u-radius-50 u-search u-search-left u-white u-search-1">
          <button class="u-search-button" type="submit">
            <span class="u-file-icon u-search-icon u-spacing-10 u-search-icon-1">
              <img src="images/3093824.png" alt="">
            </span>
          </button>
          <input class="u-search-input" type="search" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" placeholder="Ψάξε!">
        </form>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="carousel_2f0e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-table u-table-responsive u-table-1" style="height:400px;overflow: auto;">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="100%">
            </colgroup>
            <thead class="u-align-left u-palette-3-light-1 u-table-header u-table-header-1">
              <tr style="height: 42px;">
                <th class="u-border-2 u-border-grey-75 u-table-cell">Oνοματεπώνυμο | Οικισμός προέλευσης | Οικισμός εγκατάστασης :</th>
              </tr>
            </thead>
            <tbody class="u-table-alt-palette-1-light-3 u-table-body">
              <tr style="height: 45px;">
                <td class="u-border-2 u-border-grey-75 u-palette-5-light-2 u-table-cell u-table-cell-2">
                <?php 
                                    

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM search WHERE CONCAT(Name,Description,Όνομα, Οικισμός_προέλευσης, Οικισμός_εγκατάστασης,Περιοχή_προέλευσης,Κοντινή_πόλη_προέλευσης,Δήμος_εγκατάστασης) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($dbc, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                    <?php 
                                                       echo" <lu> <a href='details.php?ID={$items['id']}'>{$items['Name']}</a> | {$items['Οικισμός_προέλευσης']} | {$items['Οικισμός_εγκατάστασης']}<br>\n";

                                                    ?>
                
                                                    
                                                    
                                               
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                
                                                Δεν βρέθηκαν αποτελέσματα
                                                
                                            <?php
                                        }
                                    }
                 
                              ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-section-2" id="sec-469b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-grey-5 u-group u-hover-feature u-radius-14 u-shape-round u-group-1" data-animation-name="" data-animation-duration="0" data-animation-direction="">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-text u-text-default u-text-1">Aνακάλυψε την ιστορία σου!</h1>
          </div>
        </div>
      </div>
      
    </section>
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-d123"><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-1">Developed by Iason Kaskamanidis<br>©Copyright 2022 all rights reserved
        </p>
      </div></footer>
</body></html>