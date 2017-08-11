<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EYEWEAR</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/media.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        function collapsElement(id) {
            if ( document.getElementById(id).style.display != "none" ) {
                document.getElementById(id).style.display = 'none';
            }
            else {
                document.getElementById(id).style.display = '';
            }
        }
    </script>
</head>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <h1 class="logo_text">
                        eye<span class="header_text">wear</span>
                    </h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="logo_center_text">
                    <ul class="header_menu">
                        <li>dioptrict glasses</li>
                        <li>sunglasses</li>
                        <li>kids glasses</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="list">
                    <div class="col-md-6">
                        <div class="script">
                            <a href="javascript:collapsElement('identifikator')" title="" rel="nofollow">
                                <i class="qwe-search"></i>
                            </a>
                            <div id="identifikator" style="display: none">
                                <div class="input-group">
                                    <input type="search" placeholder="Поиск по сайту">
                                    <span class="input-group-btn">
                                            <div class="header_button">
                                       <button class="btn btn-default " type="button">
                                          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                       </button>
                                            </div>
                                       </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 logo_link2">
                        <a class="link2">
                            <i class="qwe-handbag"></i>
                        </a>
                        <div class="text">
                            <span class="ttu color-text">Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>