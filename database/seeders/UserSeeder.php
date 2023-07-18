<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1 NC
        User::create([
            'name' => 'Ahmad Faliansyah',
            'kelamin' => 'Laki-laki',
            'email' => 'ahmad@gmail.com',
            // 'instagram' => 'ameliaptriis',
            // 'biodata' => 'sugar is sweet but marklee is sweeter',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 2
        User::create([
            'name' => 'Amelia Putri Sulaeman',
            'kelamin' => 'Perempuan',
            'email' => 'ameliaptriii78@gmail.com',
            'instagram' => 'ameliaptriis',
            'biodata' => 'sugar is sweet but marklee is sweeter',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 3 NC
        User::create([
            'name' => 'Andi Abdul Rahman',
            'kelamin' => 'Laki-laki',
            'email' => 'andi@gmail.com',
            // 'instagram' => 'ameliaptriis',
            // 'biodata' => 'sugar is sweet but marklee is sweeter',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 4 NC
        User::create([
            'name' => 'Ariyanto Hermawan',
            'kelamin' => 'Laki-laki',
            'email' => 'ariyanto@gmail.com',
            // 'instagram' => 'ameliaptriis',
            // 'biodata' => 'sugar is sweet but marklee is sweeter',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 5
        User::create([
            'name' => 'Cindy Mahardini',
            'kelamin' => 'Perempuan',
            'email' => 'mahardinicindy@gmail.com',
            'instagram' => 'cindyymhr_',
            'biodata' => 'cindy kuat cindy hebat',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        //6 
        User::create([
            'name' => 'Claymment Ananda',
            'kelamin' => 'Laki-laki',
            'email' => 'claymmentaananda@gmail.com',
            'instagram' => 'claymment.ananda',
            'biodata' => 'saya adalah orang yang klo srius full totalitas klo lg males ga ngapa2 in samsek',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 7
        User::create([
            'name' => 'Destyara Hesmi Virlandra',
            'kelamin' => 'Perempuan',
            'email' => 'destyarahesmi@gmail.com',
            'instagram' => 'dstyrahsmi_',
            'biodata' => 'jangan pantang menyerah ya kawan, kalau ada masalah pasti ada jalan keluarnya ^_^',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 8
        User::create([
            'name' => 'Dinda Amelia Putri',
            'kelamin' => 'Perempuan',
            'email' => 'dindaamelia2125@gmail.com',
            'instagram' => 'dind4mliaptr_',
            'biodata' => 'semua akan indah padahal ora',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 9 NC
        User::create([
            'name' => 'Dwi Astuti',
            'kelamin' => 'Perempuan',
            'email' => 'dwi@gmail.com',
            // 'instagram' => 'ameliaptriis',
            // 'biodata' => 'sugar is sweet but marklee is sweeter',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 10
        User::create([
            'name' => 'Eva Muzdalifah',
            'kelamin' => 'Perempuan',
            'email' => 'evamuzdalifah210@gmail.com',
            'instagram' => 'sky_vaa',
            'biodata' => 'ga sabaran',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 11 NC
        User::create([
            'name' => 'Falih Fadhli',
            'kelamin' => 'Laki-laki',
            'email' => 'falih@gmail.com',
            // 'instagram' => 'ameliaptriis',
            // 'biodata' => 'sugar is sweet but marklee is sweeter',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 12 NC
        User::create([
            'name' => 'Firyal Syifa Salsabila',
            'kelamin' => 'Perempuan',
            'email' => 'firyal@gmail.com',
            // 'instagram' => 'ameliaptriis',
            // 'biodata' => 'sugar is sweet but marklee is sweeter',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 13
        User::create([
            'name' => 'Hafiz Miftahul Fikry',
            'kelamin' => 'Laki-laki',
            'email' => 'miftahulfikry1012@gmail.com',
            'instagram' => 'fuwamifu_',
            'biodata' => 'Seorang pendosa yang ingin kembali dan Istiqomah dijalan Allah 😊',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 14 NC
        User::create([
            'name' => 'Ibaddurahman',
            'kelamin' => 'Laki-laki',
            'email' => 'ibad@gmail.com',
            // 'instagram' => 'ameliaptriis',
            // 'biodata' => 'sugar is sweet but marklee is sweeter',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 15
        User::create([
            'name' => 'Iqbal Bayhaqi Firdaus',
            'kelamin' => 'Laki-laki',
            'email' => 'iqbalbayhaqif@gmail.com',
            'instagram' => 'balf._',
            'biodata' => '"Talk to me before talking about me, and play with my mind before trusting me."',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 16 NC
        User::create([
            'name' => 'Maileni',
            'kelamin' => 'Perempuan',
            'email' => 'maileni@gmail.com',
            // 'instagram' => 'ameliaptriis',
            // 'biodata' => 'sugar is sweet but marklee is sweeter',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 17 NC
        User::create([
            'name' => 'Muhamad Adi Yaksa',
            'kelamin' => 'Laki-laki',
            'email' => 'adi@gmail.com',
            // 'instagram' => 'ameliaptriis',
            // 'biodata' => 'sugar is sweet but marklee is sweeter',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 18 NC
        User::create([
            'name' => 'Muhamad Alvin Aprian',
            'kelamin' => 'Laki-laki',
            'email' => 'alvin@gmail.com',
            // 'instagram' => 'ameliaptriis',
            // 'biodata' => 'sugar is sweet but marklee is sweeter',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 19 NC
        User::create([
            'name' => 'Muhammad Angga Saputra',
            'kelamin' => 'Laki-laki',
            'email' => 'angga@gmail.com',
            // 'instagram' => 'ameliaptriis',
            // 'biodata' => 'sugar is sweet but marklee is sweeter',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 20 NC
        User::create([
            'name' => 'Muhammad Fikri',
            'kelamin' => 'Laki-laki',
            'email' => 'fikri@gmail.com',
            // 'instagram' => 'ameliaptriis',
            // 'biodata' => 'sugar is sweet but marklee is sweeter',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 21
        User::create([
            'name' => 'Muhammad Rafli Febrian',
            'kelamin' => 'Laki-laki',
            'email' => 'muhammadraflifebrian27@gmail.com',
            'instagram' => '_mhmdrafli27',
            'biodata' => 'Semangat ngoding ',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 22
        User::create([
            'name' => 'Muhammad Refandi Asyauqi',
            'kelamin' => 'Laki-laki',
            'email' => 'dafdia01@gmail.com',
            // 'instagram' => '_mhmdrafli27',
            'biodata' => '"Walaupun ngestuck error masih ada banyak cara Dimulai dari cari di stack overflow sampe tanya ke chat-GPT" ',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 23 NC
        User::create([
            'name' => 'Muhammad Zhafran Hakeem',
            'kelamin' => 'Laki-laki',
            'email' => 'zhafran@gmail.com',
            // 'instagram' => '_mhmdrafli27',
            // 'biodata' => 'Semangat ngoding ',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 24 
        User::create([
            'name' => 'Nasya Surya Fadhilah',
            'kelamin' => 'Perempuan',
            'email' => 'nasyasfadhilah@gmail.com',
            'instagram' => 'saturn4sy._',
            'biodata' => '"Lets only hear pretty words and see pretty things" -Na Jaemin',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 25
        User::create([
            'name' => 'Nazal Gusti Prastya',
            'kelamin' => 'Laki-laki',
            'email' => 'nazalprastya@gmail.com',
            'instagram' => 'nzlprst',
            'biodata' => '"trust yourself and never give up whatever happens in your life"',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 26
        User::create([
            'name' => 'Novi Fitriani',
            'kelamin' => 'Perempuan',
            'email' => 'noviftrni30@gmail.com ',
            'instagram' => 'noviftrni._',
            'biodata' => 'aku itu pekerja keras tp kadang suka ngeluh aja ^_^',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 27
        User::create([
            'name' => 'Pasha Mauludfi Lesmana',
            'kelamin' => 'Laki-laki',
            'email' => 'pmauludfi@gmail.com',
            'instagram' => '_lesmana15',
            'biodata' => 'Pendiam macam ijat',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 28
        User::create([
            'name' => 'Rahma Kusuma Putri',
            'kelamin' => 'Perempuan',
            'email' => 'rahmakusumap@gmail.com',
            'instagram' => 'rahmaptri._22',
            'biodata' => 'sesuatu yang berlebihan itu tidak baik :)',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 29
        User::create([
            'name' => 'Rinawati',
            'kelamin' => 'Perempuan',
            'email' => 'rinwatt356@gmail.com',
            'instagram' => 'rrinaawt',
            'biodata' => 'gk tau, projek gwe blum beres pusink',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 30
        User::create([
            'name' => 'sabrina amalia',
            'kelamin' => 'Perempuan',
            'email' => 'amaliasabrina154@gmail.com',
            'instagram' => 'binaaalovingyou',
            'biodata' => 'hanya seorang gadis biasa yang memiliki banyak mimpi untuk memulai kehidupan dewasa yang lebih bermakna><',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 31
        User::create([
            'name' => 'Salsabila Tri M.D',
            'kelamin' => 'Perempuan',
            'email' => 'salsabilatmd@gmail.com',
            'instagram' => '_sabilaxx.0',
            'biodata' => 'idup kalo ga ngoding ya turu',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 32 NC
        User::create([
            'name' => 'Sayyid Alwan Rafif',
            'kelamin' => 'Laki-laki',
            'email' => 'sayyid@gmail.com',
            // 'instagram' => '_mhmdrafli27',
            // 'biodata' => 'Semangat ngoding ',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 33 NC
        User::create([
            'name' => 'Silvia Nur Kholifah',
            'kelamin' => 'Perempuan',
            'email' => 'silvia@gmail.com',
            // 'instagram' => '_mhmdrafli27',
            // 'biodata' => 'Semangat ngoding ',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 34 NC
        User::create([
            'name' => 'Sri Rahayu',
            'kelamin' => 'Perempuan',
            'email' => 'sri@gmail.com',
            // 'instagram' => '_mhmdrafli27',
            // 'biodata' => 'Semangat ngoding ',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 35
        User::create([
            'name' => 'Wanda Maulidina',
            'kelamin' => 'Perempuan',
            'email' => 'wandamaulidina26@gmail.com',
            'instagram' => 'wmldn_',
            'biodata' => '"Jangan takut menghadapi masa depan, hadapi dan perjuangkanlah"',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);

        // 36
        User::create([
            'name' => 'Yulianni Putri',
            'kelamin' => 'Perempuan',
            'email' => 'Archivesljn@gmail.com',
            'instagram' => 'Lee.a_2',
            'biodata' => 'Boys at school never amazed me, cause Lee Jeno did',
            'password' => bcrypt('password123'),
            'image' => '/murid/default.png'
        ]);
    }
}
