<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.meta')
    <title>Tambah Users</title>
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
                        <h1 class="h3 mb-0 text-gray-800">Tambah User</h1>
                        
                    </div>
                    <div class="card card-body my-3">
                         <form class="my-3" enctype="multipart/form-data" action="{{route('user.saveUser')}}" method="POST">
                              @csrf
                              <div class="row"> 
                                   <div class="col-lg-12 col-12 mb-2">
                                        <label class="form-label">Username <sup class="text-danger">*</sup></label>
                                        <input type="text" class="form-control desimal-input" name="username"required>
                                   </div>
                                   <div class="col-lg-12 col-12 mb-2">
                                        <label class="form-label">Password <sup class="text-danger">*</sup></label>
                                        <input type="password" class="form-control desimal-input" name="password"required>
                                   </div>
                                   <div class="col-lg-12 col-12 mb-2">
                                        <label class="form-label">Nama <sup class="text-danger">*</sup></label>
                                        <input type="text" class="form-control desimal-input" name="name"required>
                                   </div>
                                   <div class="col-lg-12 col-12 mb-2">
                                        <label class=" col-form-label">Jenis Kelamin <sup class="text-danger">*</sup> </label>
                                        <div class="">
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
                                        <label class="form-label" for="address">Alamat<sup class="text-danger">*</sup></label>
                                        <div class="col-sm-20">
                                             <textarea class="col-lg-12" name="address" id="example-text-input" cols="20" rows="5" placeholder="Masukkan Alamat" required></textarea>
                                        </div>
                                   </div>
                                   <div class="col-lg-12 col-12 mb-2">
                                        <label class="form-label" for="nama">No.Telepon <sup class="text-danger">*</sup></label>
                                        <input type="tel" id="phone" name="phone" value="" class="text-capitalize form-control" required>
                                   </div>
                                   <div class="col-lg-12 col-12 mb-2">
                                        <label class="form-label">Jabatan<sup class="text-danger">*</sup></label>
                                        <select id="role" name="level" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"required>
                                             <option selected value="">Pilih...</option>
                                             <option value="Admin">Admin</option>
                                             <option value="Kasir">Kasir</option>
                                        </select>
                                   </div>
                                   <div class="d-flex justify-content-start mt-5 col-lg-12 col-12 mb-2">
                                        <button type="submit" name="profile" class="btn btn-primary mr-2">Simpan</button>
                                        <button type="reset" class="btn btn-danger mx-2">Batal</button>
                                   </div>
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