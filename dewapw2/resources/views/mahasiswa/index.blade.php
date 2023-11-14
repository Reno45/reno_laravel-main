@extends('layout.main')
@section('title', 'Index')

@section('content')
    
    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Mahasiswa</h4>
                <p class="card-description">
                    Ini Adalah Mahasiswa MDP <code>.table</code>
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                           <tr>
                             <th>Nama Mahasiswa</th>
                           </tr>  
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $item)
                            <tr>
                                <td>{{$item['npm']}}</td>
                                <td>{{$item['nama']}}</td>
                                <td>{{$item['tmpt_lahir']}}</td>
                                <td>{{$item['tgl_lahir']}}</td>
                                <td><img src="images/{{ $item['foto']}}" class="rounded-circle" width="70px" /></td>
                                <td>{{$item['prodi']['nama']}}</td>
                                <td>{{$item['prodi']['fakulitas']['nama']}}</td>
                            </tr>

        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
              </div>
            </div>
            </div>
            @endsection




