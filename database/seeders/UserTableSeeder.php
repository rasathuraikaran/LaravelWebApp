<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user=new User;
      $user->name='Super Admin';
      $user->email='superadmin@gmail.com';
      $user->password=Hash::make('password');
      $user->save();
      $user->assignRole('Super Admin');

    }
}
