<?php

use codedelivery\Models\Client;
use Illuminate\Database\Seeder;
use codedelivery\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->create([

            'name' => 'Admin',
            'email' => 'admin@user.com',
            'password' => bcrypt(123456),
            'role' => 'admin',
            'remember_token' => str_random(10),
        ]);

        factory(Client::class, 1)->create([

            'city' => 'Caldas Novas',
            'state' => 'Goias',
            'phone' => '545454',
            'address' => 'princesa asijas',
            'zipcode' => 'curioso',
            'user_id' => 1,
        ]);

        factory(User::class, 20)->create(

            ['role' => 'cliente']

        )->each(function ($u) {

            $u->client()->save(factory(Client::class)->make());
        });

        factory(User::class, 3)->create([
            'role' => 'deliveryman',
        ]);
    }
}
