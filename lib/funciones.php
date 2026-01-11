<?php
    function validar_input($input){
        $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            return $input;
    }
    
    function printHeader($title,$idioma,$enlaceIdioma,$enlaceNav,$nav){
       echo "<!DOCTYPE html>
                <html>
                <head>
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <meta http-equiv='X-UA-Compatible' content='ie=edge,chrome=1'>
                    <link rel='icon' href='\assets\img\Logo\logo.png' type='img/png'/>
                    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
                    integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
                    <title>".$title."</title>
                    <link rel='stylesheet' type='text/css' href='assets\css\custom.css' /> 
                </head>
                <body>
                    <div class='container-fluid'>
                        <div class='row header'>                       
                            <div class='col-12'>
                                <div class='row lang-menu'>
                                    <button type=button id='dropdownMenuButton' class='lang-menu-btn col-4 col-md-1' data-bs-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                        <a class='dropdown-item lang-menu-lenda' href='".$enlaceIdioma[0]."'>".$idioma[0]."</a>
                                    </button>
                                    <div class='lang-menu-drop col-sm-4 col-lg-2 dropdown-menu ' aria-labelledby='dropdownMenuButton'>
                                        <a class='dropdown-item lang-menu-lenda lang-menu-lenda-sub' href='".$enlaceIdioma[1]."'>".$idioma[1]."</a>
                                    </div>
                                </div>               
                            </div>
                            <div class='row'>
                                <div class='col-12'>
                                    <div class='row'>
                                        <div class='col-12 head'>
                                            <h1 class='head-tit'>Pablo e Silvia</h1>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-12  head-nav-contain'>                   
                                            <nav class='navbar navbar-expand-md navbar-light'>
                                            <div class='container-fluid'>
                                                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarText' aria-controls='navbarTogglerDemo01' aria-expanded='false' aria-label='Toggle navigation'>
                                                    <span class='navbar-toggler-icon'></span>
                                                </button>
                                                <div class='collapse navbar-collapse' id='navbarText'>
                                                    <ul class='navbar-nav '>
                                                        <li class='head-nav-contain-item active'>
                                                            <a class='head-nav-contain-link' href='".$enlaceNav[0]."'>".$nav[0]." </a>
                                                        </li>
                                                        <li class='head-nav-contain-item'>
                                                            <a class='head-nav-contain-link' href='".$enlaceNav[1]."'>".$nav[1]." </a>
                                                        </li>
                                                        <li class='head-nav-contain-item'>
                                                            <a class='head-nav-contain-link' href='".$enlaceNav[2]."'>".$nav[2]." </a>
                                                        </li>
                                                        <li class='head-nav-contain-item'>
                                                            <a class='head-nav-contain-link' href='".$enlaceNav[3]."'>".$nav[3]." </a>
                                                        </li>
                                                        <li class='head-nav-contain-item'>
                                                            <span class='head-nav-contain-link' href='#' disabled>".$nav[4]." </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                </div>
                                            </nav>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div> ";
    }
     function printFooter(){
        echo "<div class='row endPa'>
                <div class='col-4 col-md-3 endPa-content'> 
                    <a class='row endPa-logo' href='index.php'>P&S</a>
                    <span class='row endPa-text'>10/10/2026</span>
                </div>                
              </div>
            </div>";
    }
    function printFooterPS(){
        echo "<div class='row endPa'>
                <div class='col-4 col-md-3 endPa-content'> 
                    <a class='row endPa-logo' href='../index.php'>P&S</a>
                    <span class='row endPa-text'>10/10/2026</span>
                </div>                
              </div>
            </div>";
    }
    function printScripts(){
        echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      </script>
      <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll("[data-bs-toggle=\'tooltip\']"));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl);
        })
      </script>';
    }   
    function printCloseHtml(){
        echo "</body>
            </html>";
    }
?>