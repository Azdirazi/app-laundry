<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.meta')
    <title>Laundry - Dashboard</title>
    @include('partials.css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('partials.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('partials.navbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Laporan</h1>
                        
                    </div>
                    <div class="card card-body my-3">
                            <div class="d-flex justify-content-sm-end">
                                <a href="#" class="btn btn-primary col-lg-4 col mb-4-12">
                                <span></span>Cetak Laporan</a>
                            </div>
                            <h5 class="card-title">Data Laporan</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="table-user">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Catatan</th>
                                            <th>Pemasukan</th>
                                            <th>Pengeluaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                    </div>

            
                     
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           @include('partials.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('partials.logout_modal')

    @include('partials.js')

</body>

</html>