@extends('layouts.master')

@section('title', 'Hasil Latihan CPNS')

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
                            <h2>Hasil Latihan</h2>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Np</th>
                                        <th scope="col">Latihan</th>
                                        <th scope="col">Tanggal Mengerjakan</th>
                                        <th scope="col">Skor</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>TWK14</td>
                                        <td>26-11-2020</td>
                                        <td>80</td>
                                        <td><a href="#" class="btn btn-outline-primary">DETAIL</a></td>
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
<!-- /.content-wrapper -->

@endsection