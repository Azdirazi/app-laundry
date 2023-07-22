<!DOCTYPE html>
<html lang="en">
<head>
     @include('partials.meta')
     <title>Profile</title>
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
                        <h1 class="h3 mb-0 text-gray-800">Profile Users</h1>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                         <div class="card card-body">
                         <form class="my-3" enctype="multipart/form-data" action="">
                              <input type="hidden" name="id" value="">
                              <div class="mb-3"><
                                   <label class="form-label d-block" for="foto">Foto <sup class="text-danger">*</sup></label>
                                   <img id="img-preview" class="my-2"  width="200" src="#">
                                   <div class="custom-file form-control">
                                        <input name="foto" type="file" class="custom-file-input" id="validatedInputGroupCustomFile" >
                                        <label class="custom-file-label"   for="validatedInputGroupCustomFile">Choose file...</label>
                                   </div>
                              </div>
                              <div class="mb-3">
                                   <label class="form-label" for="username">Username <sup class="text-danger">*</sup></label>
                                   <input type="text" id="username" name="username" value="" class="form-control">
                              </div>
                              <div class="mb-3">
                                   <label class="form-label" for="nama">Nama <sup class="text-danger">*</sup></label>
                                   <input type="text" id="nama" name="nama" value="" class="text-capitalize form-control" >
                              </div>
                              <div class="mb-3">
                                   <label class="form-label" for="nama">No.Telepon <sup class="text-danger">*</sup></label>
                                   <input type="text" id="nama" name="nama" value="" class="text-capitalize form-control" >
                              </div>
                              <div class="d-flex justify-content-start mt-5">
                                    <button type="submit" name="profile" class="btn btn-primary mr-2">Simpan</button>
                                    <button type="reset"  class="btn btn-danger mx-2">Batal</button>
                              </div>
                         </form>
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