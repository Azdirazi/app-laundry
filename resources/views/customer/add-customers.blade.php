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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Pelanggan</h1>
                        
                    </div>
                    <div class="card card-body my-3">
                        <form class="my-3" enctype="multipart/form-data" action="{{route('customer.saveCustomer')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="">
                            <div class="col-lg-12 col-12 mb-2 ">
                                <label class="form-label" for="username">Nama Pelanggan<sup class="text-danger">*</sup></label>
                                <input type="text" id="name" name="name" value="" class="form-control">
                            </div>
                            <div class="col-lg-12 col-12 mb-2">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin <sup class="text-danger">*</sup> </label>
                                <div class="col-md-9">
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="gender" class="custom-control-input" value="Laki - laki" checked>
                                            <label class="custom-control-label" for="customRadio4">Laki - laki</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio5" name="gender" class="custom-control-input" value="Perempuan">
                                            <label class="custom-control-label" for="customRadio5">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-12 col-12 mb-2">
                                <label class="form-label" for="address">Alamat <sup class="text-danger">*</sup></label>
                                <div class="col-sm-20">
                                     <textarea class="col-lg-12" name="address" id="example-text-input" cols="20" rows="5" placeholder="Masukkan Alamat"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12 mb-2">
                                <label class="form-label" for="phone">No.Telpon<sup class="text-danger">*</sup></label>
                                <input type="text" id="phone" name="phone" value="" class="form-control">
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