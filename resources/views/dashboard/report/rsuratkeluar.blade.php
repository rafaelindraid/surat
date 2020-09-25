@extends('layouts.app2')
@section('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{url('AdminLTE/plugins/daterangepicker/daterangepicker.css')}}">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Laporan Surat Keluar</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Laporan Surat Keluar</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Surat Keluar</h3>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="datatable">
                                <thead>
                                <tr>
                                    <th> Nomor Surat </th>
                                    <th> Nama Surat </th>
                                    <th> Perihal </th>
                                    <th> Tujuan </th>
                                    <th> Tanggal </th>
                                </tr>
                                </thead>
                                 <div class="panel-body">
                                  <label>Filter Berdasarkan Tanggal :</label>

                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="far fa-calendar-alt"></i>
                                        </span>
                                      </div>
                                      <input type="text" class="form-control float-right" id="reservation">
                                    </div>

                                    <label for="filter-periode"> Filter Berdasarkan Periode : </label>

                                    <select name="filter_periode" id="filter_periode" class="form-control">
                                        <option value=""> Pilih Periode </option>
                                        <option value="7"> 7 Hari Terakhir </option>
                                        <option value="14"> 14 Hari Terakhir </option>
                                        <option value="21"> 21 Hari Terakhwir </option>
                                        <option value="31"> 31 Hari Terakhir </option>
                                        <option value="365"> 365 Hari Terakhir </option>
                                    </select>
                                    <br>
                                        <div class="text">
                                            <a href="#" class="btn btn-sm btn-info">
                                            <i class="fas fa-print"></i> Cetak
                                            </a>
                                            <a href="#" class="btn btn-sm btn-info">
                                            <i class="fas fa-file"></i> Export
                                            </a>
                                        </div>

                                    <br>
                                <tbody>
                                    
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascripts')
<!-- DataTables -->
<script src="{{url('AdminLTE/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{url('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{url('AdminLTE//plugins/daterangepicker/daterangepicker.js')}}"></script>
<script> 
     //Date range picker
    $('#reservation').daterangepicker()
    $ ( function () {
        $('#datatable').DataTable();
    })

</script>

@endsection