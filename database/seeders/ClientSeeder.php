<?php

namespace Database\Seeders;

use http\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Clients;
use Illuminate\Support\Facades\Storage;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('Clients')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $json = Storage::disk('local')->get('broker.json');
        $clients = json_decode($json, true);
foreach ($clients as $client) {
   DB::table('clients')->insert([
       'name' => $client['name'],
       'created_at' => now(),
       'updated_at' => now()
       ]);
        }
    }
}
