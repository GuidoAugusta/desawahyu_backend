<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    $berita = [
      [
          'date' => \Carbon\Carbon::parse('2024-04-28'),
          'image' => 'https://i.pinimg.com/736x/85/05/8b/85058bb5b047a4cce2a20abfa743e55c.jpg',
          'title' => 'Keputusan kepala desa',
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis reprehenderit minima voluptatibus, asperiores sit ad eum odio pariatur obcaecati. Et voluptates magni esse. Distinctio, quod voluptas! Sit officia cum quis vel necessitatibus. Atque expedita, non similique aut neque eos praesentium necessitatibus quasi illo ipsam? Ullam, quam eum, enim illum accusantium voluptatibus magni quae, deserunt consequatur deleniti tenetur modi voluptate inventore! Dignissimos officia laudantium dolore. Veritatis quos modi, aliquam id eligendi et iusto voluptate officiis? Tempore repudiandae earum excepturi quod officiis illum quisquam quo? Tenetur quasi laboriosam iste inventore nisi sunt error, nulla, veritatis fuga, ut quod consectetur? Optio, debitis minus!',
          'url' => '#',
      ],
      [
          'date' => \Carbon\Carbon::parse('2024-04-28'),
          'image' => 'https://i.pinimg.com/474x/6d/ff/f1/6dfff1700e808b42d3fdb8ed00e8ec45.jpg',
          'title' => 'Keputusan kepala desa',
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis reprehenderit minima voluptatibus, asperiores sit ad eum odio pariatur obcaecati. Et voluptates magni esse. Distinctio, quod voluptas! Sit officia cum quis vel necessitatibus. Atque expedita, non similique aut neque eos praesentium necessitatibus quasi illo ipsam? Ullam, quam eum, enim illum accusantium voluptatibus magni quae, deserunt consequatur deleniti tenetur modi voluptate inventore! Dignissimos officia laudantium dolore. Veritatis quos modi, aliquam id eligendi et iusto voluptate officiis? Tempore repudiandae earum excepturi quod officiis illum quisquam quo? Tenetur quasi laboriosam iste inventore nisi sunt error, nulla, veritatis fuga, ut quod consectetur? Optio, debitis minus!',
          'url' => '#',
      ],
      [
          'date' => \Carbon\Carbon::parse('2024-04-28'),
          'image' => 'https://i.pinimg.com/564x/0f/80/ac/0f80ac0eaaadb9c753295e6e84a883d9.jpg',
          'title' => 'Keputusan kepala desa',
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis reprehenderit minima voluptatibus, asperiores sit ad eum odio pariatur obcaecati. Et voluptates magni esse. Distinctio, quod voluptas! Sit officia cum quis vel necessitatibus. Atque expedita, non similique aut neque eos praesentium necessitatibus quasi illo ipsam? Ullam, quam eum, enim illum accusantium voluptatibus magni quae, deserunt consequatur deleniti tenetur modi voluptate inventore! Dignissimos officia laudantium dolore. Veritatis quos modi, aliquam id eligendi et iusto voluptate officiis? Tempore repudiandae earum excepturi quod officiis illum quisquam quo? Tenetur quasi laboriosam iste inventore nisi sunt error, nulla, veritatis fuga, ut quod consectetur? Optio, debitis minus!',
          'url' => '#',
      ],
      [
          'date' => \Carbon\Carbon::parse('2024-04-28'),
          'image' => 'https://i.pinimg.com/736x/3c/a5/c2/3ca5c2d19ae8f4d0ca9f5c1f3308d9ba.jpg',
          'title' => 'Keputusan kepala desa',
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis reprehenderit minima voluptatibus, asperiores sit ad eum odio pariatur obcaecati. Et voluptates magni esse. Distinctio, quod voluptas! Sit officia cum quis vel necessitatibus. Atque expedita, non similique aut neque eos praesentium necessitatibus quasi illo ipsam? Ullam, quam eum, enim illum accusantium voluptatibus magni quae, deserunt consequatur deleniti tenetur modi voluptate inventore! Dignissimos officia laudantium dolore. Veritatis quos modi, aliquam id eligendi et iusto voluptate officiis? Tempore repudiandae earum excepturi quod officiis illum quisquam quo? Tenetur quasi laboriosam iste inventore nisi sunt error, nulla, veritatis fuga, ut quod consectetur? Optio, debitis minus!',
          'url' => '#',
      ],
      [
          'date' => \Carbon\Carbon::parse('2024-04-28'),
          'image' => 'https://i.pinimg.com/736x/f6/17/8e/f6178ec95a605d34076d56971c920660.jpg',
          'title' => 'Keputusan kepala desa',
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis reprehenderit minima voluptatibus, asperiores sit ad eum odio pariatur obcaecati. Et voluptates magni esse. Distinctio, quod voluptas! Sit officia cum quis vel necessitatibus. Atque expedita, non similique aut neque eos praesentium necessitatibus quasi illo ipsam? Ullam, quam eum, enim illum accusantium voluptatibus magni quae, deserunt consequatur deleniti tenetur modi voluptate inventore! Dignissimos officia laudantium dolore. Veritatis quos modi, aliquam id eligendi et iusto voluptate officiis? Tempore repudiandae earum excepturi quod officiis illum quisquam quo? Tenetur quasi laboriosam iste inventore nisi sunt error, nulla, veritatis fuga, ut quod consectetur? Optio, debitis minus!',
          'url' => '#',
      ],
      [
          'date' => \Carbon\Carbon::parse('2024-04-28'),
          'image' => 'https://i.pinimg.com/736x/59/59/e4/5959e44befeba496cad1f89a4b35d61a.jpg',
          'title' => 'Keputusan kepala desa',
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis reprehenderit minima voluptatibus, asperiores sit ad eum odio pariatur obcaecati. Et voluptates magni esse. Distinctio, quod voluptas! Sit officia cum quis vel necessitatibus. Atque expedita, non similique aut neque eos praesentium necessitatibus quasi illo ipsam? Ullam, quam eum, enim illum accusantium voluptatibus magni quae, deserunt consequatur deleniti tenetur modi voluptate inventore! Dignissimos officia laudantium dolore. Veritatis quos modi, aliquam id eligendi et iusto voluptate officiis? Tempore repudiandae earum excepturi quod officiis illum quisquam quo? Tenetur quasi laboriosam iste inventore nisi sunt error, nulla, veritatis fuga, ut quod consectetur? Optio, debitis minus!',
          'url' => '#',
      ],
    ];

    $galeri = [
      [
          'img' => 'https://i.pinimg.com/564x/5a/e7/f4/5ae7f4852a91687da8802f1642a46ed1.jpg',
          'url' => '#'
      ],
      [
          'img' => 'https://i.pinimg.com/564x/48/52/a6/4852a6fe7980f4e99f9f6bc8288739d5.jpg',
          'url' => '#'
      ],
      [
          'img' => 'https://i.pinimg.com/564x/10/dc/98/10dc98d5f81a74a42625db16cd070a77.jpg',
          'url' => '#'
      ],
      [
          'img' => 'https://i.pinimg.com/564x/8b/86/e9/8b86e9ec9a993534375d44269d718003.jpg',
          'url' => '#'
      ],
      [
          'img' => 'https://i.pinimg.com/564x/00/49/08/004908df6908bb32af3d9c29eae524a9.jpg',
          'url' => '#'
      ],
      [
          'img' => 'https://i.pinimg.com/564x/d4/b6/3c/d4b63c9aad939006d047bcd55bb834fc.jpg',
          'url' => '#'
      ]
    ];

    return view('home', [
      'title' => 'home',
      'berita' => $berita,
      'galeri' => $galeri
    ]);
});

Route::get('/aboutus', function () {
  return view('aboutUs', [
    'title' => 'tentang kami'
  ]);
});

Route::get('/visimisi', function () {
  return view('visimisi', [
    'title' => 'visi misi'
  ]);
});

Route::get('/sejarahdesa', function () {
  return view('sejarahdesa', [
    'title' => 'sejarah desa'
  ]);
});

Route::get('/surat', function () {
  return view('surat', [
    'title' => 'surat'
  ]);
})->middleware('auth');

Route::get('/status-surat', function () {
  return view('statusSurat', [
    'title' => 'status surat'
  ]);
})->middleware('auth');

Route::get('/surat/sktm', function () {
  return view('daftarSurat.sktm', [
    'title' => 'surat sktm'
  ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest') ;
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin', [LoginController::class, 'admin']);
Route::post('/admin', [LoginController::class, 'authAdmin']);

Route::resource('/dashboard', AdminController::class)->middleware('admin');
Route::post('/logout', [LoginController::class, 'logout']);