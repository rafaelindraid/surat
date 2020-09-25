@extends('layouts.app2')
@section('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('AdminLTE/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{url('AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('AdminLTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Surat Keluar</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Surat Keluar</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
  <div class="container-fluid">
   <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
         <h3 class="card-title">Tambah Surat Keluar</h3>
       </div>
       <div class="card-body">
         <form class="form-horizontal">
          <div class="card-body">
            <div class="form-group row">
              <label for="namasurat" class="col-sm-1 col-form-label">Tanggal Surat</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Auto Generate date now" disabled="">
              </div>
              <label for="inputEmail3" class="col-sm-1 col-form-label">Jenis Surat</label>
              <div class="col-sm-3">
                <select class="form-control">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-1 col-form-label">Perihal</label>
              <div class="col-sm-3">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Isikan Prihal disini....">
              </div>
              <label for="inputEmail3" class="col-sm-1 col-form-label">Nomorsurat</label>
              <div class="col-sm-3">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Auto Generate" disabled>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-1 col-form-label">Bidang</label>
              <div class="col-sm-3">
                <select class="form-control">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
              <label for="inputEmail3" class="col-sm-1 col-form-label">User</label>
              <div class="col-sm-3">
                <input type="email" class="form-control" id="inputEmail3" placeholder="PIC">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-1 col-form-label">Sub Bidang</label>
              <div class="col-sm-3">
                <select class="form-control">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
              <label for="inputEmail3" class="col-sm-1 col-form-label">Prioritas</label>
              <div class="col-sm-3">
                <select class="form-control">
                  <option>Sangat Segera</option>
                  <option>Segera</option>
                  <option>Biasa</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-1 col-form-label">Isi Surat</label>
              <div class="col-sm-8">
               <textarea class="form-control" rows="4" placeholder="Isi Surat Masuk"></textarea>
             </div>
           </div>
           
           <div class="form-group row">
            <label for="exampleInputFile" class="col-form-label col-sm-1">File input</label>
            <div class="input-group col-sm-8">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-1 col-form-label">Pengiriman</label>
            <div class="col-sm-3">
              <select class="form-control">
                <option>Email</option>
                <option>Pos</option>
                <option>JNE</option>
                <option>JNT</option>
                <option>diantar</option>
                <option>diambil</option>
              </select>
            </div>
            <label for="inputEmail3" class="col-sm-1 col-form-label">Penerima</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan Email/No Resi/Penerima">
            </div>

          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-info">Simpan</button>
          <button type="submit" class="btn btn-default float-right">Batal</button>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
    
    <!-- /.card-footer -->
  </form>
</div>
</div>
</div>
</div>
</div>

</section>
@endsection
