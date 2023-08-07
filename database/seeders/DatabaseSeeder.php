<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        Tiket::create([
            'nama_pemesan' => 'John Doe',
            'jumlah_pemesanan' => 4,
            'no_hp_pemesan' => '0882348237421',
        ]);

        Post::create([
            'judul_post' => 'lorem ipsum',
            'isi_post' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'user_id' => 1,
        ]);
    }
}
