<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        $books =  [
            [

                'title' => 'Filosofi Teras',
                'description' => 'Buku ini pada awalnya menceritakan tentang sebuah survei kekhawatiran nasional yang semakin masif sekaligus menyajikan tentang sekilas kehidupan si penulis yang dipenuhi oleh emosi negatif yang berlebihan. Lalu, lebih dari 2000 tahun lalu sebuah mazhab filsafat menemukan akar masalah dan solusi dari banyaknya emosi negatif. Ya, Stoisisme atau filosofi Sta, namun penulis lebih memperkenalkannya dengan “Filosofi Teras” yang merupakan filsafat Yunani-Romawi Kuno yang dapat membantu kita dalam mengatasi emosi negatif serta menghasilkan mental seseorang menjadi tangguh dalam menghadapi naik turunnya kehidupan. Dalam buku tersebut, filsafat Stoa digambarkan secara sederhana dengan inti dikotomi kendali nasib manusia sehingga dari dikotomi kendali tersebut, manusia dapat menentukan hal-hal yang dapat membuatnya bahagia maupun tidak. Namun, Wiliam Irvine menawarkan trikotomi kendali di mana memuat apa yang menjadi kendali kita, tidak menjadi kendali kita, dan juga menjadi bagian dari kendali kita. ',
                'tahun' => 2018,
                'category_id' => 4,
                'pengarang' => 'Henry Manampiring',
                'penerbit' => 'PT Kompas Media Nusantara',
                'halaman' => 346,
                'foto_sampul' => 'filosofi_teras.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Semiotika: Teori, Metode, dan Penerapannya dalam Penelitian Sastra',
                'description' =>
                'Semiotika merupakan ilmu tentang tanda yang dapat memperjelas makna sebuah teks khususnya sastra. Makna karya sastra tertuang secara implisit yang harus dipahami secara ilmiah oleh mahasiswa sastra. Fenomena yang ada sekarang, sebagian mahasiswa kesulitan memahami makna karya sastra karena kurangnya pengetahuan tentang teori dan metode semiotika, yang ada hanya memahami makna karya sastra secara subjektif tanpa ada landasan teori dan metode yang jelas. Permasalahan subjektifitas tersebut, terkesan kajian sastra menjadi kajian yang bersifat non-ilmiah. Oleh karena itu, tim penulis mencoba memberikan kontribusi ilmiah dalam memudahkan kesulitan yang dihadapi mahasiswa dalam memahami makna karya sastra melalui teori dan metode ilmiah yang praktis dipahami oleh mahasiswa. ',
                'tahun' => 2017,
                'category_id' => 3,
                'pengarang' => 'Jafar Lantowa, Nila Mega Marahayu, Muh. Khairussibyan',
                'penerbit' => 'Deepublish',
                'halaman' => 389,
                'foto_sampul' => 'semiotika.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Laskar Pelangi',
                'description' => 'Laskar Pelangi" adalah kisah tentang sembilan anak yang membentuk kelompok bernama Laskar Pelangi di sebuah sekolah di Belitung Timur, Indonesia. Mereka berjuang untuk mendapatkan pendidikan berkualitas meskipun menghadapi keterbatasan ekonomi dan fasilitas. Cerita ini menggambarkan kegigihan dan persahabatan anak-anak tersebut dalam mengejar impian mereka untuk mendapatkan pendidikan yang layak. ',
                'tahun' => 2008,
                'category_id' => 3,
                'pengarang' => 'Andrea Hirata',
                'penerbit' => 'Bentang Pustakan',
                'halaman' => 400,
                'foto_sampul' => 'laskar_pelangi.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Media dan Teknologi dalam Pembelajaran',
                'description' =>
                'Penggunaan media sebagai sarana untuk memperoleh informasi dan pengetahuan berjalan seiring dengan perkembangan teknologi. Media yang digunakan untuk aktivitas pertukaran informasi dan pengetahuan banyak dipengaruhi oleh perkembangan teknologi. Buku ini akan dapat menambah wawasan pengetahuan pembaca tentang ragam media dan penggunaannya untuk meningkatkan kualitas program pembelajaran. Selain itu, buku Media dan Teknolosi dalam Pembelajaran dapat dijadikan sebagai bahan rujukan atau referensi dalam penulisan artikel dan karya tulis ilmiah. Mahasiswa, guru, dosen, instruktur, praktisi perancang program pembelajaran (instructional desisner), dan akademisi dalam bidang teknologi pendidikan perlu membaca dan mengkaji isi buku ini Media dan Teknologi dalam Pembelajaran. ',
                'tahun' => 2017,
                'category_id' => 2,
                'pengarang' => 'Benny A. Pribadi',
                'penerbit' => 'Prenada Media Group',
                'halaman' => 262,
                'foto_sampul' => 'media_teknologi.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Grammar is Easy Panduan Lengkap dan Cepat Kuasai Grammar Inggris',
                'description' => 'Masih menganggap bahwa grammar itu susah? Maka kamu perlu baca buku ini! Buku yang berisi tata bahasa Inggris ini akan memudahkan kamu untuk mempelajarinya. Di buku ini kamu bisa mempelajari struktur kalimat yang padu dan baik sesuai dengan kaidah bahasa Inggris yang benar. Sangat cocok buat kamu yang ingin menjadi ahli bahasa Inggris terutama secara tertulis. Buku yang disusun secara sistematis ini juga dapat diaplikasikan dalam kehidupan sehari-hari. Semoga buku ini dapat membantu pembaca/pembelajar sekalian dalam menguasai serta menggunakan grammar Inggris dengan baik.',
                'tahun' => 2020,
                'category_id' => 1,
                'pengarang' => 'Muhammad Bayu Tritajudin',
                'penerbit' => 'Anak Hebat Indonesia',
                'halaman' => 212,
                'foto_sampul' => 'grammar.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Bicara Itu ada Seninya : Rahasia Komunikasi yang Efektif',
                'description' => 'Buku ini dijabarkan agar dapat dimengerti oleh siapa saja. Anda dapat belajar dari banyak pengalaman orang-orang terkenal dan juga mengenai rahasia inti komunikasi. Jika Anda membacanya dengan runut, saya yakin rasa percaya diri Anda untuk berbicara pun akan tumbuh dengan sendirinya.',
                'tahun' => 2018,
                'category_id' => 4,
                'pengarang' => 'Oh Su Hyang',
                'penerbit' => 'Bhuana Ilmu Populer',
                'halaman' => 254,
                'foto_sampul' => 'bicara_itu_ada_seninya.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Guyton dan Hall Buku Ajar Fisiologi Kedokteran',
                'description' => 'Edisi ke-13 meneruskan tradisi lama judul terlaris ini sebagai buku ajar fisiologi kedokteran paling terkemuka di dunia.• Buku teks ini rinci tapi jelas dilengkapi dengan 1000 ilustrasi didaktik yang merangkum konsep kunci.• Berfokus pada konten yang paling relevan untuk mahasiswa klinik dan pra-klinik.• Ringkasan gambar dan tabel dengan cepat menyampaikan proses kunci yang tercakup dalam teks.• Lengkap dengan akses ke eBook dan sumber elektronik asli termasuk gambar-gambar interaktif, pertanyaan penilaian mandiri dalam bahasa Inggris di studentconsult.inkling.com.',
                'tahun' => 2019,
                'category_id' => 5,
                'pengarang' => 'John E. Hall',
                'penerbit' => 'Elsevier Health Sciences',
                'halaman' => 1.102,
                'foto_sampul' => 'guyton_dan_hall_kedokteran.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Manajemen Informasi Kesehatan: Pengelolaan Dokumen Rekam Medis',
                'description' => 'Dokumentasi rekam medis merupakan hal yang penting untuk merekam temuan, dan pengamatan tentang riwayat kesehatan dan penyakit termasuk masa lalu dan sekarang, pemeriksaan, tes, asuhan klinik (medis dan keperawatan) dan hasil merupakan bukti implementasi rencana asuhan pasien oleh Profesional Pemberi Asuhan (PPA). Selain dokumen rekam medis sebagai sumber dalam penyediaan informasi medis, dokumen rekam medis juga menggambarkan seluruh aspek pelayanan yang diberikan terhadap pasien dan aspek pengelolahan rumah sakit. ',
                'tahun' => 2018,
                'category_id' => 5,
                'pengarang' => 'Irmawati Mathar',
                'penerbit' => 'Deepublish',
                'halaman' => 245,
                'foto_sampul' => 'managemen_informasi_kesehatan.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Bumi',
                'description' => 'Novel "Laskar Pelangi" karya Andrea Hirata memiliki tebal halaman yang berbeda-beda tergantung pada edisi dan penerbitnya. Secara umum, edisi standar dari novel ini memiliki kisaran tebal halaman antara 300-400 halaman. Namun, untuk mendapatkan informasi yang lebih akurat, disarankan untuk merujuk langsung pada salinan tertentu yang Anda miliki atau mencari informasi terbaru dari penerbit atau penjual buku.',
                'tahun' => 2014,
                'category_id' => 3,
                'pengarang' => 'Tere Liye',
                'penerbit' => 'Gramedia Pustaka Utama',
                'halaman' => 440,
                'foto_sampul' => 'bumi.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Bumi manusia',
                'description' => ' Buku ini bercerita tentang perjalanan seorang tokoh bernama Minke. Minke adalah salah satu anak pribumi yang sekolah di HBS. Pada masa itu, yang dapat masuk ke sekolah HBS adalah orang-orang keturunan Eropa. Minke adalah seorang pribumi yang pandai, ia sangat pandai menulis. Tulisannya bisa membuat orang sampai terkagum-kagum dan dimuat di berbagai Koran Belanda pada saat itu. Sebagai seorang pribumi, ia kurang disukai oleh siswa-siswi Eropa lainnya. Minke digambarkan sebagai seorang revolusioner di buku ini. Ia berani melawan ketidakadilan yang terjadi pada bangsanya. Ia juga berani memberontak terhadap kebudayaan Jawa, yang membuatnya selalu di bawah.',
                'tahun' => 1981,
                'category_id' => 5,
                'pengarang' => 'Pramoedya Ananta Toer',
                'penerbit' => 'Hasta Mitra',
                'halaman' => 405,
                'foto_sampul' => 'bumi_manusia.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}