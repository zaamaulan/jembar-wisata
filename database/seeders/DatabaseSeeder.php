<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Fasilitas;
use App\Models\Post;
use App\Models\Tiket;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void

    {
        $users = [
            [

                'name' => 'Nirmala',
                'email' => 'nirmala23@gmail.com',
                'password' => bcrypt('secret'),
            ], [
                'name' => 'Rocky Bar',
                'email' => 'rocky_bar@gmail.com',
                'password' => bcrypt('password'),
            ]
        ];

        $tikets = [[
            'nama_pemesan' => 'Siti Ulfa',
            'jumlah_pemesanan' => 2,
            'no_hp_pemesan' => '0882348294134',
        ], [
            'nama_pemesan' => 'Riki Fauzi',
            'jumlah_pemesanan' => 5,
            'no_hp_pemesan' => '0882348237421',
        ]];

        $posts = [[
            'judul_post' => 'Rahasia Tersembunyi di Balik Senyuman: Mengungkap Misteri Kehbahagiaan Sejati',
            'isi_post' => 'Terkadang, di balik senyuman yang terpancar dari wajah seseorang, tersembunyi misteri yang tak terpecahkan. Kita sering kali menganggap bahwa senyuman adalah tanda kebahagiaan yang tulus, namun kenyataannya bisa jauh berbeda. Beberapa penelitian terbaru mengungkapkan bahwa orang-orang seringkali menyembunyikan perasaan mereka di balik senyuman palsu, sehingga sulit untuk benar-benar memahami apa yang sebenarnya terjadi di dalam pikiran dan hati mereka. Jadi, sebelum kita mengambil kesimpulan tentang seseorang dari senyumannya, mungkin lebih bijaksana untuk merenung dan berusaha memahami apa yang mungkin sedang mereka sembunyikan. Kesimpulannya, senyuman bisa menjadi jendela ke dalam jiwa seseorang, tetapi jangan pernah mengabaikan potensi adanya rahasia yang belum terungkap di baliknya.',
            'user_id' => 1,
        ], [
            'judul_post' => 'Rahasia Membuat Smoothie Lezat yang Menyegarkan',
            'isi_post' => 'Ingin menikmati hari yang cerah dengan segelas smoothie yang lezat dan menyegarkan? Cobalah mencampurkan buah-buahan segar seperti stroberi, pisang, dan mangga dengan yogurt alami dan sedikit madu untuk memberikan rasa manis alami. Prosesnya pun mudah! Cukup blender semua bahan hingga halus, tuangkan ke dalam gelas, dan tambahkan es batu. Anda akan merasakan ledakan rasa dan energi yang memompa semangat. Jadikan smoothie ini sebagai teman setia dalam menjalani gaya hidup sehat Anda!',
            'user_id' => 2,
        ]];

        $fasilitas = [['nama_fasilitas' => 'Kolam Renang Anak', 'deskripsi_fasilitas' => 'Sebagaimana namanya, tentu Jember Waterpark menawarkan aneka wahana air yang mengasyikkan. Waterboom, misalnya'], ['nama_fasilitas' => 'Patung-patung Unik', 'deskripsi_fasilitas' => 'Pada saat musim liburan Jembar Waterpark selalu di padati pengunjung dari berbagai daerah di Indonesia'], ['nama_fasilitas' => 'Fasilitas Non-air', 'deskripsi_fasilitas' => 'Nikmati sensasinya di kolam arus Jembar Waterpark. Anda akan bergerak di atas pelampung sepanjang kolam arus, sambil memandangi keindahan alam di sekitarnya'], [
            'nama_fasilitas' => 'lorem ipsum dolor', 'deskripsi_fasilitas' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, earum.'
        ]];

        foreach ($users as $user) {
            User::create($user);
        };
        foreach ($tikets as $tiket) {
            Tiket::create($tiket);
        };
        foreach ($posts as $post) {
            Post::create($post);
        };
        foreach ($fasilitas as $f) {
            Fasilitas::create($f);
        };
    }
}
