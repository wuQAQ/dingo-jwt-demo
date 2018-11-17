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
        // 填充好多用户
        DB::table('users')->insert([
            'name' => 'wuQAQ',
            'email' => 'wuqaq@qq.com',
            'password' => app('hash')->make('123456'),
        ]);
    }
}
