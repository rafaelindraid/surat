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
            <h3 class="card-title">Tambah Surat Kelar</h3>
          </div>
          <div class="card-body">
            <form class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">

                  <div class="col-sm-2">
                    <label for="nomorsurat" class="col-form-label">Nomor Surat</label>
                  </div> 
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nomorsurat" placeholder="Auto Generate -Format:SM/2020/B1/SB101/1" disabled>
                  </div>

                  <div class="col-sm-2">
                    <label for="tgldokumen" class="col-form-label">Tanggal Dokumen</label>
                  </div> 
                  <div class="col-sm-4">
                    <input type="date" class="form-control" id="tgldokumen" placeholder="Tanggal Surat" disabled>
                  </div>
                </div>
              <!--
                Bidang dan Sub Bidang merupakan dependent dropdown
                  Setelah memili Bidang maka sub bidang akan mengikuti bidang yang akan dipilih
                -->
                <div class="form-group row">
                  <div class="col-sm-2">
                    <label for="bidang" class="col-form-label">Bidang</label>
                  </div> 
                  <div class="col-sm-4">
                    <select class="form-control">
                      <option>Pilih Bidang</option>
                      <option>Keesaan</option>
                      <option>Ketenagaan Gereja dan Pengembangannya</option>
                      <option>Studi dan Pengembangan</option>
                      <option>Kesaksian dan Pelayanan</option>
                      <option>Pembinaan Warga Gereja</option>
                      <option>Penatalayanan</option>
                      <option>Sekretariat Umum</option>
                    </select>
                  </div>
                  <div class="col-sm-2">
                    <label for="subbidang" class="col-form-label">Sub Bidang</label>
                  </div> 
                  <div class="col-sm-4">
                    <select class="form-control">\
                      <option>Pilih Subbidang</option>
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>  
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">
                    <label for="namasurat" class="col-form-label">Nama Surat</label>
                  </div> 
                  <div class="col-sm-4">
                   <input type="text" class="form-control" id="namasurat" placeholder="Judul/ Nama Surat">
                 </div>

                 <div class="col-sm-2">
                  <label for="tujuan" class="col-form-label">Tujuan</label>
                </div> 
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="tujuan" placeholder="Tujuan Surat">
                </div>
              </div>                    

              <div class="form-group row">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="col-form-label">Perihal</label>
                </div> 
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="Perihal" placeholder="Perihal Surat ....">
                </div>
                <div class="col-sm-2">
                  <label for="nosurat" class="col-form-label">PIC</label>
                </div> 
                <div class="col-sm-4">
                 <input type="text" class="form-control" id="pic" placeholder="Nama PIC">
               </div>
             </div>
             <div class="form-group row">
              <div class="col-sm-2">
                <label for="isi" class="col-form-label">Isi Surat</label>

              </div>
              <div class="col-sm-10">
                <textarea class="form-control" rows="4" placeholder="Isi Surat Masuk"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">
                <label for="exampleInputFile" class="col-form-label">File input</label>
              </div>
              <div class="col-sm-10">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-2">
                <label for="format" class="col-form-label">Model Pengiriman</label>
              </div> 
              <div class="col-sm-4">
                <select class="form-control">
                  <option>- Metode Pengiriman - </option>
                  <option value="2">Email</option>
                  <option value="3">Pos</option>
                  <option value="4">JNE</option>
                  <option value="5">JNE</option>
                  <option value="6">Langsung</option>
                </select>
              </div>
              <div class="col-sm-2">
                <label for="Prioritas" class="col-form-label">Alamat Email</label>
              </div> 
              <div class="col-sm-4">
                <input type="text" class="form-control" id="email" placeholder="Alamat email"> 
              </div>
            </div>
            <div class="card-footer">
              <div class="text-left">
                <button class="btn btn-lg bg-info float-right" type="submit"><i class="fas fa-save"></i> Simpan</button>
                <button class="btn btn-lg bg-danger " type="reset"><i class="fas fa-window-close"></i> Batal</button>
              </div>                
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</section>
@endsection
