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
                                    <h3 class="font-weight-bold">Data Sepatu</h3>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="table-responsive col-lg-12">
                        <a href="{{ 'tambahsepatu' }}" class="btn btn-primary mb-3">Create new Shoes</a>
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    {{-- <th scope="col">Merk</th> --}}
                                    <th scope="col">Foto</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Ukuran</th>
                                    <th scope="col">Warna</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($sepatu as $s)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $s->nama }}</td>
                                        <td><img src="{{ asset('storage/' . $s->foto) }}" alt=""></td>
                                        <td>{{ $s->harga }}</td>
                                        <td>{{ $s->model }}</td>
                                        <td>{{ $s->ukuran }}</td>
                                        <td>{{ $s->warna }}</td>
                                        <td>
                                            <a href="deletesepatu/{{ $s->id }}" class="badge bg-danger"><i
                                                    class="bi bi-trash-fill"></i>ghvh</a>
                                            <a href="editsepatu/{{ $s->id }}" class="badge bg-info">Update</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

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
