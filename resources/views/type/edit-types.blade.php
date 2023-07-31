<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.meta')
    <title>Edit Jenis Laundry</title>
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
                        <h1 class="h3 mb-0 text-gray-800">Edit Jenis Laundry</h1>
                        
                    </div>
                    <div class="card card-body my-3">
                        <form class="my-3" enctype="multipart/form-data" action="{{route('type.updateType',$type->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" value="">
                            <div class="col-lg-12 col-12 mb-2 ">
                                <label class="form-label" for="username">Jenis Laundry <sup class="text-danger">*</sup></label>
                                <input type="text" id="name" name="type_laundry" value="{{ old('type_laundry') ?? $type->type_laundry}}"  placeholder="Masukkan Jenis Laundry" class="form-control">
                            </div>
                            <div class="col-lg-12 col-12 mb-2 ">
                                <label class="form-label" for="username">Lama Proses (Hari) <sup class="text-danger">*</sup></label>
                                <input type="text" id="name" name="proces" value="{{ old('proces') ?? $type->proces}}"  placeholder="Masukkan lama proses" class="form-control">
                            </div>
                            <div class="col-lg-12 col-12 mb-2">
                                <label class="form-label" for="phone">Tarif (Per Kg) <sup class="text-danger">*</sup></label>
                                <input type="text" id="phone" name="rates" value="{{ old('rates') ?? $type->rates}}"   placeholder="Masukkan tarif" class="form-control">
                            </div>
                            <div class="d-flex justify-content-start col-lg-12 col-12 mb-2 mt-5">
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