<!DOCTYPE html>
<html lang="en">

@yield("head")

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @yield("navbar")
        @yield("sidebar")

        @yield("konten")
        <!-- /.content-wrapper -->
        @yield("footer")

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @yield("script")
</body>

</html>