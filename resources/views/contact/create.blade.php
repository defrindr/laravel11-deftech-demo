@extends('layouts.main')

@section('title', 'Daftar Kontak')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('contact.index') }}">Kontak</a></li>
    <li class="breadcrumb-item active" aria-current="page">
        Tambah
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    {{-- Tombol kembali --}}
                    <a href="{{ route('contact.index') }}" class="btn btn-default">Kembali</a>
                </div>
                <form action="{{ route('contact.store') }}" method="POST" class="form">
                    <div class="card-body">
                        {{-- Agar tidak 419 expired, ketika di simpan --}}
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Kontak</label>
                            {{-- old berfungsi agar inputan lama kita tidak hilang --}}
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ old('name') }}">
                            {{-- Menampilkan error dari name, jika ada --}}
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Nomor Kontak</label>
                            {{-- old berfungsi agar inputan lama kita tidak hilang --}}
                            <input type="text" class="form-control" name="phone" id="phone"
                                value="{{ old('phone') }}">
                            {{-- Menampilkan error dari phone, jika ada --}}
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
