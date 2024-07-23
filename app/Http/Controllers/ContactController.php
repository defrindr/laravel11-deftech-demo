<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Fungsi untuk menampilkan seluruh data
    public function index()
    {
        // Ambil seluruh data dari model Contact
        $contacts = Contact::all();

        return view('contact.index', compact('contacts'));
    }

    // Fungsi untuk menampilkan halaman tambah data
    public function create()
    {
        return view('contact.create');
    }

    // Fungsi untuk menyimpan data yang diinputkan pengguna di halaman create
    public function store(Request $request)
    {
        // Lakukan validasi terhadap inputan pengguna
        // jika inputan salah, makan otomatis akan kembali kehalaman sebelumnya
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
        ]);

        // Hanya mengambil data name, dan phone
        // dari inputan pengguna
        $payload = $request->only(['name', 'phone']);

        // Menambahkan data ke tabel contact
        // melalui model Contact
        if (Contact::create($payload)) {
            // Jika berhasil, alihkan halaman ke route contact.index
            return redirect()->route('contact.index');
        }

        // Jika gagal maka alihkan kembali ke halaman sebelumnya
        // dengan pesan error 'Gagal menambahkan kontak'
        return redirect()->back()->with('error', 'Gagal menambahkan kontak');
    }

    // Fungsi untuk menampilkan detail dari data
    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }

    // Fungsi untuk menampilkan halaman edit data
    public function edit(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }

    // Fungsi untuk mengubah data yang telah dimodifikasi pengguna di halaman edit
    public function update(Request $request, Contact $contact)
    {
        // Lakukan validasi terhadap inputan pengguna
        // jika inputan salah, makan otomatis akan kembali kehalaman sebelumnya
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        // Hanya mengambil data name, dan phone
        // dari inputan pengguna
        $payload = $request->only(['name', 'phone']);

        if ($contact->update($payload)) {
            // Jika berhasil, alihkan halaman ke route contact.index
            return redirect()->route('contact.index');
        }

        // Jika gagal maka alihkan kembali ke halaman sebelumnya
        // dengan pesan error 'Gagal mengubah kontak'
        return redirect()->back()->with('error', 'Gagal mengubah kontak');
    }

    // Fungsi untuk menghapus data
    public function destroy(Contact $contact)
    {
        if ($contact->delete()) {
            // Jika berhasil, alihkan halaman ke route contact.index
            return redirect()->route('contact.index');
        }

        // Jika gagal maka alihkan kembali ke halaman sebelumnya
        // dengan pesan error 'Gagal menghapus kontak'
        return redirect()->back()->with('error', 'Gagal menghapus kontak');
    }
}
