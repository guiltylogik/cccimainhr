<?php

use Illuminate\Database\Seeder;

class MinistriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ministries')->delete();
        
        \DB::table('ministries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 1,
                'ministry' => 'Men\'s Ministry',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 1,
                'ministry' => 'Women\'s Ministry',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 1,
                'ministry' => 'Youth Ministry',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 1,
                'ministry' => 'Children\'s Ministry',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 1,
                'ministry' => 'Worship Angels Dance Ministry',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'type' => 1,
                'ministry' => 'Prayer Warriors and Intercessory Ministry',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'type' => 1,
                'ministry' => 'Visitation Ministry',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'type' => 1,
                'ministry' => 'Evangelism Ministry',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'type' => 2,
                'ministry' => 'Music',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'type' => 2,
            'ministry' => 'Instrumentalist (Music)',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'type' => 2,
                'ministry' => 'Ushering',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'type' => 2,
                'ministry' => 'Office/Administration',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'type' => 2,
                'ministry' => 'Audio Visual',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'type' => 2,
                'ministry' => 'House Keeping',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'type' => 2,
                'ministry' => 'Counselling',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'type' => 2,
                'ministry' => 'Decoration and Church Maintainance',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'type' => 2,
                'ministry' => 'Technical Team',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'type' => 2,
                'ministry' => 'Children\'s Department Teachers',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'type' => 2,
                'ministry' => 'Tambourine',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'type' => 2,
                'ministry' => 'Catering and Event Management',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'type' => 2,
                'ministry' => 'Publishing',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'type' => 2,
                'ministry' => 'Welcoming /Assimilation',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'type' => 2,
                'ministry' => 'Media and Public Relation',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'type' => 2,
                'ministry' => 'Costume/Wardrobe',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'type' => 2,
            'ministry' => 'Crystal Theater (Drama Group)',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'type' => 2,
                'ministry' => 'Artisans/Trade Persons',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
