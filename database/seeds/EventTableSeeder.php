<?php

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
              'title' => 'これはテストで投稿しています。',
              'body' => 'これはテストです',
            ],
          ]);
        factory(Event::class, 20)->create();   
    }
}
