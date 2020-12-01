@extends('layouts.master')

@section('title', 'Dashboard CPNS')

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

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('icon/sharp_book_black_18dp.png') }}">
                            <div class="text-right">
                                <h6 class="card-text" style="font-size: 30px; font-weight:bolder">100</h6>
                                <p class="card-text">Materi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('icon/sharp_topic_black_18dp.png') }}">
                            <div class="text-right">
                                <h6 class="card-text" style="font-size: 30px; font-weight:bolder">250</h6>
                                <p class="card-text">Pembahasan Soal</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('icon/sharp_create_black_18dp.png') }}">
                            <div class="text-right">
                                <h6 class="card-text" style="font-size: 30px; font-weight:bolder">30</h6>
                                <p class="card-text">Latihan & Tryout</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('icon/sharp_sticky_note_2_black_18dp.png') }}">
                            <div class="text-right">
                                <h6 class="card-text" style="font-size: 30px; font-weight:bolder">4</h6>
                                <p class="card-text">Catatan Kebutuhan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="alert alert-danger" role="alert">
                Ada Latihan & Tryout yang belum dikerjakan
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">TKP - TKP 21</h5>
                            <div class="text-right">
                                <button type="button" class="btn btn-outline-primary">KERJAKAN</button>
                            </div>
                            <p class="card-text">
                                20 Menit - 15 Soal
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">TWK - TWK 19</h5>
                            <div class="text-right">
                                <button type="button" class="btn btn-outline-primary">KERJAKAN</button>
                            </div>
                            <p class="card-text">
                                20 Mnit - 15 Soal
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">TIU - TIU 20</h5>
                            <div class="text-right">
                                <button type="button" class="btn btn-outline-primary">KERJAKAN</button>
                            </div>
                            <p class="card-text">
                                20 Menit - 15 Soal
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">TWK -TWK 20</h5>
                            <div class="text-right">
                                <button type="button" class="btn btn-outline-primary">KERJAKAN</button>
                            </div>
                            <p class="card-text">
                                20 Menit - 15 Soal
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection