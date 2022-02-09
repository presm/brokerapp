<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call([
            ClientSeeder::class,
            InsurerSeeder::class,
            CustomersSeeder::class,
            PoliciesSeeder::class,
        ]);
    }
}
