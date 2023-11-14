@extends('layout.main')
@section('title', 'Fakulitas')

@section('content')


    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-title">Tambah Prodi</h4>
                    <p class="card-description">
                        Ini Adalah Formulir Tambah Prodi MDP 
                    </p>
                    <form class="forms-sample" method="POST" action="{{route('mahasiswa.store')}}" enctype="multipart/form-data">       
                        @csrf
                    <div class="form-group">
                      <label for="nama">NPM</label>
                      <input type="text" class="form-control" name="npm" placeholder="NPM Mahasiswa">
                      <label for="nama">Nama Mahasiswa</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama Mahasiswa">
                      <label for="nama">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tmpt_lahir" placeholder="Tempat Lahir">
                      <label for="nama">Tanggal Lahir</label>
                      <input type="text" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
                      <label for="nama">Foto</label>
                      <input type="text" class="form-control" name="foto" placeholder="Foto">
                      <br>
                      <label for="nama">NPM</label>
                      <select name="prodi_id" class="from-control"></select>
                      <option selected>Pilih</option>
                      @foreach ($prodi as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>

                      @endforeach  

                      @error('nama')
                      <label for="text-danger">{{$message}}
                    </label>
                          
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{url('fakultas')}}" class="btn btn-light">Batal</a>
                  </form>


                </div>
            </div>
         </div>
    </div>
@endsection
            
