@extends('layouts.master')

@section('title', 'Materi Test Karakteristik Pribadi')

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
                            <h2>Materi Test Karakteristik Pribadi (TKP)</h2>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>

                                <?php $no=0;?>
                                @foreach($materi_tkp as $m)
                                <?php $no++;?>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{$no}}</th>
                                        <td>{{$m->judul}}</td>
                                        <td><a href="/detail_materitkp/{{$m->id}}" class="btn btn-outline-primary">DETAIL</a></td>
                                    </tr>
                                </tbody>
                                @endforeach
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