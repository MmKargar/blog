<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'عنوان یک',
                'image' => 'images/6WDibPX7gvyegvtxbyhDHEaUjamBH0eSWtCjPu08.jpg',
                'body' => 'این عنوان یک است',
                'created_at' => '2022-07-05 09:36:04',
                'updated_at' => '2022-07-05 09:36:04',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'عنوان دو',
                'image' => 'images/kxUrcLNaCJPK26b8PIC7tp65wdWybffX6qGFwoxX.jpg',
                'body' => 'این عنوان دو است',
                'created_at' => '2022-07-05 09:36:24',
                'updated_at' => '2022-07-05 09:36:24',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'عنوان سه',
                'image' => 'images/ppKFggopetoarHRoH8EeNmZc2GP73GXaPfbRY4tl.jpg',
                'body' => 'این عنوان سه است',
                'created_at' => '2022-07-05 09:36:41',
                'updated_at' => '2022-07-05 09:36:41',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'عنوان چهار',
                'image' => 'images/1ci9vH9Y5vR27j8VgjBR8NG6InpJ1ZyyKttl4PNg.jpg',
                'body' => 'این عنوان چهار است',
                'created_at' => '2022-07-05 09:37:09',
                'updated_at' => '2022-07-05 09:37:09',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'عنوان پنج',
                'image' => 'images/iAqfrqjekBrJV1EHbjIEgryozHd1ftWq8vsi2Fof.jpg',
                'body' => 'این عنوان پنج است',
                'created_at' => '2022-07-05 09:37:35',
                'updated_at' => '2022-07-05 09:37:35',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'عنوان ششم',
                'image' => 'images/uwKvKqgBsGsYXJmWJfORf8jSqaa0XUpacJ5m3GFg.jpg',
                'body' => 'یا ن عنوان شیش است',
                'created_at' => '2022-07-05 09:37:55',
                'updated_at' => '2022-07-05 09:37:55',
            ),
        ));
        
        
    }
}