@extends('layouts.app2')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-mail-bulk"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Surat Masuk</span>
                <span class="info-box-number">
                  3
                  <small>Pesan Baru</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-pen"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Konsep</span>
               <span class="info-box-number">
                  3
                  <small>Pesan Baru</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Disposisi Masuk</span>
                <span class="info-box-number">
                  3
                  <small>Pesan Baru</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Bagian</span>
                <span class="info-box-number">
                  3
                  <small>Bagian</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">REKAPITULASI BULANAN</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Rekap: 1 Jan, 2020 - 30 Jul, 2020</strong>
                    </p>

                    <div class="chart">
                      <!-- Sales Chart Canvas -->
                      <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Goal Completion</strong>
                    </p>

                    <div class="progress-group">
                      Surat masuk
                      <span class="float-right"><b>160</b>/200</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      Disposisi Masuk
                      <span class="float-right"><b>310</b>/400</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Surat Keluar</span>
                      <span class="float-right"><b>480</b>/800</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      Disposisi Keluar
                      <span class="float-right"><b>250</b>/500</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->           
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
            <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Surat Masuk</h3>
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                           <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left"><a href="#">Universitas Kristen Duta Wacana</a></span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                <span class="direct-chat float-left">Laporan Penerimaan Beasiswa</span>
                            </div>
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left"><a href="#">Universitas Kristen Duta Wacana</a></span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                <span class="direct-chat float-left">Laporan Penerimaan Beasiswa</span>
                            </div>
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left"><a href="#">Universitas Kristen Duta Wacana</a></span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                <span class="direct-chat float-left">Laporan Penerimaan Beasiswa</span>
                            </div>
                        </div>

                      <!-- /.card-body -->
                      <div class="card-footer text-center">
                    <a href="javascript::">Lihat Semua Surat</a>
                  </div>
                    </div>
            <!-- /.card -->
                </div>
                <div class="col-md-4">
            <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Surat Keluar</h3>

                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                            </div>
                        </div>

                        <div class="card-body">
                           <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left"><a href="#">Universitas Kristen Duta Wacana</a></span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                <span class="direct-chat float-left">Laporan Penerimaan Beasiswa</span>
                            </div>
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left"><a href="#">Universitas Kristen Duta Wacana</a></span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                <span class="direct-chat float-left">Laporan Penerimaan Beasiswa</span>
                            </div>
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left"><a href="#">Universitas Kristen Duta Wacana</a></span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                <span class="direct-chat float-left">Laporan Penerimaan Beasiswa</span>
                            </div>
                        </div>
                      <!-- /.card-body -->
                      <div class="card-footer text-center">
                    <a href="javascript::">Lihat Semua Surat Keluar</a>
                  </div>
                    </div>
            <!-- /.card --> 
                </div>

                <div class="col-md-4">
            <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Log Aktifitas Terakhir</h3>

                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                            </div>
                        </div>

                        <div class="card-body">
                            Log aktivitas
                        </div>
                      <!-- /.card-body -->
                      <div class="card-footer text-center">
                    <a href="javascript::">Lihat Semua Log</a>
                  </div>
                    </div>
            <!-- /.card -->
                </div>

            </div>
        </div>

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
@endsection
@section('javascripts')
<script src="{{url('AdminLTE/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{url('AdminLTE/dist/js/pages/dashboard2.js')}}"></script>
@endsection