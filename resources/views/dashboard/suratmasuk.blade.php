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
        <h1 class="m-0 text-dark">Surat Masuk</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Surat Masuk</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-12 ">
        <div class="card table-responsive">
          <div class="card-header">
            <h3 class="card-title">Daftar Surat Masuk</h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr class=" text-center">
                  <th>Tgl. Terima</th>
                  <th>Nomor Surat</th>
                  <th>Perihal<br>Sumber Surat</th>
                  <th>Aksi</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($liat as $no => $item)
                <tr>
                  <td>{{ $item->tgl }}</td>
                  <td>{{ $item->kode }}</td>
                  <td>{{ $item->perihal }}<br>
                      dari : {{ $item->sumber }}
                    <div class="text-left">
                      <a href="#" class="btn btn-sm bg-warning"> <i class="fas fa-paperclip"></i>Lampiran
                      </a>
                    </div>
                  </td>
                  <td>
                    <div class="text-left">
                      <div class="text-left">
                       <a href="#" class="btn btn-sm bg-warning" data-toggle="modal" data-target="#modal-edit">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="#" class="btn btn-sm bg-teal" data-toggle="modal" data-target="#modal-detail">
                        <i class="fas fa-eye"></i>
                      </a>
                      <a href="#" class="btn btn-sm bg-danger" data-toggle="modal" data-target="#modal-delete">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>                             
                  </div>
                </td>
                <td>
                  <button type="button" class="btn btn-sm btn-block bg-gradient-success"><i class="fas fa-eye"> Baca</i></button>
                  <button type="button" class="btn btn-sm btn-block bg-gradient-info"><i class="fas fa-thumbs-up"> Terdisposisi</i></button>
                </td>
              </tr>
               @endforeach
              <tr>
                <td>20/10/2020</td>
                <td>SM/2020/B1/SB101/2
                </td>
                <td>Permohonan Beasiswa<br>
                  Dari     : GKJ Surakarta
                  <div class="text-left">
                    <a href="#" class="btn btn-sm bg-warning"> <i class="fas fa-paperclip"></i>Lampiran
                    </a>
                  </div>
                </td>
                <td>
                  <div class="text-left">
                    <div class="text-left">
                      <a href="#" class="btn btn-sm bg-warning" data-toggle="modal" data-target="#modal-edit">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="#" class="btn btn-sm bg-teal" data-toggle="modal" data-target="#modal-detail">
                        <i class="fas fa-eye"></i>
                      </a>
                      <a href="#" class="btn btn-sm bg-danger" data-toggle="modal" data-target="#modal-delete">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>                             
                  </div>
                </td>
                <td>
                  <button type="button" class="btn btn-sm btn-block bg-gradient-gray"><i class="fas fa-eye"> Belum Dibaca</i></button>
                  <button type="button" class="btn btn-sm btn-block bg-gradient-danger"><i class="fas fa-thumbs-up">Disposisikan</i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Surat</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div>
              <label for="nomorsurat">Nomor Surat</label>
              <input type="text" class="form-control" id="recipient-name" disabled placeholder="SM/2020/B1/SB101/2">
            </div>
            <div>
              <label for="tanggaldokumen">Tanggal Dokumen</label>
              <input type="date" class="form-control" id="tgldokumen" >
            </div>
            <div>
              <label for="namasurat">Nama Surat</label>
              <input type="text" class="form-control" id="recipient-name" placeholder="Nama Surat">
            </div>
            <div>
              <label for="perihal">Perihal</label>
              <input type="text" class="form-control" id="recipient-name" placeholder="Perihal">
            </div>
            <div>
              <label for="sumber">Sumber</label>
              <input type="text" class="form-control" id="recipient-name" placeholder="Asal Surat">
            </div>
            <div>
              <label for="isi">Isi Surat</label>
              <textarea type="text" class="form-control" id="recipient-name" placeholder="Isi Surat"> </textarea>
            </div>
            
            <div>
              <label for="nomorsurat">Tgl Masuk</label>
              <input type="text" class="form-control" id="recipient-name" disabled placeholder="19/10/2020">
            </div>
          </form>
          
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-default float-right bg-gradient-info" data-dismiss="modal">Simpan</button>
        </div>
      </div>




      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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
            <div class="col-lg6">
              <p>Tanggal</p>
              <p>Nomor Surat </p>
              <p>Perihal </p>
              <p>Asal Surat</p>
              <p>Isi Surat</p>
              <p>Prioritas</p>
              <p>Format</p>
              <p>Admin</p>
            </div>  
            <div class="col-lg6">
              <p>: 19/10/2020</p>
              <p>: SM/2020/B1/SB101/2</p>
              <p>: Permohonan Beasiswa</p>
              <p>: GKJ Salatiga</p>
              <p>: Permohonan Beasiswa atas nama</p>
              <p>: Prioritas</p>
              <p>: Bandel</p>
              <p>: Nama Admin</p>
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

  <div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hapus</h4>
        </div>
        <div class="modal-body">
          Apakah Anda Yakin akan menghapus item ini ?
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
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