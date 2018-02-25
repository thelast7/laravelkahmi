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
			'name' => 'SuperAdmin',
			'username' => 'admin',
			'email' => 'packercyber@gmail.com',
			'password' => bcrypt('rahasia'),
			'jenis_kelamin' => 'laki-laki',
			'nik' => '1234123',
			'no_hp' => '0888989890',
			'alamat' => 'jl kanfer 2 nomer',
			'kota' => 'pekalongan',
			'kecamatan' => 'pekalongan utara',
			'pekerjaan' => 'bajak laut',
			'harapan' => 'makan makan daging',
			'is_activated' => 1,
			'role' => 'admin'
		]);
		
		App\User::create([
			'name' => 'User',
			'username' => 'user',
			'email' => 'virusphp@gmail.com',
			'password' => bcrypt('rahasia'),
			'jenis_kelamin' => 'laki-laki',
			'nik' => '1234132',
			'no_hp' => '0888989390',
			'alamat' => 'jl kanfer 4 nomer',
			'kota' => 'pekalongan',
			'kecamatan' => 'pekalongan utara',
			'pekerjaan' => 'bajak laut',
			'harapan' => 'makan makan daging',
			'is_activated' => 1,
			'role' => 'member'
		]);

    }
}
