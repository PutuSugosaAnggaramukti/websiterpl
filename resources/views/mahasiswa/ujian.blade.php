@extends('layout.layout')
@section('content')

<h1>Jadwal Ujian Kerja Praktik</h1>
<br>
         <br>
         <table class="table">
          <tr>
               <th>Tanggal Ujian</th>
               <th>Jam Ujian</th>
               <th>Ruang Ujian</th>
               <th>Dosen Pembimbing </th>
               <th>Dosen Penguji</th>
              
          </tr>
          @foreach ($ujian as $ujian)
              <tr>
                  <td>{{$ujian->tgl}}</td>
                  <td>{{$ujian->jam}}</td>
                  <td>{{$ujian->ruang}}</td>
                  <td>{{$ujian->dosbing}}</td>
                  <td>{{$ujian->dosen_penguji}}</td>
              </tr>
          @endforeach

@endsection