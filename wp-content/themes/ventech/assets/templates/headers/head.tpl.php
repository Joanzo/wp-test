<head>

    <!-- Meta Information -->
    <meta charset="utf-8" />
    <title><?php if (isset($title)) echo $title; ?> | <?php if (isset($website_name)) echo $website_name; ?></title>
    <meta name="keywords" content="<?php if (isset($keywords)) echo $keywords; ?>" />
    <meta name="description" content="<?php if (isset($description)) echo $description; ?>">
    <meta name="author" content="<?php if (isset($author)) echo $author; ?>">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.ico">

    <!-- Bootstrap CSS  -->
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Icons CSS -->
    <link href="fonts/fontawesome/font.min.css" rel="stylesheet" type="text/css">
    <link href="fonts/hawcon/font.css" rel="stylesheet" type="text/css">
    <link href="fonts/linearicons/font.css" rel="stylesheet" type="text/css">

    <!-- Fonts CSS -->
    <link href="fonts/montserrat/font.css" rel="stylesheet" type="text/css">   
    <link href="fonts/oswald/font.css" rel="stylesheet" type="text/css"> 

    <!-- Plugin CSS -->
    <link href="plugins/animsition/css/animsition.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/animatecss/animate.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="plugins/isotope/css/isotope.css" rel="stylesheet" type="text/css">
    <link href="plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">

    <!-- Slider Plugin CSS -->
    <link href="plugins/vs-plugin/css/vs.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/slick/slick.css" rel="stylesheet" type="text/css">
    <link href="plugins/slick/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="plugins/masterslider/style/masterslider.css" rel="stylesheet" type="text/css">

    <!-- Specific CSS -->
    <?php
    if(isset($specific_css))
    {
        foreach($specific_css as $css)
        {
            echo '<link href="'.$css.'" rel="stylesheet" type="text/css">';
        }
    }
    ?>

    <!-- Theme CSS -->
    <link href="css/theme.min.css" rel="stylesheet" type="text/css">
    <link href="css/colors/<?php if (isset($color_theme)) echo $color_theme; else echo 'color-default'; ?>.css" rel="stylesheet" type="text/css" id="color-css">
    
    <!-- PRELOADER CSS -->
    <style>
        .preloader-container {
            background: #FFFFFF; width:100%; height:100%; position:fixed; z-index: 9999; top: 0; left: 0;
            transition:all cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.5s;
        }
        .preloader-container.remove{
            opacity: 0;
        }
    </style>


    <!-- Custom CSS -->
    <link href="custom/custom.css" rel="stylesheet" type="text/css">


    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="plugins/modernizr/modernizr.js"></script> 


</head>

<body data-active-menu ="<?php if (isset($active_menu)) echo $active_menu; ?>"
      data-active-submenu ="<?php if (isset($active_submenu)) echo $active_submenu; ?>"
      data-page-transition ="<?php  echo $page_transition; ?>"
      data-transition-in ="<?php  echo $transition_in; ?>"
      data-transition-out ="<?php  echo $transition_out; ?>"
      data-transition-selector = '<?php  echo $transition_selector; ?>'
      class ="<?php if (isset($layout)) echo $layout; ?>
              <?php if (isset($background)) echo $background; ?>
              <?php if (isset($body_extra_class)) echo $body_extra_class; ?>
              <?php if ($header_padding) echo 'header-padding' ?>
              <?php if ($menu_vertical) echo 'menu-vertical' ?>
              clearfix">
    <div class="preloader-container">
        <div class="square-split loader-container">
            <div class="loader">
                <div class="square-1"></div>
                <div class="square-2"></div>
                <div class="square-3"></div>
                <div class="square-4"></div>
            </div>
        </div>
    </div>
    <div class="body-inner <?php if ($page_transition) echo 'animsition'; ?>">