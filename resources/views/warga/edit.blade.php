@extends('layouts.app')

@section('title')
    Edit Data
@endsection

@section('content')
    <div class="container">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            <h1>Edit Data</h1>

                            <form action='/warga/{{ $warga->id }}' method="POST">
                                @method('put')
                                @csrf

                                <div class="container">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" aria-describedby="emailHelp"
                                        value="{{ $warga->nama }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">NIK</label>
                                    <input type="text" class="form-control" name="nik" aria-describedby="emailHelp"
                                        value="{{ $warga->nik }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No. KK</label>
                                    <input type="text" class="form-control" name="no_kk" aria-describedby="emailHelp"
                                        value="{{ $warga->no_kk }}">
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" name="jenis_kelamin">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L" @if ($warga->jenis_kelamin == 'L') selected @endif>Laki-Laki
                                        </option>
                                        <option value="P" @if ($warga->jenis_kelamin == 'P') selected @endif>Perempuan
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows="5">{{ $warga->alamat }}</textarea>
                                </div>
                                <input type="submit" class="btn btn-info text-white" name="submit" value="Update">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
