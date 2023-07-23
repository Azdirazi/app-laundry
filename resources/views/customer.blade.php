<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.meta')
    <title>Customer</title>
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
                        <h1 class="h3 mb-0 text-gray-800">Data Pelanggan</h1>
                        
                    </div>
                    <div class="card card-body my-3">
                            <a href="#" class="btn btn-primary col-lg-4 col-12 mb-4">
                                <span class="fa fa-plus"></span>Tambah Pelanggan</a>
                            <h5 class="card-title">Data Pelanggan</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="table-user">
                                    <thead>
                                        <tr>
                                            <th>Nama Pelanggan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Action</th>
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