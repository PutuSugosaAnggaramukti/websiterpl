<form action="{{route('prosesviewdata',['id'=> $koor_suratkp->id])}}" method="get">
    {{csrf_field()}}
    <div class="form-group">
                                        <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">NIM</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="nim" id="username" placeholder="Masukkan NIM Anda" readonly value="{{$koor_suratkp->nim}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Lembaga</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="lembaga" id="username" placeholder="Masukkan Lembaga Anda" readonly value="{{$koor_suratkp->lembaga}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Alamat</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="alamat" id="username" placeholder="Masukkan Alamat Kantor" readonly value="{{$koor_suratkp->alamat}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Pimpinan</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="pimpinan" id="username" placeholder="Masukkan Nama Pimpinan" readonly value="{{$koor_suratkp->pimpinan}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Nomor Telepon</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="no_telp" id="username" placeholder="Masukkan No.telp Kantor" readonly value="{{$koor_suratkp->no_telp}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Nomor Fax</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="fax" id="username" placeholder="Masukkan Nomor Fax" readonly value="{{$koor_suratkp->fax}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Spesifikasi</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="spek" id="username" placeholder="Masukkan Spesifikasi" readonly value="{{$koor_suratkp->spek}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Tools</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="tools" id="username" placeholder="Masukkan Tools Anda" readonly value="{{$koor_suratkp->tools}}"/>
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
                                    <div class="form-group">
                                         <label for="exampleInputEmail1">Validasi : </label>
                                         <select class="selectpicker form-control" name="status_skp">
                                         <option>Setuju</option>
                                         <option>Tidak Setuju</option>
                                     </select>
                                   </div>

                                    
      <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
