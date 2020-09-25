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
              <h1 class="m-0 text-dark">Surat Masuk</h1>
              
<!-- Alert jika Surat Berhasil diinputkan -->
              <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Surat Berhasil diinputkan</h5>
                </div>

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
    <section class="content">
    <div class="container-fluid">
      	<div class="row">
            <div class="col-lg-12">
                <div class="card">
              		<div class="card-header">
                	<h3 class="card-title">Tambah Surat Masuk</h3>
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
                      <input type="date" class="form-control" id="tgldokumen" placeholder="Tanggal Surat">
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
                      <label for="sumbersurat" class="col-form-label">Sumber Surat</label>
                    </div> 
                     <div class="col-sm-4">
                      <input type="text" class="form-control" id="sumbersurat" placeholder="Asal Surat Masuk dari ....">
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
                      <label for="nosurat" class="col-form-label">Tanggal Masuk</label>
                    </div> 
                     <div class="col-sm-4">
                       <input type="text" class="form-control" id="Tglmasuk" placeholder="Date Now/timestamp" disabled>
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
                      <label for="format" class="col-form-label">Format</label>
                    </div> 
                    <div class="col-sm-4">
                      <select class="form-control">
                        <option>- Pilih Format - </option>
                        <option value="2">Bandel</option>
                        <option value="3">Buku</option>
                        <option value="4">Laporan</option>
                        <option value="5">Akta</option>
                        <option value="6">Daftar</option>
                        <option value="7">Buletin</option>
                        <option value="8">Artikel</option>
                        <option value="9">Foto</option>
                        <option value="10">Naskah</option>
                        <option value="11">Data</option>
                        <option value="12">Surat</option>
                        <option value="13">Liturgi</option>
                        <option value="14">Kaset</option>
                        <option value="15">Proposal</option>
                        <option value="16">Jadwal</option>
                        <option value="17">Gambar</option>
                        <option value="18">Formulir</option>
                        <option value="19">Majalah</option>
                        <option value="20">Koran</option>
                        <option value="21">Kliping</option>
                        <option value="22">Telegram</option>
                        <option value="23">Memo</option>
                        <option value="24">Wasel</option>
                        <option value="25">Kwitansi</option>
                        <option value="26">Bagan</option>
                        <option value="27">makalah</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <label for="Prioritas" class="col-form-label">Prioritas</label>
                    </div> 
                    <div class="col-sm-4">
                      <select class="form-control">\
                        <option>Sangat Penting</option>
                        <option>Segera</option>
                        <option>Biasa</option>
                      </select>  
                    </div>

                    <!--

                      Jika sudah Input Form akan muncul Option Keterangan : 
                      <div class="col-sm-2">
                        <label for="Keterangan" class="col-form-label">Prioritas</label>
                      </div> 
                      <div class="col-sm-4">
                        <select class="form-control">\
                          <option>Dibalas</option>
                          <option>Tidak dibalas</option>
                        </select>  
                      </div>
                      
                      <div class="col-sm-2">
                      <label for="tgldokumen" class="col-form-label">Tanggal Dokumen</label>
                    </div> 
                     <div class="col-sm-4">
                      <input type="date" class="form-control" id="tgldokumen" placeholder="Tanggal Surat">
                    </div>
                    -->

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
