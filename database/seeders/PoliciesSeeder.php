<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PoliciesSeeder extends Seeder
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
        DB::table('policies')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $json = Storage::disk('local')->get('broker.json');
        $clients = json_decode($json, true);
        foreach ($clients as $client) {
            $clientId = DB::table('clients')->where('name', $client['name'])->value('id');
            foreach ($client['policies'] as $policy) {
               $customerId = DB::table('customers')->where('customer_name', $policy['customer_name'])->value('id');
               $insurerId = DB::table('insurers')->where('insurer_name', $policy['insurer_name'])->value('id');
                DB::table('policies')->insertOrIgnore([
                    'policy_type' => $policy['policy_type'],
                    'premium' => $policy['premium'],
                    'created_at' => now(),
                    'updated_at' => now(),
                    'client_id' => $clientId,
                    'customer_id' => $customerId,
                    'insurer_id' => $insurerId
                ]);
            }
        }
    }
}
