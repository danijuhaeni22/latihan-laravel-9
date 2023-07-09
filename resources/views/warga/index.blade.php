@extends('layouts.app')
@section('title')
    Warga
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Warga') }}</div>

                    <div class="card-body">
                        <a class="btn btn-primary" href="/warga/create">Add Warga</a>

                        <table class="table table-hovered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>No KK</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($warga as $w)
                                    <tr>
                                        <td>{{ $w->nama }}</td>
                                        <td>{{ $w->nik }}</td>
                                        <td>{{ $w->no_kk }}</td>
                                        <td>{{ $w->jenis_kelamin }}</td>
                                        <td>{{ $w->alamat }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <form action="/warga/{{ $w->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="btn btn-warning"
                                                        href="/warga/{{ $w->id }}/edit">Edit</a>
                                                    <input class="btn btn-danger" type="submit" value="Delete">
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

    <div class="container mt-4">


    </div>
@endsection
