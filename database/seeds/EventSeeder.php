<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'event_name' => 'Evento',
            'event_des' => 'Descripcion',
            'event_price' => 100,
            'start_date' => '2019-06-10T13:58',
            'end_date' => '2019-06-10T15:00',
            'event_color' => '#2e64fe'
        ]);
    	DB::table('events')->insert([
    		'event_name' => 'Evento 2',
            'event_des' => 'Descripcion',
            'event_price' => 100,
            'start_date' => '2019-06-12T13:58',
            'end_date' => '2019-06-12T15:00',
            'event_color' => '#2e64fe'
    	]);
    	DB::table('events')->insert([
    		'event_name' => 'Evento 3',
            'event_des' => 'Descripcion',
            'event_price' => 100,
            'start_date' => '2019-06-14T13:58',
            'end_date' => '2019-06-14T15:00',
            'event_color' => '#2e64fe'
    	]);
    	DB::table('events')->insert([
    		'event_name' => 'Evento 4',
            'event_des' => 'Descripcion',
            'event_price' => 100,
            'start_date' => '2019-06-16T13:58',
            'end_date' => '2019-06-16T15:00',
            'event_color' => '#2e64fe'
    	]);
    	DB::table('events')->insert([
    		'event_name' => 'Evento 5',
            'event_des' => 'Descripcion',
            'event_price' => 100,
            'start_date' => '2019-06-18T13:58',
            'end_date' => '2019-06-18T15:00',
            'event_color' => '#2e64fe'
    	]);
    	DB::table('events')->insert([
    		'event_name' => 'Evento 6',
            'event_des' => 'Descripcion',
            'event_price' => 100,
            'start_date' => '2019-06-20T13:58',
            'end_date' => '2019-06-20T15:00',
            'event_color' => '#2e64fe'
    	]);

    	
    }
}

