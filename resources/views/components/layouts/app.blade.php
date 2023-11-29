<!doctype html>
<html class="no-js" lang="en">

<x-layouts.head/>

<body>
<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-layouts.header/>

<div class="custom-cursor">
    @yield('content')
</div>



<x-layouts.footer/>

<script>

    var $cursor = $('.cursor');

    function moveCursor(e) {
        $cursor.addClass('is-moving');

        TweenLite.to($cursor, 0.23, {
            left: e.pageX,
            top: e.pageY,
            ease: Power4.easOut
        });

        clearTimeout(timer);

        var timer = setTimeout(function() {
            $cursor.removeClass('is-moving');
        }, 300);
    }
    $(window).on('mousemove', moveCursor);
</script>
<!--====== Jquery js ======-->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--====== Plugins js ======-->
<script src="assets/js/plugins.js"></script>

<!--====== Slick js ======-->
<script src="assets/js/slick.min.js"></script>

<!--====== Ajax Contact js ======-->
<script src="assets/js/ajax-contact.js"></script>

<!--====== Counter Up js ======-->
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>

<!--====== Magnific Popup js ======-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!--====== Scrolling Nav js ======-->
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/scrolling-nav.js"></script>

<!--====== wow js ======-->
<script src="assets/js/wow.min.js"></script>

<!--====== Particles js ======-->
<script src="assets/js/particles.min.js"></script>

<!--====== Main js ======-->
<script src="assets/js/main.js"></script>

</body>

</html>
