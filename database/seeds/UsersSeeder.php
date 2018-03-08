<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		App\User::create([
			'name' => 'Kahmipreneur',
			'username' => 'admin',
			'email' => 'kahmipreneur@gmail.com',
			'password' => bcrypt('adminkahmipreneur5218'),
			'jenis_kelamin' => 'laki-laki',
			'nik' => '1234123',
			'no_hp' => '087654321',
			'alamat' => 'jalan kahmipreneur',
			'kota' => 'jakarta',
			'kecamatan' => 'jakarta selatan',
			'pekerjaan' => 'developer',
			'harapan' => 'nikah tepat waktu',
			'is_activated' => 1,
			'role' => 'admin'
		]);
		
		App\User::create([
			'name' => 'User',
			'username' => 'user',
			'email' => 'takimanwar@gmail.com',
			'password' => bcrypt('rahasia'),
			'jenis_kelamin' => 'laki-laki',
			'nik' => '1234132',
			'no_hp' => '087654321',
			'alamat' => 'jalan kamipreneur',
			'kota' => 'jakarta',
			'kecamatan' => 'jakarta selatan',
			'pekerjaan' => 'bajak laut',
			'harapan' => 'nikah tepast waktu',
			'is_activated' => 1,
			'role' => 'member'
		]);

    }
}
