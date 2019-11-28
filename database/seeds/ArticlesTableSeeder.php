<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'SHERLOCK HOLMES',
            'content' => 'TOM H WATSON',
            'category' => 'action',
            'user_id' => '1'
        ]);
    }
}
