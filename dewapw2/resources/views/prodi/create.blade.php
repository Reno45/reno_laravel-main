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
                    <form class="forms-sample" method="POST" action="{{route('prodi.store')}}">
                        @csrf
                    <div class="form-group">
                      <label for="nama">Nama Prodi</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama Prodi">
                      @error('nama')
                      <label for="text-danger">{{$message}}
                    </label>
                          
                      @enderror
                    </div>
                    <div class="from-group">
                        <label for="fakulitas_id">Nama Fakultas</label>
                        <select name="fakulitas_id" class="from-control">
                            <option value="">Pilih</option>
                            @foreach ($fakulitas as $item)
                            <option value="{{$item->id}}">{{ $item->nama }}</option>
                            
                            @endforeach
                        </select>
                         @error('fakulitas_id')
                      <label for="text-danger">{{$message}}
                    </label>
                          
                      @enderror

                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{url('prodi')}}" class="btn btn-light">Batal</a>
                  </form>

                </div>
            </div>
         </div>
    </div>
@endsection
            
