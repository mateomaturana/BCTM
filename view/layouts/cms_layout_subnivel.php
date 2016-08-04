<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/template.css" type="text/css"/>
        <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <link rel="stylesheet" href="css/jquery-ui.min.css"/>
        <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
        <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.3.2.0.css">-->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">  
        <link rel="stylesheet" type="text/css" href="css/cms_styles.css">

        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/languajes/jquery.validationEngine-en.js" charset="utf-8"></script>
        <script type="text/javascript" src="js/jquery.validationEngine.js" charset="utf-8"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/script.js" charset="utf-8"></script>

    </head>
    <body>
        <style>
            .dropdown-submenu{position:relative;}
            .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
            /*.dropdown-submenu:hover>.dropdown-menu{display:block;}*/
            .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
            .dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
            .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
                $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
                    // Avoid following the href location when clicking
                    event.preventDefault();
                    // Avoid having the menu to close when clicking
                    event.stopPropagation();
                    // If a menu is already open we close it
                    //$('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
                    // opening the one you clicked on
                    $(this).parent().addClass('open');

                    var menu = $(this).parent().find("ul");
                    var menupos = menu.offset();

                    if ((menupos.left + menu.width()) + 30 > $(window).width()) {
                        var newpos = -menu.width();
                    } else {
                        var newpos = $(this).parent().width();
                    }
                    menu.css({left: newpos});

                });
            });
        </script>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://bootply.com"><i class="icon-home icon-white"> </i> Lorem Ipsum blog						</a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav"><li class="menu-item "><a href="#">Blog</a></li>
                        <li class="menu-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About The Tests <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="menu-item dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Clearing Floats</a>
                                    <ul class="dropdown-menu">
                                        <li class="menu-item "><a href="#">Page with comments</a></li>
                                        <li class="menu-item "><a href="#">Page with comments disabled</a></li>
                                        <li class="menu-item dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">More</a>
                                            <ul class="dropdown-menu"><li><a href="#">3rd level link more options</a></li><li><a href="#">3rd level link</a></li></ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#">Lorem Ipsum</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><form class="navbar-search navbar-form" method="get" action="">
                                <input type="text" class="form-control" placeholder="Search" name="s">
                            </form>
                        </li>
                        <li>
                            <a href="#" title="Subscribe to the RSS feed">
                                <i class="icon-rss"> </i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>