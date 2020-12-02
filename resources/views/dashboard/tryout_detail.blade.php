@extends('layouts.master')

@section('title', 'Tryout CPNS')

@section ('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2> Hasil Try Out</h2>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tryout</th>
                                        <th scope="col">Tanggal Mengerjakan</th>
                                        <th scope="col">Skor</th>
                                        <th scope="col">Skor</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>TWK-14</th>
                                        <td>26-11-2020</td>
                                        <td>80</td>
                                        <td><button class="btn btn-success">Lulus</button></td>
                                        <td><button class="btn btn-primary">Detail</button></td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <th>TWK-12</th>
                                        <td>26-11-2020</td>
                                        <td>40</td>
                                        <td><button class="btn btn-danger">Tidak Lulus</button></td>
                                        <td><button class="btn btn-primary">Detail</button></td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <th>TIU-2</th>
                                        <td>26-11-2020</td>
                                        <td>80</td>
                                        <td><button class="btn btn-success">Lulus</button></td>
                                        <td><button class="btn btn-primary">Detail</button></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection