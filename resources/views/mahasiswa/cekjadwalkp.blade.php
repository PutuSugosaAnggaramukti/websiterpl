@extends('layout.layout')
@section('content')

<h1>Jadwal Kerja Praktik</h1>
<br>
         <br>
         <table class="table">
          <tr>
               <th>tgl mulai</th>
               <th>tgl selesai</th>
              
          </tr>
          @foreach ($data_jadwalkp as $jadwalkp)
              <tr>
                  <td>{{$jadwalkp->tgl_mulai}}</td>
                  <td>{{$jadwalkp->tgl_selesai}}</td>
              </tr>
          @endforeach

@endsection