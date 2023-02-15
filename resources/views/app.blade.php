<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

@yield("head")

<body>
    <div class="arrow arrow_to_top none" id="arrow" onclick="topFunction()">
        <i class="fas fa-chevron-circle-up"></i>
    </div>
    @yield("header")
    @yield("intro")
    <main id="more_content" class="more_content">
        @yield("konten_satu")
        @yield("konten_dua")
        @yield("konten_tiga")
        @yield("karir")
    </main>
    @yield("footer")
    @yield("script")
</body>

</html>