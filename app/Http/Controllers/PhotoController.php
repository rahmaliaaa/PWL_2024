<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index() {
        return "Menampilkan daftar foto";
    }

    public function create() {
        return "Menampilkan form untuk upload foto";
    }

    public function store(Request $request) {
        return "Menyimpan foto baru";
    }

    public function show($id) {
        return "Menampilkan foto dengan ID " . $id;
    }

    public function edit($id) {
        return "Menampilkan form edit untuk foto dengan ID " . $id;
    }

    public function update(Request $request, $id) {
        return "Memperbarui foto dengan ID " . $id;
    }

    public function destroy($id) {
        return "Menghapus foto dengan ID " . $id;
    }
}
