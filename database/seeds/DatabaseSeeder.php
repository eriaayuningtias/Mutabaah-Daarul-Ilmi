<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->delete();

        DB::table('users')->insert([
            [
                'name' => 'admin01',
                'username' => 'admin01',
                'password' => 'admin01',
                'is_admin' => '1',
            ],
            [
                'name' => 'user01',
                'username' => 'user01',
                'password' => 'user01',
                'is_admin' => '0',
            ],
            [
                'username' => 'afni',
                'name' => 'Afni',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],
            [
                'username' => 'annisa',
                'name' => 'Annisa Rhaudhatul Jannah',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],
            [
                'username' => 'arie',
                'name' => 'Arie Primasari',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],
            [
                'username' => 'ani',
                'name' => 'Ani Novitasari',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'desnida',
                'name' => 'Desnida Sari',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],
            [
                'username' => 'ema',
                'name' => 'Ema Yunika',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],
            [
                'username' => 'idawati',
                'name' => 'Idawati',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],
            [
                'username' => 'larasati',
                'name' => 'Larasati Devi A.',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],
            [
                'username' => 'neli',
                'name' => 'Neli Yulina',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],
            [
                'username' => 'nina',
                'name' => 'Nina Apriawati',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'jamillah',
                'name' => 'Jamillah',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'rian',
                'name' => 'Rian Diasti',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'rizki',
                'name' => 'Rizki Aditya Putri',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'sifha',
                'name' => 'Sifha Ni Najmah',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'sitirohmah',
                'name' => 'Siti Rohman N.H',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'yuni',
                'name' => 'Yuni Purwanti',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'riana',
                'name' => 'Riana',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'adun',
                'name' => 'Adun',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'abrar',
                'name' => 'Abrar Adzka',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'adi',
                'name' => 'Adi Setiawan',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'ahmadkhoiri',
                'name' => 'Ahmad Khoiri',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'andi',
                'name' => 'Andi Prasetiyo',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'arief',
                'name' => 'Arief Ageng Sanjaya',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'fadil',
                'name' => 'Fadilah Makmur A.',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'imam',
                'name' => 'Imam Purnama',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'kamalian',
                'name' => 'Kamalian',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'siddiq',
                'name' => 'Muhammad Siddiq',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'muhammadkhoiri',
                'name' => 'Muhammad Khoiri',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'rudi',
                'name' => 'Rudi Hasan',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'suparman',
                'name' => 'Suparman',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'wiyanda',
                'name' => 'Wiyanda',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'yuda',
                'name' => 'Yuda Prasetia',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],[
                'username' => 'yuri',
                'name' => 'Yuri Pramono',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ]
            ]);
     //    DB::table('users')->insert([
     //    
    	// ]);
    }
}
