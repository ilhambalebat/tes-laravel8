@extends("app_admin")
@section("head") @include("_partials_admin.head") @endsection
@section("navbar") @include("_partials_admin.navbar") @endsection
@section("sidebar") @include("_partials_admin.sidebar") @endsection
@section("footer") @include("_partials_admin.footer") @endsection
@section("script") @include("_partials_admin.script") @endsection
@section("konten")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Konten</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Konten</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Intro</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Intro</label>
                                    <textarea type="text" name="intro" id="intro" class="form-control"
                                        rows="4">GAS adalah aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih luas. Melalui gerakan #AyoBelanjaTokoTetangga GAS mengajak untuk menjelajah dan mendukung usaha-usaha di sekitarmu.</textarea>
                                </div>
                                <div class="row">
                                    @for($i=1; $i<=3; $i++) <div class="col-4">
                                        <div class="card p-4">
                                            <label for="">Pembeli</label>
                                            <img src="{{ asset(" gas.id/") }}/files/images/gambar-driver_1616661412.png"
                                                alt="" width="200px">
                                            <p>
                                            <ul class="dod_job">
                                                <li>Tanpa biaya daftar</li>
                                                <li> tinggal daftar.</li>
                                                <li>Biaya ongkir jadi milik tokomu.</li>
                                            </ul>
                                            </p>
                                        </div>
                                </div>
                                @endfor
                        </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

@endsection