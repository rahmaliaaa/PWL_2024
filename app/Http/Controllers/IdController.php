<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdController extends Controller
{
    public function __invoke($id) {
        return 'Halaman dengan ID: ' . $id;
    }
}
