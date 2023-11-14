@extends('layout.main')
@section('title', 'Prodi')

@section('content')


    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Prodi</h4>
                <p class="card-description">
                    Ini Adalah Prodi MDP <code>.table</code>
                </p>
                <a href="{{route('prodi.create')}}" class="btn btn-primary btn-rounded btn-fw">Tambah</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                           <tr>
                             <th>Nama Prodi</th>
                             <th>Nama Fakultas</th>
                           </tr>  
                        </thead>
                        <tbody>
                             @foreach ($prodi as $item)
                                <tr>
                                    <td>{{$item['nama']}}</td>
                                    <td>{{$item['fakulitas']['nama']}}</td>
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
            



