@extends('layout.main')
@section('title', 'mahasiswa')

@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Fakultas</h4>
                    <p class="card-description">
                        Daftar fakultas di Universitas MDP
                    </p>
                    <a href="{{ route('fakultas.create')}}"
                    class="btn btn-primary btn-rounded btn-fw"> Tambah </a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Fakultas</th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                <tbody>
                    @foreach ($fakultas as $item)
                    <tr>
                        <td>{{ $item['nama']}}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('fakultas.edit', $item->id) }}">
                                    <button type="submit" class="btn btn-success btn-rounded mx-3">Edit</button>
                                </a>

                                <form method="POST" action="{{ route('fakultas.destroy', $item->id)}}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-rounded">Hapus data</button>
                                </form>
                            </div>
                        </td>
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
