<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    $berita = [
      [
          'date' => \Carbon\Carbon::parse('2023-03-30'),
          'image' => '/images/kerja_bakti.jpg',
          'title' => 'kerja Bakti Perawatan Selokan',
          'description' => 'Kerja bakti perawatan selokan di Desa Rawasari adalah kegiatan rutin yang melibatkan seluruh warga desa,
            mulai dari anak-anak hingga orang dewasa. Kegiatan ini bertujuan untuk membersihkan dan merawat saluran air
            agar tetap bersih dan berfungsi dengan baik, sehingga mencegah banjir dan menjaga kebersihan lingkungan.
            Selokan yang terawat dengan baik sangat penting untuk menjaga kesehatan dan kenyamanan lingkungan tempat
            tinggal kita.
            Dalam kerja bakti ini, warga bergotong royong membersihkan sampah dan lumpur yang menghambat aliran air di
            selokan. Selain itu, perawatan selokan juga meliputi perbaikan kerusakan kecil yang mungkin terjadi, seperti
            memperbaiki dinding selokan yang retak atau memasang kembali penutup selokan yang hilang. Kegiatan ini
            dilakukan secara berkala, biasanya setiap bulan, dan dijadwalkan sedemikian rupa agar semua warga dapat
            berpartisipasi.
            Kerja bakti perawatan selokan tidak hanya bertujuan untuk menjaga kebersihan, tetapi juga untuk mempererat
            tali silaturahmi antarwarga. Dengan bekerja bersama-sama, warga Desa Rawasari dapat saling mengenal lebih
            dekat dan memperkuat rasa kebersamaan serta kepedulian terhadap lingkungan. Selain itu, kegiatan ini juga
            menjadi sarana edukasi bagi warga, terutama anak-anak, mengenai pentingnya menjaga lingkungan dan manfaat
            dari gotong royong.
            Untuk mendukung kelancaran kegiatan kerja bakti, pemerintah desa menyediakan alat dan bahan yang diperlukan,
            seperti sekop, sapu, karung sampah, dan peralatan lainnya. Warga juga diimbau untuk membawa alat kebersihan
            pribadi yang dimiliki.',
          'url' => '#',
      ],
      [
          'date' => \Carbon\Carbon::parse('2023-03-28'),
          'image' => '/images/bansos.jpg',
          'title' => 'Pembagian Bansos Kepada Lansia',
          'description' => 'Di Desa Rawasari, program pembagian bantuan sosial (bansos) kepada lansia dilaksanakan secara berkala setiap
            bulan. Program ini bertujuan untuk memberikan dukungan kepada lansia yang membutuhkan dalam memenuhi
            kebutuhan sehari-hari mereka.
            Setiap bulannya, pemerintah desa bersama dengan tokoh masyarakat dan karang taruna mengatur distribusi
            bansos secara terorganisir. Proses ini dimulai dengan pendataan lansia di desa untuk menentukan penerima
            bansos berdasarkan kriteria yang telah ditetapkan, seperti usia dan kondisi ekonomi.
            Pembagian bansos dilakukan dengan transparan dan adil. Setiap lansia penerima mendapatkan paket sembako yang
            terdiri dari bahan makanan pokok, seperti beras, minyak goreng, gula, dan mie instan, serta beberapa
            kebutuhan sehari-hari lainnya sesuai dengan kebutuhan mereka.

            Kegiatan ini tidak hanya sebagai bentuk dukungan material, tetapi juga sebagai wujud perhatian dan
            kepedulian masyarakat terhadap lansia yang berjasa dalam membangun dan menjaga tradisi serta nilai-nilai
            kebersamaan di Desa Rawasari. Melalui pembagian bansos kepada lansia, diharapkan mereka dapat merasa
            dihargai dan merasa lebih aman dalam menjalani hari-hari mereka.',
          'url' => '#',
      ],
      [
          'date' => \Carbon\Carbon::parse('2023-04-28'),
          'image' => '/images/kerja_bakti_masjid.jpg',
          'title' => 'Kerja Bakti Menjelang Ramadhan',
          'description' => 'Di Desa Rawasari, melakukan kerja bakti menjelang Ramadhan menjadi tradisi yang dilakukan oleh seluruh
            masyarakat
            desa. Kegiatan ini dilakukan untuk membersihkan dan mempersiapkan lingkungan desa agar siap menyambut bulan
            suci Ramadhan dengan baik.
            Kerja bakti menjelang Ramadhan meliputi berbagai aktivitas, seperti pembersihan lingkungan desa, termasuk
            jalan-jalan utama, tempat ibadah, dan area publik lainnya. Warga desa bekerja bersama-sama membersihkan
            sampah, menyapu dan mengepel jalan, membersihkan saluran air, serta merapikan taman dan pekarangan.
            Selain membersihkan lingkungan fisik, kerja bakti ini juga mencakup persiapan untuk kegiatan ibadah dan
            kegiatan sosial selama bulan Ramadhan. Misalnya, mempersiapkan tempat-tempat untuk berbuka puasa bersama
            atau menyediakan sumbangan makanan bagi yang membutuhkan.
            Partisipasi aktif seluruh warga sangat penting dalam kegiatan kerja bakti menjelang Ramadhan ini. Kegiatan
            ini bukan hanya sebagai kewajiban sosial, tetapi juga sebagai bentuk kebersamaan dan kepedulian terhadap
            lingkungan serta persiapan spiritual dalam menyambut bulan suci Ramadhan. Dengan gotong royong dan semangat
            berbagi, Desa Rawasari siap menyambut kehadiran Ramadhan dengan penuh kebersamaan dan kedamaian.',
          'url' => '#',
      ],
      [
          'date' => \Carbon\Carbon::parse('2023-05-28'),
          'image' => '/images/santunan.jpg',
          'title' => 'Santunan Anak Yatim Piatu',
          'description' => ' Di Desa Rawasari, santunan anak yatim piatu adalah salah satu bentuk kepedulian dan kegiatan sosial yang
            dilakukan secara rutin oleh masyarakat desa. Program ini bertujuan untuk memberikan bantuan kepada anak-anak
            yang kehilangan salah satu atau kedua orang tua mereka.
            Setiap bulan, pemerintah desa bersama dengan komunitas dan lembaga sosial setempat mengorganisirkan acara
            santunan. Acara ini diadakan di tempat-tempat yang telah disiapkan, seperti balai desa atau tempat ibadah,
            dengan suasana yang hangat dan penuh kepedulian.
            Selama acara santunan, anak-anak yatim piatu menerima bantuan berupa paket sembako yang berisi bahan makanan
            pokok dan kebutuhan sehari-hari lainnya. Selain itu, sering kali juga disediakan pakaian atau perlengkapan
            sekolah bagi anak-anak yang membutuhkannya.
            Kegiatan santunan ini tidak hanya memberikan bantuan material, tetapi juga merupakan wujud perhatian, kasih
            sayang, dan dukungan emosional bagi anak-anak yang kehilangan orang tua mereka. Acara ini juga menjadi
            kesempatan untuk mempererat hubungan antara masyarakat desa dan memberikan teladan nilai-nilai kepedulian
            sosial kepada generasi muda.
            Partisipasi dari seluruh lapisan masyarakat desa sangat diapresiasi dalam kegiatan santunan anak yatim piatu
            ini. Dengan gotong royong dan semangat kebersamaan, Desa Rawasari berkomitmen untuk terus mendukung dan
            menjaga kesejahteraan anak-anak yatim piatu, serta memperkuat solidaritas sosial dalam komunitasnya.',
          'url' => '#',
      ],
      [
          'date' => \Carbon\Carbon::parse('2023-06-28'),
          'image' => '/images/turnament_voly.jpg',
          'title' => 'Fun Turnament Cup Voly Desa rawasari',
          'description' => 'Fun Tournament Cup Volley di Desa Rawasari adalah ajang kompetisi voli yang diadakan secara tahunan di desa
            ini. Turnamen ini dirancang untuk mempromosikan olahraga voli di kalangan warga desa dan sekitarnya, serta
            mempererat kebersamaan antarwarga melalui kegiatan yang menyenangkan dan kompetitif.
            Setiap tahunnya, sejumlah tim voli dari berbagai dusun di Desa Rawasari berpartisipasi dalam turnamen ini.
            Persiapan dimulai jauh-jauh hari dengan pendaftaran tim, pembagian grup, dan penentuan jadwal pertandingan.
            Pertandingan-pertandingan yang sengit dan penuh semangat dihelat di lapangan voli yang telah disiapkan
            dengan baik. Warga desa, mulai dari anak-anak hingga orang dewasa, turut serta menghadiri dan mendukung tim
            favorit mereka.
            Kegiatan ini tidak hanya mendukung gaya hidup sehat dan aktif, tetapi juga memperkuat rasa persatuan dan
            kebersamaan di antara seluruh warga Desa Rawasari. Dengan semangat kompetisi yang sehat dan nilai-nilai
            sportivitas yang tinggi, Fun Tournament Cup Volley Desa Rawasari menjadi salah satu momen yang dinantikan
            dan diharapkan dapat terus berlanjut untuk meningkatkan kualitas hidup sosial masyarakat desa.',
          'url' => '#',
      ],
      [
          'date' => \Carbon\Carbon::parse('2024-07-28'),
          'image' => '/images/gedung_serbaguna.jpg',
          'title' => 'Pengesahan Gedung Serba guna',
          'description' => ' Gedung serba guna di Desa Rawasari disahkan setelah melalui proses pembangunan yang memakan biaya sekitar
            900 juta rupiah. Gedung ini dirancang untuk menjadi pusat kegiatan masyarakat, yang dapat digunakan untuk
            berbagai acara seperti pertemuan komunitas, acara sosial, pelatihan, dan upacara adat.
            Pembangunan gedung dilakukan dengan memperhatikan kebutuhan warga desa, serta standar keamanan dan keamanan
            yang tinggi. Gedung ini dilengkapi dengan fasilitas modern seperti ruang pertemuan, dapur komunal, dan
            fasilitas toilet yang memadai untuk melayani kegiatan sehari-hari dan kebutuhan acara besar.
            Biaya sebesar 900 juta rupiah untuk pembangunan gedung ini mencakup pengadaan material bangunan, tenaga
            kerja, serta peralatan dan perabotan yang diperlukan. Proses pembangunan dilakukan dengan partisipasi aktif
            dari masyarakat desa, yang turut serta dalam kerja bakti dan gotong royong untuk mendukung pembangunan
            gedung ini menjadi sebuah kenyataan yang bermanfaat bagi seluruh warga Desa Rawasari.',
          'url' => '#',
      ],
    ];

    $galeri = [
      [
          'img' => '/images/pemandangan.jpg',
          'url' => '#'
      ],
      [
          'img' => '/images/pemandian.jpg',
          'url' => '#'
      ],
      [
          'img' => '/images/kudalumping.jpg',
          'url' => '#'
      ],
      [
          'img' => '/images/sunrice.jpg',
          'url' => '#'
      ],
      [
          'img' => '/images/panen_padi.jpg',
          'url' => '#'
      ],
      [
          'img' => '/images/wayang.jpeg',
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
  return view('daftarSurat.form_sktm', [
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