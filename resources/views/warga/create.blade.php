@extends('layouts.app')

@section('title')
    Tambah Data
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Warga') }}</div>

                    <div class="card-body">
                        <h1>Add Warga</h1>

                        <form action='/warga/store' method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NIK</label>
                                <input type="text" class="form-control" name="nik" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No. KK</label>
                                <input type="text" class="form-control" name="no_kk" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" name="jenis_kelamin">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="10"></textarea>
                            </div>

                            <input type="submit" class="btn btn-info text-white" name="submit" value="Save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
