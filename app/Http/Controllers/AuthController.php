<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return [
            'siswa' => [
                'nis' => '3103119157',
                'name' => 'Refa Dimas Nurcahyo',
                'phone' => '082329697348',
                'class' => 'XII RPL 5'
            ]
        ];
    }
}
