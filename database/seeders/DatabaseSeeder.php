<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
        {



        $this->call([
            ProductSeeder::class,
            RoleSeeder::class,
        ]);

        $admin = Role::whereName('admin')->first();
        $cashier = Role::whereName('cashier')->first();
        
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password'=> Hash::make('password'),
            'role_id'=> $admin->id,
        ]);

        User::create(
            [
            'name' => 'Cashier User',
            'email' => 'casher@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => $cashier->id,
            ]
        );

      

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
