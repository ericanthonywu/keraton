<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner')->insert([
            "nama"=>"uh_shop",
            "file"=>"Super_Admin_dy13ltbg5Y1556006986.jpg",
            "name_file"=>"asd1.jpg",
            "phone"=>null,
            "url"=>"http://google.com",
            "lat"=>"-6.1826977",
            "long"=>"106.7883846",
            "confirmation"=>"isi konfirmasi",
            "order"=>"2",
            "created_at"=>"2019-04-23 15:09:46",
            "updated_at"=>"2019-04-23 15:09:46",
        ]);
        DB::table('banner')->insert([
            "nama"=>"bannera",
            "file"=>"Super_Admin_KUPMu5bYcn1556008739.jpg",
            "name_file"=>"123.jpg",
            "phone"=>"081236391375",
            "url"=>null,
            "lat"=>"-6.1826977",
            "long"=>"106.7883846",
            "confirmation"=>"isi konfirmasi",
            "order"=>"3",
            "created_at"=>"2019-04-23 15:09:46",
            "updated_at"=>"2019-04-23 15:09:46",
        ]);
        DB::table('banner')->insert([
            "nama"=>"bannera",
            "file"=>"Super_Admin_SLXVqRjQ1I1556008681.jpg",
            "name_file"=>"wallpaper2you_567134.jpg",
            "phone"=>"081236391375",
            "url"=>"https://www.instagram.com/",
            "lat"=>"-6.1826977",
            "long"=>"106.7883846",
            "confirmation"=>"isi konfirmasi",
            "order"=>"1",
            "created_at"=>"2019-04-23 15:09:46",
            "updated_at"=>"2019-04-23 15:09:46",
        ]);
        DB::table('users')->insert([
            "name"=>"tes",
            "email"=>"tes@tes.com",
            "password"=>bcrypt('tes')
        ]);
        DB::table('admin')->insert([
            "name"=>"Super Admin",
            "username"=>'superadmin',
            "email"=>"ericanthonywu89@gmail.com",
            "emailst"=>0,
            'password'=>bcrypt('admin'),
            "level"=>3,
        ]);
        DB::table('admin')->insert([
            "name"=>"Admin",
            "username"=>'admin',
            "email"=>"ericanthonywu2@gmail.com",
            "emailst"=>0,
            'password'=>bcrypt('admin'),
            "level"=>2,
        ]);
        DB::table('admin')->insert([
            "name"=>"Manager",
            "username"=>'manager',
            "email"=>"ericanthonywu3@gmail.com",
            "emailst"=>0,
            'password'=>bcrypt('admin'),
            "level"=>1,
        ]);
        DB::table('admin')->insert([
            "name"=>"Marketing",
            "username"=>'marketing',
            "email"=>"ericanthonywu4@gmail.com",
            "emailst"=>0,
            'password'=>bcrypt('admin'),
            "level"=>0,
        ]);

    }
}
