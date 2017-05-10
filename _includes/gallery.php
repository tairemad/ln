<script>
(function ($, F) {
    F.transitions.resizeIn = function() {
        var endPos   = $.extend({}, F.current.dim, F._getPosition(true));
        var startPos;
        
        startPos = F.tmpWrap.position();
        
        startPos.width  = F.tmpWrap.width();
        startPos.height = F.tmpWrap.height();

        F.inner
            .css('overflow', 'hidden')
            .width( F.tmpInner.width() )
            .height( F.tmpInner.height() )
            .css('opacity', 0);

        F.wrap.css(startPos).show();

        F.tmpWrap.trigger('onReset').remove();

        F.wrap.animate(endPos, {
            duration: F.current.nextSpeed,
            step    : F.transitions.step,
            complete: function() {
                setTimeout(function() {
                    F.inner.fadeTo("fast", 1, F._afterZoomIn);
                }, 1);
            }
        });
    };
 
    F.transitions.resizeOut = function() {
        if (F.tmpWrap) {
            F.tmpWrap.stop(true).trigger('onReset').remove();
        }
                       
        F.tmpWrap  = F.wrap.stop(true, true);
        F.tmpInner = F.inner.stop(true, true);
    };

}(jQuery, jQuery.fancybox));

$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        nextMethod : 'resizeIn',
        nextSpeed : 250,
        
        prevMethod : 'resizeOut',
        prevSpeed : 250
    });​
	
	$(".fancybox").fancybox({
    helpers : {
        overlay : {
            opacity: 0.2,
            css : {
                'background-color' : '#000'
            }
        }
    }
});​



</script>
<script type="text/javascript">

$(document).ready(function() {
	$(".fancybox-button").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	});
});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox")
		.attr('rel', 'gallery')
		.fancybox();
		
	});
</script>

<h1>Gallery</h1>


<br>
<br>

<a class="fancybox" rel="group" href="images/gallery/0001.jpg"><img src="images/gallery/small/sm001.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0002.jpg"><img src="images/gallery/small/sm002.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0003.jpg"><img src="images/gallery/small/sm003.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0004.jpg"><img src="images/gallery/small/sm004.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0005.JPG"><img src="images/gallery/small/sm005.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0006.JPG"><img src="images/gallery/small/sm006.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0007.JPG"><img src="images/gallery/small/sm007.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0008.JPG"><img src="images/gallery/small/sm008.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0009.JPG"><img src="images/gallery/small/sm009.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0010.JPG"><img src="images/gallery/small/sm010.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0011.JPG"><img src="images/gallery/small/sm011.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0012.JPG"><img src="images/gallery/small/sm012.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0013.JPG"><img src="images/gallery/small/sm013.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0014.JPG"><img src="images/gallery/small/sm014.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0015.JPG"><img src="images/gallery/small/sm015.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0016.JPG"><img src="images/gallery/small/sm016.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0017.JPG"><img src="images/gallery/small/sm017.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0018.JPG"><img src="images/gallery/small/sm018.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0019.JPG"><img src="images/gallery/small/sm019.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0020.JPG"><img src="images/gallery/small/sm020.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0021.JPG"><img src="images/gallery/small/sm021.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0022.JPG"><img src="images/gallery/small/sm022.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0023.JPG"><img src="images/gallery/small/sm023.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0024.JPG"><img src="images/gallery/small/sm024.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0025.JPG"><img src="images/gallery/small/sm025.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0026.JPG"><img src="images/gallery/small/sm026.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0027.JPG"><img src="images/gallery/small/sm027.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0028.JPG"><img src="images/gallery/small/sm028.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0029.JPG"><img src="images/gallery/small/sm029.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0030.JPG"><img src="images/gallery/small/sm030.jpg" width="150" height="150" class="img" alt="" /></a>
<a class="fancybox" rel="group" href="images/gallery/0031.JPG"><img src="images/gallery/small/sm031.jpg" width="150" height="150" class="img" alt="" /></a>