<form action="{{route('proseseditprakp',['id'=> $data_pkp->id])}}" method="GET">
    {{csrf_field()}}
    <div class="form-group">
                                      <div class="form-group">
                                      <label for="username" class="cols-sm-2 control-label">NIM</label>
                                      <div class="cols-sm-10">
                                          <div class="input-group">
                                              <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                              <input type="text" class="form-control" name="nim" id="username" placeholder="Masukkan NIM Anda" value="{{$data_pkp->nim}}" />
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="username" class="cols-sm-2 control-label">Lembaga</label>
                                      <div class="cols-sm-10">
                                          <div class="input-group">
                                              <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                              <input type="text" class="form-control" name="lembaga" id="username" placeholder="Masukkan Lembaga Anda" value="{{$data_pkp->lembaga}}" />
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="username" class="cols-sm-2 control-label">Alamat</label>
                                      <div class="cols-sm-10">
                                          <div class="input-group">
                                              <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                              <input type="text" class="form-control" name="alamat" id="username" placeholder="Masukkan Alamat Kantor" value="{{$data_pkp->alamat}}" />
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="username" class="cols-sm-2 control-label">Pimpinan</label>
                                      <div class="cols-sm-10">
                                          <div class="input-group">
                                              <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                              <input type="text" class="form-control" name="pimpinan" id="username" placeholder="Masukkan Nama Pimpinan" value="{{$data_pkp->pimpinan}}" />
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="username" class="cols-sm-2 control-label">Nomor Telepon</label>
                                      <div class="cols-sm-10">
                                          <div class="input-group">
                                              <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                              <input type="text" class="form-control" name="no_telp" id="username" placeholder="Masukkan No.telp Kantor" value="{{$data_pkp->no_telp}}" />
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="username" class="cols-sm-2 control-label">Nomor Fax</label>
                                      <div class="cols-sm-10">
                                          <div class="input-group">
                                              <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                              <input type="text" class="form-control" name="fax" id="username" placeholder="Masukkan Nomor Fax" value="{{$data_pkp->fax}}" />
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="username" class="cols-sm-2 control-label">Spesifikasi</label>
                                      <div class="cols-sm-10">
                                          <div class="input-group">
                                              <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                              <input type="text" class="form-control" name="spek" id="username" placeholder="Masukkan Spesifikasi" value="{{$data_pkp->spek}}" />
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="username" class="cols-sm-2 control-label">Tools</label>
                                      <div class="cols-sm-10">
                                          <div class="input-group">
                                              <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                              <input type="text" class="form-control" name="tools" id="username" placeholder="Masukkan Tools Anda" value="{{$data_pkp->tools}}"  />
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="username" class="cols-sm-2 control-label">Input Surat Diterima KP</label>
                                      <div class="cols-sm-10">
                                          <div class="input-group">
                                              <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                              <input type="file" id="myfile" name="dokumen" required value="{{$data_pkp->dokumen}}">  
                                          </div>
                                      </div>
                                  </div>
                                  

                                  
    <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
