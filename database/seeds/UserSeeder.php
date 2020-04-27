<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table('users')->insert([

                'name' => 'bryan',
                'email' => 'bryan.londot@hotmail.com',
                'photo' =>'team/1.jpg',
                'password' => Hash::make('bryan.londot@hotmail.com'),
                'role_id' => 1,

            ]);
            
            DB::table('users')->insert([

                'name' => 'fatih',
                'email' => 'fatih@hotmail.com',
                'photo' =>'team/2.jpg',
                'password' => Hash::make('fatih@hotmail.com'),
                'role_id' => 2,

            ]);
            
            DB::table('users')->insert([

                'name' => 'kadir',
                'email' => 'kadir@hotmail.com',
                'photo' =>'team/3.jpg',
                'password' => Hash::make('kadir@hotmail.com'),
                'role_id' => 3,

            ]);
            DB::table('users')->insert([

                'name' => 'Shannon Stoller',
                'email' => 'lel@hotmail.com',
                'photo' =>'team/2.jpg',
                'password' => Hash::make('lel@hotmail.com'),
                'role_id' => 2,

            ]);

            
            DB::table('users')->insert([

                'name' => 'Rayane Tahiri',
                'email' => 'chieur@hotmail.com',
                'photo' =>'team/1.jpg',
                'password' => Hash::make('chieur@hotmail.com'),
                'role_id' => 3,

            ]);
            DB::table('users')->insert([

                'name' => 'Fati Dahri ',
                'email' => 'crepe@hotmail.com',
                'photo' =>'team/2.jpg',
                'password' => Hash::make('crepe@hotmail.com'),
                'role_id' => 5,

            ]);
            DB::table('users')->insert([

                'name' => 'Noel Bakiasi',
                'email' => 'letype@hotmail.com',
                'photo' =>'team/3.jpg',
                'password' => Hash::make('letype@hotmail.com'),
                'role_id' => 3,

            ]);
            DB::table('users')->insert([

                'name' => 'Zaïnab Fahem',
                'email' => 'hulk@hotmail.com',
                'photo' =>'team/3.jpg',
                'password' => Hash::make('hulk@hotmail.com'),
                'role_id' => 3,

            ]);
    }
}
