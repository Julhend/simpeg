<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
    [
        'name' => 'super',
        'email' => 'admin@admin.com',
        'level' => 'admin',
        'password' => bcrypt('123456')
    ],
    [
        'name' => 'user',
        'email' => 'user@user.com',
        'level' => 'pegawai',
        'password' => bcrypt('123456')
    ]
];
    foreach($records as $record) {
    App\User::firstOrCreate($record);
}
    }
}