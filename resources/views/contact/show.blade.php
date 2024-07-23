@extends('layouts.main')

@section('title', 'Daftar Kontak')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">
        Kontak
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
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <tbody>
                            {{-- tampilkan setiap kolom --}}
                            <tr>
                                <td>Nama Kontak</td>
                                <td>: {{ $contact->name }}</td>
                            </tr>
                            {{-- tampilkan setiap kolom --}}
                            <tr>
                                <td>Nomor Kontak</td>
                                <td>: {{ $contact->phone }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
