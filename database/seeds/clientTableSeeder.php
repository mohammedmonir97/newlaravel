<?php

use Illuminate\Database\Seeder;

class clientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = ['ahmed', 'mohamed'];

        foreach ($clients as $client) {

            \App\Client::create([
               'name' => $client,
               'phone' => '011111112',
               'address' => 'haram',
            ]);

        }//end of foreach
    }
}
