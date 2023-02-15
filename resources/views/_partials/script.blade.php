<script type="text/javascript" src="{{ asset('gas.id/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gas.id/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('gas.id/aos@2.3.1/dist/aos.js') }}"></script>
<script src="{{ asset('gas.id/ajax/libs/materialize/1.0.0/js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gas.id/js/slick/slick/slick.js') }}"></script>
<script type="text/javascript" src="{{ asset('gas.id/js/main-feature.js') }}"></script>
<script type="text/javascript" src="{{ asset('gas.id/js/modernizr.custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('gas.id/js/classie.js') }}"></script>
<script type="text/javascript" src="{{ asset('gas.id/js/sidebarEffects.js') }}"></script>
<script type="text/javascript" src="{{ asset('gas.id/js/slick/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gas.id/js/feedback.js') }}"></script>
<script>
    function open_descjob(value) {
        $('#descmodal_' + value).fadeIn();
        $('#jobrequired_' + value).fadeIn();
    }

    function close_descjob(value) {
        $('#descmodal_' + value).fadeOut();
        $('#jobrequired_' + value).fadeOut();
    }

    function open_contactus() {
        $('#contactus, #wrap_form_feedback').fadeIn();
    }
    var span = document.getElementById("close_pop");
    span.onclick = function() {
        $('#contactus, #wrap_form_feedback').fadeOut();
    }
    // if ($('body').hasClass('page-template')) { $('#navbar_collapse,#navbar_burger').hide(); $('.titleback').show();}
</script>
<script>
    var OSName = 'https://play.google.com/store/apps/details?id=id.gas.app&amp;amp;hl=en';
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;

    function button_open() {
        if (/android/i.test(userAgent)) {
            OSName = 'https://play.google.com/store/apps/details?id=id.gas.app&amp;amp;hl=en';
        }

        if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            OSName = '';
        }
        window.open(OSName);
    }
</script>
<script>
    AOS.init();
</script>