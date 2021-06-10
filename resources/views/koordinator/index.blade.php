@extends('layout.layout')
@section('content')
<br>
      <ul class="left">
        <h1>Daftar Pengajuan Surat Keterangan KP</h1> 
      </ul>
    <br>
<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
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
                <td><a href="/kooreditketkp/{{$suratkp->id}}" class="btn btn-warning btn-sm">View Data</a></td>
                
              </tr>
              @endforeach
       </div>

</div>
</div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection