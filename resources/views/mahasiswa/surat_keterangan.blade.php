@extends('layout.layout')
@section('content')


<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Surat Keterangan KP
         </button>
         <br>
         <table class="table">
          <tr>
               <th>NIM</th>
               <th>Lembaga</th>
               <th>Alamat</th>
               <th>Pimpinan</th>
               <th>Tools</th>
               <th>Nomor Telepon</th>
               <th>Nomor Fax</th>
               <th>Spesifikasi</th>
               <th>Tools</th>
               <th>Surat Diterima KP</th>
               <th>Status PKP</th>
               <th>Edit</th>
          </tr>
          @foreach ($data_suratkp as $suratkp)
              <tr>
                  <td>{{$suratkp->NIM}}</td>
                  <td>{{$suratkp->lembaga}}</td>
                  <td>{{$suratkp->alamat}}</td>
                  <td>{{$suratkp->pimpinan}}</td>
                  <td>{{$suratkp->tools}}</td>
                  <td>{{$suratkp->no_telp}}</td>
                  <td>{{$suratkp->fax}}</td>
                  <td>{{$suratkp->spek}}</td>
                  <td>{{$suratkp->tools}}</td>
                  <td>{{$suratkp->dokumen}}</td>
                  <td>{{$suratkp->status_skp}}</td>
                  <td><a href="/editskp/{{$suratkp->id}}" class="btn btn-warning btn-sm">update</a></td>
              </tr>
          @endforeach
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Form Surat Pra Kerja Praktik</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="modal-body">
    <form action="/surat_ket/tambahsuratkp" method="POST">
      {{csrf_field()}}
      <div class="form-group">
                                        <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">NIM</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="nim" id="username" placeholder="Masukkan NIM Anda" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Lembaga</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="lembaga" id="username" placeholder="Masukkan Lembaga Anda" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Alamat</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="alamat" id="username" placeholder="Masukkan Alamat Kantor" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Pimpinan</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="pimpinan" id="username" placeholder="Masukkan Nama Pimpinan" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Nomor Telepon</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="no_telp" id="username" placeholder="Masukkan No.telp Kantor" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Nomor Fax</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="fax" id="username" placeholder="Masukkan Nomor Fax" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Spesifikasi</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="spek" id="username" placeholder="Masukkan Spesifikasi" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Tools</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="tools" id="username" placeholder="Masukkan Tools Anda" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Input Surat Diterima KP</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="file" id="myfile" name="dokumen">  
                                            </div>
                                        </div>
                                    </div>
                                  

                                    
      <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    

@endsection