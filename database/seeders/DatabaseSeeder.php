<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i <= 10; $i++) {
            DB::table('fasilitas')->insert([
                'nama_fasilitas' => $faker->text(10),
                'deskripsi_fasilitas' => $faker->text,
                'gambar_fasilitas' => $faker->image,

            ]);
        }
        // for ($i = 0; $i <= 10; $i++) {
        //     DB::table('pegawais')->insert([
        //         'nama_pegawai' => $faker->name,
        //         'email_pegawai' => $faker->email,
        //         'alamat_pegawai' => $faker->address,
        //         // 'jenis_kelamin_pegawai' => $faker->name()

        //     ]);
        // }
        for ($i = 0; $i <= 10; $i++) {
            DB::table('posts')->insert([
                'judul_post' => $faker->text(10),
                'isi_post' => $faker->text,
                'gambar_post' => $faker->image,
                'author_post' => $faker->name,
                'slug' => $faker->slug,
                'user_id' => rand(1, 11)
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->md5,
            ]);
        }
    }
}
