<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.meta')
    <title>Tambah Transaksi Laundry</title>
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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Transaksi Laundry</h1>
                        
                    </div>
                    <div class="card card-body my-3">
                        <form class="my-3" enctype="multipart/form-data" action="{{ route('laundry.saveLaundry')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="">
                            <div class="col-lg-12 col-12 mb-2">
                                <label class="form-label" for="username">Nama Pelanggan<sup class="text-danger">*</sup></label>
                                <select name="customers_id" class="js-example-basic-single form-control"  required id="alternatif-kode-petani">
                                        @foreach ( $dataCustomer as $index):?>
                                            <option value="{{$index->id}}">{{$index->name}}</option>
                                        @endforeach;?>
                                </select>
                            </div>
                            <div class="col-lg-12 col-12 mb-2">
                                <label class="form-label" for="username">Jenis Laundry<sup class="text-danger">*</sup></label>
                                <select name="types_id" class="js-example-basic-single form-control"  required id="alternatif-kode-petani">
                                        @foreach ( $dataType as $index):?>
                                            <option value="{{$index->id}}">{{$index->type_laundry}}</option>
                                        @endforeach;?>
                                </select>
                            </div>
                            <div class="col-lg-12 col-12 mb-2">
                                <label class="form-label" for="username">Jumlah(Kg) <sup class="text-danger">*</sup></label>
                                <input type="text" id="Nama Pelanggan" name="heavy" value="" class="form-control" required>
                            </div>
                            
                            <div class="col-lg-12 col-12 mb-2">
                                <label class="form-label" for="username">Catatan<sup class="text-danger">*</sup></label>
                                <div class=" col-sm-20">
                                    <textarea  class="col-lg-12 " name="notes" id="example-text-input" cols="20" rows="5" placeholder="Masukkan Alamat"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12 mb-2">
                                <label class="form-label" for="status">Status<sup class="text-danger">*</sup></label>
                                <select name="pay_status" class="js-example-basic-single form-control"  required >
                                        <option value="0">Belum Lunas</option>
                                        <option value="1">Lunas</option>
                                </select>
                            </div>
                            </div>
                            <div class="d-flex justify-content-start  col-lg-12 col-12 mb-2 mt-5">
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
    
    <script>
        var tanggalInput = document.getElementById("tanggalInput");

// Menambahkan event listener untuk mendengarkan perubahan pada input tanggal
tanggalInput.addEventListener("change", function() {
  tambahHari();
});

function tambahHari() {
  var tanggal = new Date(tanggalInput.value);
  
  // Memastikan tanggal yang valid telah dimasukkan
  if (isNaN(tanggal)) {
    console.log("Masukkan tanggal yang valid.");
    return;
  }

  // Menambahkan hari (misalnya, 3 hari) ke tanggal
  var jumlahHari = 3;
  tanggal.setDate(tanggal.getDate() + jumlahHari);

  // Mengubah format tanggal menjadi "YYYY-MM-DD" untuk input value
  var tahun = tanggal.getFullYear();
  var bulan = String(tanggal.getMonth() + 1).padStart(2, "0");
  var tanggalBaru = String(tanggal.getDate()).padStart(2, "0");
  var tanggalFormatBaru = tahun + "-" + bulan + "-" + tanggalBaru;

  // Mengatur nilai input dengan tanggal yang sudah ditambahkan
  tanggalInput.value = tanggalFormatBaru;
}
    </script>
</body>

</html>