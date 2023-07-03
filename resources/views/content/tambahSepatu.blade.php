@extends('layoutAdmin.masterA')


@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- plugins:css -->

    </head>

    <body>
        <div class="container-scroller">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Tambah Sepatu</h3>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="mx-auto col-lg-4">

                        <form action="tambahsepatu" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                <input type="file" class="form-control" name="foto">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" class="form-control" name="harga">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Model</label>
                                <input type="text" class="form-control" name="model">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ukuran</label>
                                <input type="number" class="form-control" name="ukuran">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">warna</label>
                                <input type="text" class="form-control" name="warna">

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                    <div class="row">

                    </div>
                    <div class="row">

                    </div>
                    <div class="row">

                    </div>


                    <div class="row">

                    </div>


                    <div class="row">

                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->

                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    </body>

    </html>
@endsection
