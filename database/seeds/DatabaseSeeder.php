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
            ]
        ]);
     //    DB::table('users')->insert([
     //    [
     //        'name' => 'afni',
     //        'password' => bcrypt('123456'),
     //    ],
     //    [
     //        'name' => 'annisa',
     //        'password' => bcrypt('123456'),
     //    ],
     //    [
     //        'name' => 'arie',
     //        'password' => bcrypt('123456'),
     //    ],
     //    [
     //        'name' => 'ani',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'desnida',
     //        'password' => bcrypt('123456'),
     //    ],
     //    [
     //        'name' => 'ema',
     //        'password' => bcrypt('123456'),
     //    ],
     //    [
     //        'name' => 'idawati',
     //        'password' => bcrypt('123456'),
     //    ],
     //    [
     //        'name' => 'larasati',
     //        'password' => bcrypt('123456'),
     //    ],
     //    [
     //        'name' => 'neli',
     //        'password' => bcrypt('123456'),
     //    ],
     //    [
     //        'name' => 'nina',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'jamillah',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'rian',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'rizki',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'shifa',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'sitirohmah',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'yuni',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'riana',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'adun',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'abrar',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'adi',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'ahmadkhoiri',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'andi',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'arief',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'fadil',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'imam',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'kamalian',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'siddiq',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'muhammadkhoiri',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'rudi',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'suparman',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'wiyanda',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'yuda',
     //        'password' => bcrypt('123456'),
     //    ],[
     //        'name' => 'yuri',
     //        'password' => bcrypt('123456'),
     //    ]
    	// ]);
    }
}
