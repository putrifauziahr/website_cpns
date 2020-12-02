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
                            <h2>Try Out</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card card-primary card-outline">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <p class="card-text" style="font-size:25px; font-weight:bold">TRYOUT 1</p>
                                                <p class="card-text">Waktu : 90 Menit</p>
                                                <p class="card-text">
                                                    Jumlah : 100 Soal
                                                </p>
                                                <button type="button" class="btn btn-primary"> <img src="{{ asset('icon/baseline_create_white_18dp.png') }}"> Kerjakan Soal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="card card-primary card-outline">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <p class="card-text" style="font-size:25px; font-weight:bold">TRYOUT 1</p>
                                                <p class="card-text">Waktu : 90 Menit</p>
                                                <p class="card-text">
                                                    Jumlah : 100 Soal
                                                </p>
                                                <button type="button" class="btn btn-primary"><img src="{{ asset('icon/baseline_create_white_18dp.png') }}">Kerjakan Soal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card card-primary card-outline">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <p class="card-text" style="font-size:25px; font-weight:bold">TRYOUT 1</p>
                                                <p class="card-text">Waktu : 90 Menit</p>
                                                <p class="card-text">
                                                    Jumlah : 100 Soal
                                                </p>
                                                <button type="button" class="btn btn-primary"><img src="{{ asset('icon/baseline_create_white_18dp.png') }}">Kerjakan Soal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection