<img src="images/slides/001.jpg" alt="nail designs" id="rotator"  class="homeimg" width="610" height="620"/>


<script type="text/javascript">
(function() {
    var rotator = document.getElementById('rotator');  // change to match image ID
    var imageDir = 'images/slides/';                          // change to match images folder
    var delayInSeconds = 5;                            // set number of seconds delay
    // list image names
    var images = ['001.jpg', '002.jpg', '003.jpg', '004.jpg'];

    // don't change below this line
    var num = 0;
    var changeImage = function() {
        var len = images.length;
        rotator.src = imageDir + images[num++];
        if (num == len) {
            num = 0;
        }
    };
    setInterval(changeImage, delayInSeconds * 1000);
})();
</script>