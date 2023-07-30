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
                            <a href="{{ route('customer.tambah') }}" class="btn btn-primary col-lg-4 col-12 mb-4">
                                <span class="fa fa-plus"></span>Tambah Pelanggan</a>
                            <h5 class="card-title">Data Pelanggan</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="table-customer">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Nama Pelanggan</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No Telp</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($dataCustomer as $index => $customer)
                                            <tr>
                                                <td scope="col">{{ ++$index }}</td>
                                                <td scope="col">{{ $customer->img}}</td>
                                                <td scope="col">{{ $customer->name }}</td>
                                                <td scope="col">{{ $customer->gender }}</td>
                                                <td scope="col">{{ $customer->address }}</td>
                                                <td scope="col">{{ $customer->phone }}</td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text border-0">
                                                            <a href="{{route('customer.edit',[$customer->id])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                                        </span><span class="input-group-text border-0">
                                                            <form onsubmit="return confirm('Data pengguna akan dihapus ?')" action=" {{route('customer.deleteCustomer',$customer->id)}}" method="POST" ">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type=" submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
                                                            </form>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
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