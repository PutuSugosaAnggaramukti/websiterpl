@extends('layout.dosen')
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
          @foreach ($data_jadwal as $jadwal)
              <tr>
                  <td>{{$jadwal->tgl}}</td>
                  <td>{{$jadwal->jam}}</td>
                  <td>{{$jadwal->ruang}}</td>
                  <td>{{$jadwal->dosbing}}</td>
                  <td>{{$jadwal->dosen_penguji}}</td>
              </tr>
          @endforeach

@endsection