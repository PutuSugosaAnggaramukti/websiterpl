@extends('layout.dosen')
@section('content')

<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Pengaturan Batas KP 
         </button>
         <br>
         <table class="table">
          <tr>
               <th>Tgl Mulai</th>
               <th>Tgl Selesai</th>
          </tr>
          @foreach ($data_jadwalkp as $jadwalkp)
              <tr>
                  <td>{{$jadwalkp->tgl_mulai}}</td>
                  <td>{{$jadwalkp->tgl_selesai}}</td>
              </tr>
          @endforeach
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Pengaturan Batas KP</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="modal-body">
    <form action="/jadwalkp/tambah" method="POST">
      {{csrf_field()}}
      <div class="form-group">
      <label for="email" class="cols-sm-2 control-label">Tanggal Mulai</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="date" class="form-control" name="tgl_mulai" id="email" />
                                            </div>
                                        </div>
                                    </div>
                                    <label for="email" class="cols-sm-2 control-label">Tanggal Selesai</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="date" class="form-control" name="tgl_selesai" id="email" />
                                            </div>
                                        </div>
                                    </div>
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