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
        <h1 class="m-0 text-dark">Salinan Pangkalan Data</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Pangkalan Data</li>
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
            	<h3 class="card-title">Backup Database</h3>
            	<div class="text-right">
                    <a href="#" class="btn btn-sm btn-info">
		                <i class="fas fa-database "></i> Backup
		            </a>
		          </div>
        	</div>

         	<table class="table table-condensed">
         		
                  <thead>

                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 400px">Tanggal</th>
                      <th style="width: 100px">File Size</th>
                      <th style="width: 400px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>16 Maret 2020, 11:31</td>
                      <td> 25.73 MB</td>
                      <td><div class="text-left">
                    		<a href="#" class="btn btn-sm btn-default">
		                      <i class="fas fa-download "></i> Download
		                    </a>
		                    <a href="#" class="btn btn-sm btn-danger">
		                      <i class="fas fa-trash"></i> Delete
		                    </a>
                  			</div>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>14 Maret 2020, 11:31</td>
                      <td> 25.73 MB</td>
                      <td><div class="text-left">
                    		<a href="#" class="btn btn-sm btn-default">
		                      <i class="fas fa-download "></i> Download
		                    </a>
		                    <a href="#" class="btn btn-sm btn-danger">
		                      <i class="fas fa-trash"></i> Delete
		                    </a>
                  			</div>
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>13 Maret 2020, 11:31</td>
                      <td> 25.73 MB</td>
                      <td><div class="text-left">
                    		<a href="#" class="btn btn-sm btn-default">
		                      <i class="fas fa-download "></i> Download
		                    </a>
		                    <a href="#" class="btn btn-sm btn-danger">
		                      <i class="fas fa-trash"></i> Delete
		                    </a>
                  			</div>
                      </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>12 Maret 2020, 11:31</td>
                      <td> 25.73 MB</td>
                      <td><div class="text-left">
                    		<a href="#" class="btn btn-sm btn-default">
		                      <i class="fas fa-download "></i> Download
		                    </a>
		                    <a href="#" class="btn btn-sm btn-danger">
		                      <i class="fas fa-trash"></i> Delete
		                    </a>
                  			</div>
                      </td>
                    </tr>
                  </tbody>
                </table>
        </div>
        <div class="card">
        	<div class="card-header">
            	<h3 class="card-title">Import Database</h3>
        	</div>
         	<div class="card-body pad">
         		<form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">File input Database(*.sql)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Restore Database</button>
                </div>
              </form>
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