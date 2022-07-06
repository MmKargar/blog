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
                'image' => 'images/Tw3Kr53IBbbaiWt8mes32yctfCGyv4nzc7rmjdBO.jpg',
                'body' => 'این عنوان یک است',
                'created_at' => '2022-07-06 13:57:25',
                'updated_at' => '2022-07-06 13:57:25',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'عنوان 2',
                'image' => 'images/MXz3bjpDJX2VQwzM6xqCrpfThAVSRWwbTAdSK3wQ.jpg',
                'body' => 'این عنوان دو است',
                'created_at' => '2022-07-06 13:58:34',
                'updated_at' => '2022-07-06 13:58:34',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'عنوان سه',
                'image' => 'images/kLOeoT5Y0HR1M4VBjStynyqdzDkxuJM3VM6xT0Fk.jpg',
                'body' => 'این عنوان سه است',
                'created_at' => '2022-07-06 13:59:01',
                'updated_at' => '2022-07-06 13:59:01',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'عنوان چهار',
                'image' => 'images/8A92ScEEOC3gPGMV43h0KHZG7kTDmLq6RFAyzFxC.jpg',
                'body' => 'این عنوان چهار است',
                'created_at' => '2022-07-06 13:59:25',
                'updated_at' => '2022-07-06 13:59:25',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'عنوان پنج',
                'image' => 'images/MHl8u5raeh3BpRtJDyvSveKrKCd0McJu1FZfIWfe.jpg',
                'body' => 'این عنوان پنج است',
                'created_at' => '2022-07-06 13:59:46',
                'updated_at' => '2022-07-06 13:59:46',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'عنوان شش',
                'image' => 'images/Gq2IZwX7djHfnJXjJ6ligDmTh8FnEcVsEHqZOOZE.jpg',
                'body' => 'این عنوان ششم است',
                'created_at' => '2022-07-06 14:00:22',
                'updated_at' => '2022-07-06 14:00:22',
            ),
        ));
        
        
    }
}