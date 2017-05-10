<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Lovely Nails</title>

<link href="scripts/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.content-panel-switcher.js"></script>

<script type='text/javascript'>
$(function(){
 
    function contentSwitcher(settings){
        var settings = {
           contentClass : '.content',
           navigationId : '#nav'
        };
 
        //Hide all of the content except the first one on the nav
        $(settings.contentClass).not(':first').hide();
        $(settings.navigationId).find('li:first').addClass('active');
 
        //onClick set the active state, 
        //hide the content panels and show the correct one
        $(settings.navigationId).find('a').click(function(e){
            var contentToShow = $(this).attr('href');
            contentToShow = $(contentToShow);
 
            //dissable normal link behaviour
            e.preventDefault();
 
            //set the proper active class for active state css
            $(settings.navigationId).find('li').removeClass('active');
            $(this).parent('li').addClass('active');
 
            //hide the old content and show the new
            $(settings.contentClass).hide();
            contentToShow.show();
        });
    }
    contentSwitcher();
});
</script> 

<!--Fancy Box -->
<!-- Add jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js"></script>

<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
<!--[if IE]>-->
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<!--<![endif]-->
<script type="text/javascript">
(function(){if(!/*@cc_on!@*/0)return;var e = "abbr,article,aside,audio,bb,canvas,datagrid,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(','),i=e.length;while(i--){document.createElement(e[i])}})()

</script>
<!--Theme Name: Lovely Nails
Theme URI: http://www.lovelynils.com
Description: Made for Lovely Nails 
Version: 1.0
Author: Tairema Dailey
Author URI: http://www.pinkcandydesigns.net/
-->

</head>

<body>

<header>
<?php include("_includes/header.php");?>
</header>
<div id="wrapper">
<div id="content">
<div id="nav">
        <?php include("_includes/nav.php");?>

</div>
		
<div id="contentright">
<div id="pageitem-1" class="content">
<?php include("_includes/home.php");?>
</div>
<div id="pageitem-2" class="content">
<?php include("_includes/about.php");?>
</div>
<div id="pageitem-3" class="content">
<?php include("_includes/prices.php");?>
</div>
<div id="pageitem-4"  class="content">
<?php include("_includes/gallery.php");?>

</div>
<div id="pageitem-5"  class="content">
<?php include("_includes/directions.php");?>
</div>
<div id="pageitem-6"  class="content">
<?php include("_includes/contact.php");?>
</div>


</div>




</div>


<footer>
<?php include("_includes/footer.php");?>
</footer>

</div>

</body>
</html>
