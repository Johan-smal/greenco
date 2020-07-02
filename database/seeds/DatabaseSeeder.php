<?php

use App\User;
use App\Customer;
use App\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $defaultUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        factory(User::class, 5)->create();

        factory(Customer::class, 5)->create()->each(function ($customer) {
            $customer->services()->saveMany(factory(Service::class, rand(4, 8))->make());
        });

    }
}
