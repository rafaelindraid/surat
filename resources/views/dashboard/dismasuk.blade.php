@extends('layouts.app2')
@section('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">

@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Disposisi</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Misposisi Masuk</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Disposisi Masuk</h3>
          </div>
          <div class="card-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Asal Surat <br>Isi Disposisi</th>
                  <th>instruksi<br>Perihal</th>
                  <th>Kecepatan<br> Deadline</th>
                  <th>Aksi</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>GKJ Brayat Kinasih<br>Segera kirimkan surat untuk....</td>
                  <td>Ditindaklanjuti<br>
                    Perihal : Rapat Evaluasi<br>
                    <div class="text-left">
                      <a href="#" class="btn btn-sm bg-warning"> <i class="fas fa-paperclip"></i>Lampiran
                      </a>
                    </div>
                  </td>
                  
                  <td><strong>Sangat Segera</strong><br>
                    06 April 2020; 10:00:00
                  </td>
                  <td>
                   <div class="text-left">
                    <a href="#" class="btn btn-sm bg-teal" data-toggle="modal" data-target="#modal-detail">
                      <i class="fas fa-th-large"> Detail</i>
                    </a>
                  </div>
                </td>
                <td>
                   <div class="text-left">
                  <a href="#" class="btn btn-sm bg-success" data-toggle="modal" data-target="#modal-status">
                      <i class="fas fa-check-square"></i>
                    </a>
                  </div>
                </td>
                </tr>

                <tr>
                  <td>GKJ Brayat Kinasih<br>Segera kirimkan surat untuk....</td>
                  <td>Ditindaklanjuti<br>
                    Perihal : Rapat Evaluasi<br>
                    <div class="text-left">
                      <a href="#" class="btn btn-sm bg-warning"> <i class="fas fa-paperclip"></i>Lampiran
                      </a>
                    </div>
                  </td>
                  <td><strong>Sangat Segera</strong><br>
                    06 April 2020; 10:00:00
                  </td>
                  <td>
                   <div class="text-left">
                    <a href="#" class="btn btn-sm bg-teal" data-toggle="modal" data-target="#modal-detail">
                      <i class="fas fa-th-large"> Detail</i>
                    </a>
                  </div>
                </td>
                <td>
                  <div class="text-left">
                  <a href="#" class="btn btn-sm bg-danger" data-toggle="modal" data-target="#modal-status">
                      <i class="fas fa-check-square"></i>
                    </a>
                  </div>
                </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal-detail">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detail Surat</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md6">
              <p>Tgl Surat </p> <!-- tanggal surat dari admin/input -->
              <p>Nomor Surat</p>
              <p>Diterukan kepada </p>
              <p>Kecepatan</p>
              <p>Isi Rekomendasi</p>
              <br>
              <p>Telah diperiksa</p>
            </div>  
            <div class="col-md6">
              <p>: 12 April 2020</p>
              <p>: SK/2020/B1/SB102/1001</p> <!-- belum dikirimkan/belum diacc maka tidak muncul -->
              <p>: Admin</p>
              <p>: Biasa</p>
              <p>: Segera Buat Surat Tugas Untuk<br>
              Pdt. Aris Widaryanto</p>
              <p>: Pdt. Sundoyo(sekum)</p> <!-- belum diacc/divalidasi maka tidak muncul -->
            </div>  
          </div>
          

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


  <div class="modal fade" id="modal-status">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Status</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md6">
             <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch3">
                      <label class="custom-control-label" for="customSwitch3">Klik Untuk Merubah Status menjadi Telah Selesai</label>
                    </div>
                  </div>
            </div>  
          </div>
          

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</section>
<!-- DataTables -->
@endsection

@section('javascripts')
<!-- DataTables -->
<script src="{{url('AdminLTE/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{url('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#example2").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

@endsection