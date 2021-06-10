@extends('layout.dosen')
@section('content')

<h1>Daftar Bimbingan Mahasiswa</h1>
<br>
         <br>
         <table class="table">
          <tr>
               <th>NIMn</th>
               <th>Nama</th>
               <th>Semester</th>
              
          </tr>
          @foreach ($data_bimbingan as $bimbingan)
              <tr>
                  <td>{{$bimbingan->nim}}</td>
                  <td>{{$bimbingan->nama}}</td>
                  <td>{{$bimbingan->semester}}</td>
              </tr>
          @endforeach

@endsection