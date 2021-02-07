<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'MD.Admin',
            'username' => 'admin',
            'mobile'=>'01902925951',
            'email' => 'admin@blog.com',
            'password' => bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'MD.Author',
            'username' => 'author',
            'mobile'=>'01684168094',
            'email' => 'author@blog.com',
            'password' => bcrypt('rootauthor'),
        ]);
    }
}
