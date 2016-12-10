<?php

use Illuminate\Database\Seeder;
use App\About;
use App\Contact;

class ContentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
        	'content_en' => '',
            'content_ru' => '',
        ]); 
        Contact::create([
        	'content_en' => '',
            'content_ru' => '',
        ]); 
    }
}
