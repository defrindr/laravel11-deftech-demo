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
                    {{-- Tombol tambah --}}
                    <a href="{{ route('contact.create') }}" class="btn btn-success">Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Nama Kontak</td>
                                <td>Nomor</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Melakukan iterasi terhadap contacts --}}
                            {{-- dan menampungnya ke variable contact --}}
                            @foreach ($contacts as $contact)
                                <tr>
                                    {{-- $loop merupakan variable bawaan laravel --}}
                                    {{-- yang dapat di akses ketika berada dalam sebuah iterasi --}}
                                    {{-- $loop dapat diakses karena di dalam foreach --}}
                                    {{-- $loop->index + 1, karena secara default index di mulai dari 0 --}}
                                    <td>{{ $loop->index + 1 }}</td>
                                    {{-- Mengambil data name dari model contact --}}
                                    <td>{{ $contact->name }}</td>
                                    {{-- Mengambil data phone dari model contact --}}
                                    <td>{{ $contact->phone }}</td>
                                    <td>
                                        {{-- Tombol Show --}}
                                        <a href="{{ route('contact.show', $contact) }}" class="btn btn-info">Lihat</a>

                                        {{-- Tombol Edit --}}
                                        <a href="{{ route('contact.edit', $contact) }}" class="btn btn-warning">Edit</a>

                                        {{-- Menggunakan form, karena method untuk menghapus adalah DELETE --}}
                                        {{-- cek kembali di routes untuk memastikan --}}
                                        <form action="{{ route('contact.destroy', $contact) }}" method="post"
                                            class="d-inline-block">
                                            {{-- Agar tidak expired ketika di submit --}}
                                            @csrf
                                            {{-- Agar sesuai dengan method DELETE --}}
                                            {{-- karena secara default form cuma support GET, POST --}}
                                            @method('DELETE')
                                            {{-- Tombol Delete --}}
                                            <button class="btn btn-danger">Hapus</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
