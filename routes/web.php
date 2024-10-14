<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('Login');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/dashboard', function () {
    return view('Dashborad');;
});

// Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/gyms/index', function () {
    return view('gyms.index',[
        'kelas' =>[
            [
            'no'=> 1,
            'gambar'=> asset('img/gambar1.png'),
            "nama" => "Body Combat",
            'instruktur' => 'Charli',
            'ruang' => 'Kelas A',
            'rating'=> '4',
            ],

            [
            'no'=> 2,
            'gambar'=> asset('img/gambar2.jpg'),
            "nama" => "Bungee",
            'instruktur' => 'Ayas',
            'ruang' => 'Kelas B',
            'rating'=> '3', 
            ],

            [
            'no'=> 3,
            'gambar'=> asset('img/gambar3.jpg'),
            "nama" => "Yoga",
            'instruktur' => 'Bobob',
            'ruang' => 'Kelas C',
            'rating'=> '4', 
            ],

            [
            'no'=> 4,
            'gambar'=> asset('img/gambar4.jpeg'),
            "nama" => "Boking",
            'instruktur' => 'Tio',
            'ruang' => 'Kelas D',
            'rating'=> '5', 
            ],

        ]
    ]);
});


Route::get('/gyms/presensi', function () {
    return view('gyms.presensi',[
        'kelas' =>[
            'gambar'=> asset('img/gambar3.jpg'),
            'nama_kelas'=> 'Gaming',
            "nama" => "Nicodemus Anggit Krisnuaji",
            'ruang' => 'Kelas C',
            'member' => '6',
            'rating'=> '4',
            'tanggal'=>'12 Desember 2025',
            'kode' => '220711934',
            'hari' => 'Selasa'
        ],

        'member_total' => [
            [
                'nama' => 'Pasha',
                "gambar" => asset('img/gambar4.jpeg'),
                'email' =>'pasha@gmail.com',
                'telepon' =>'087698709',
                'jenisKartu' => 'Gold',
                'metodPembayaran' =>'Kredit'
            ],

            [
                'nama' => 'Gerry',
                "gambar" => asset('img/gambar4.jpeg'),
                'email' =>'gerrya@gmail.com',
                'telepon' =>'0987654',
                'jenisKartu' => 'Silver',
                'metodPembayaran' =>'Kredit'
            ],

            [
                'nama' => 'Vero',
                "gambar" => asset('img/gambar4.jpeg'),
                'email' =>'vero@gmail.com',
                'telepon' =>'043567545',
                'jenisKartu' => 'Black',
                'metodPembayaran' =>'Shoppe pay later'
            ],

            [
                'nama' => 'Jowil',
                "gambar" => asset('img/gambar4.jpeg'),
                'email' =>'Jowil@gmail.com',
                'telepon' =>'08765467',
                'jenisKartu' => 'Platinum',
                'metodPembayaran' =>'Hutang Teman'
            ],

            [
                'nama' => 'Alex',
                "gambar" => asset('img/gambar4.jpeg'),
                'email' =>'Alexa@gmail.com',
                'telepon' =>'087698709',
                'jenisKartu' => 'Gold',
                'metodPembayaran' =>'Hutang Teman'
            ],

            [
                'nama' => 'Sakti',
                "gambar" => asset('img/gambar4.jpeg'),
                'email' =>'sakti@gmail.com',
                'telepon' =>'087345678',
                'jenisKartu' => 'Silver',
                'metodPembayaran' =>'Langsung Bayar'
            ]

        ]

    ]);

});
