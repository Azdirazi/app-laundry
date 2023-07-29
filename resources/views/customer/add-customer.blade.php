<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.meta')
    <title>Tambah Pelanggan</title>
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
                        <form class="my-3" enctype="multipart/form-data" action="">
                            <input type="hidden" name="id" value="">
                            <div class="mb-3">
                                <label class="form-label" for="username">Nama Pelanggan<sup class="text-danger"></sup></label>
                                <input type="text" id="Nama Pelanggan" name="Nama Pelanggan" value="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="username">Alamat<sup class="text-danger"></sup></label>
                                <div class="col-sm-20">
                                <textarea name="alamat" id="example-text-input" cols="20" rows="5" placeholder="Masukkan Alamat"></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="username">No.Telpon<sup class="text-danger"></sup></label>
                                <input type="text" id="no.telpon" name="no.telpon" value="" class="form-control">
                            </div>
                            <div class="d-flex justify-content-start mt-5">
                                <button type="submit" name="profile" class="btn btn-primary mr-2">Simpan</button>
                                <button type="reset" class="btn btn-danger mx-2">Batal</button>
                            </div>
                        </form>        
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