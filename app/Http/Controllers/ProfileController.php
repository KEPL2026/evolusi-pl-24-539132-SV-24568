<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function show()
    {
        $profile = [
            'nama' => 'Muhammad Rakan Hibrizi',
            'nim' => '24/539132/SV/24568',
            'kelas' => 'Evolusi Perangkat Lunak',
        ];

        return view('profile', compact('profile'));
    }
}
