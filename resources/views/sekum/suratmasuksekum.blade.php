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
        <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Daftar Surat Masuk</h3>
                  </div>
                    <div class="card-body table-responsive">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Tgl. Terima</th>
                            <th>Nomor Surat</th>
                            <th>Perihal</th>
                            <th>Pengirim, Penerima</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td>20/10/2020</td>
                              <td>SM/2020/B1/SB101/1
                              </td>
                              <td>Seminar dan Lokakarya<br>
                              <div class="text-left">
                                  <a href="#" class="btn btn-sm bg-warning"> <i class="fas fa-paperclip"></i>Lampiran
                                  </a>
                               </div>
                              </td>
                              <td>Dari     : Sinode GMIM<br>
                                  Penerima : Bapelsin GKJ
                              </td>
                              
                              <td>
                              <button type="button" class="btn bt-xm btn-block bg-gradient-danger">Disposisikan</button>
                              </td>
                              <td>
                                <div class="text-left">
                                  <a href="#" class="btn btn-sm bg-warning">
                                    <i class="fas fa-eye"></i>
                                  </a>
                                  <a href="#" class="btn btn-sm bg-danger" data-toggle="modal" data-target="#modal-disposisi">
                                    <i class="fas fa-thumbs-up"></i>
                                  </a>                                  
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>20/10/2020</td>
                              <td>SM/2020/B1/SB101/1
                              </td>
                              <td>Seminar dan Lokakarya<br>
                              <div class="text-left">
                                  <a href="#" class="btn btn-sm bg-warning"> <i class="fas fa-paperclip"></i>Lampiran
                                  </a>
                               </div>
                              </td>
                              <td>Dari     : Sinode GMIM<br>
                                  Penerima : Bapelsin GKJ
                              </td>
                              
                              <td>
                              <button type="button" class="btn bt-xm btn-block bg-gradient-success">Terdisposisi</button>
                              </td>
                              <td>
                                <div class="text-left">
                                  <a href="#" class="btn btn-sm bg-warning">
                                    <i class="fas fa-eye"></i>
                                  </a>
                                  <a href="#" class="btn btn-sm bg-danger" data-toggle="modal" data-target="#modal-disposisi">
                                    <i class="fas fa-thumbs-up"></i>
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
        <div class="modal fade" id="modal-disposisi" data-target="#modal-xl">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Disposisikan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <H4>Detail Surat</H4>
                <div class="row">
                  <div class="col-md-4">
                    <label class="col-form-label">Tanggal Surat</label>
                  </div>
                  <div class="col-md-4">
                      <p>: 19/10/2020</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label class="col-form-label">Perihal</label>
                  </div>
                  <div class="col-md-4">
                      <p>: 19/10/2020</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label class="col-form-label">Asal Surat</label>
                  </div>
                  <div class="col-md-4">
                      <p>: 19/10/2020</p>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-4">
                    <label class="col-form-label">Isi Surat</label>
                  </div>
                  <div class="col-md-4">
                      <p>: 19/10/2020</p>
                  </div>
                </div> 
                  <div class="row">
                  <div class="col-md-4">
                    <label class="col-form-label">Prioritas</label>
                  </div>
                  <div class="col-md-4">
                      <p>: 19/10/2020</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label class="col-form-label">Admin</label>
                  </div>
                  <div class="col-md-4">
                      <p>: 19/10/2020</p>
                  </div>
                </div>
              </div>

            <div class="col-lg-6">
              <H4>Form Disposisi Surat</H4>
              <div class="form-group row">
                <div class="col-md-4">
                      <label for="penerima" class="col-form-label">Penerima Surat</label>
                </div> 
                <div class="col-md-6">
                  <input type="text" class="form-control" id="penerima" placeholder="Penerima Surat">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-4">
                      <label for="instruksi" class="col-form-label">Instruksi</label>
                </div> 
                <div class="col-md-6">
                  <select class="form-control">
                        <option>Arsipkan</option>
                        <option>Ditindaklanjuti</option>
                        <option>Ditanggapi Tertulis</option>
                        <option>Siapkan makalah/sambutan/presentasi sesuai tema</option>
                        <option>Koordinasikan</option>
                        <option>Diwakili & Laporkan Haislnya</option>
                        <option>Dihadiri & laporkan Hasilnya</option>
                        <option>Disiapkan Surat/Memo Dinas</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-4">
                    <label for="nomorsurat" class="col-form-label">Isi Surat</label>
                </div> 
                <div class="col-md-6">
                  <textarea class="form-control" rows="3" placeholder="Isi Surat ..."></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-4">
                      <label for="nomorsurat" class="col-form-label">Kecepatan</label>
                </div> 
                <div class="col-md-6"><select class="form-control">
                  <option>Sangat Cepat</option>
                  <option>Segera</option>
                  <option>Biasa</option>
                  <option>Koordinasikan</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-4">
                    <label for="nomorsurat" class="col-form-label">Tanggal Selesai</label>
                </div> 
                <div class="col-md-6">
                  <input type="date" class="form-control" id="nomorsurat" placeholder="Auto Generate -Format:SM/2020/B1/SB101/1">
                </div>
              </div>

            </div>            
              
        
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Simpan</button>
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