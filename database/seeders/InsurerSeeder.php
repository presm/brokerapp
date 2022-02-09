<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class InsurerSeeder extends Seeder
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
        DB::table('insurers')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $json = Storage::disk('local')->get('broker.json');
        $clients = json_decode($json, true);
        foreach ($clients as $client) {
            foreach ($client['policies'] as $policy) {
                DB::table('insurers')->insertOrIgnore([
                    'insurer_name' => $policy['insurer_name'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
