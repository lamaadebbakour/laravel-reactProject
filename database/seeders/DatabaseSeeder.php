<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/1.jpg',
            'category_name'=>'Womens formal summer clothes',
            'price'=>'50$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/2.jpg',
            'category_name'=>'Womens formal summer clothes',
            'price'=>'55$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/3.jpg',
            'category_name'=>'Womens formal summer clothes',
            'price'=> '54$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/4.jpg',
            'category_name'=>'Womens formal summer clothes',
             'price'=> '60$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/5.jpg',
            'category_name'=>'Womens formal summer clothes',
            'price'=> '57$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/6.jpg',
            'category_name'=>'Womens formal summer clothes',
            'price'=> '55$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/7.jpg',
            'category_name'=>'Womens formal summer clothes',
            'price'=> '62$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/8.jpg',
            'category_name'=>'Womens formal summer clothes',
             'price'=> '56$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/9.jpg',
            'category_name'=>'Womens summer pajamas',
             'price'=> '30$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/10.jpg',
            'category_name'=>'Womens summer pajamas',
             'price'=> '27$'
        ]);   \App\Models\clothing::factory()->create([
            'image_path'=>'image/11.jpg',
            'category_name'=>'Womens summer pajamas',
             'price'=> '20$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/13.jpg',
            'category_name'=>'Womens summer pajamas',
            'price'=> '22$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/14.jpg',
            'category_name'=>'Womens summer pajamas',
            'price'=> '21$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/15.jpg',
            'category_name'=>'Womens summer pajamas',
            'price'=> '26$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/16.jpg',
            'category_name'=>'Womens formal winter clothes',
            'price'=> '70$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/17.jpg',
            'category_name'=>'Womens formal winter clothes',
            'price'=> '73$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/18.jpg',
            'category_name'=>'Womens formal winter clothes',
            'price'=> '78$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/19.jpg',
            'category_name'=>'Womens formal winter clothes',
            'price'=> '80$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/20.jpg',
            'category_name'=>'Womens formal winter clothes',
            'price'=> '74$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/21.jpg',
            'category_name'=>'Womens formal winter clothes',
            'price'=> '75$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/22.jpg',
            'category_name'=>'Womens winter pajamas',
            'price'=> '32$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/23.jpg',
            'category_name'=>'Womens winter pajamas',
            'price'=> '30$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/24.jpg',
            'category_name'=>'Womens winter pajamas',
            'price'=> '35$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/25.jpg',
            'category_name'=>'Womens winter pajamas',
            'price'=> '33$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/26.jpg',
            'category_name'=>'Womens winter pajamas',
            'price'=> '40$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/27.jpg',
            'category_name'=>'Womens winter pajamas',
            'price'=> '30$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/28.jpg',
            'category_name'=>'Womens winter pajamas',
            'price'=> '36$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/29.jpg',
            'category_name'=>'Womens winter pajamas',
            'price'=> '32$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/31.jpg',
            'category_name'=>'Mens formal summer clothes',
            'price'=> '50$'
        ]);
       \App\Models\clothing::factory()->create([
            'image_path'=>'image/32.jpg',
            'category_name'=>'Mens formal summer clothes',
            'price'=> '44$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/33.jpg',
            'category_name'=>'Mens formal summer clothes',
            'price'=> '47$'
        ]);
       
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/38.jpg',
            'category_name'=>'Mens formal summer clothes',
            'price'=> '45$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/39.jpg',
            'category_name'=>'Mens formal summer clothes',
            'price'=> '40$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/40.jpg',
            'category_name'=>'Mens formal summer clothes',
            'price'=> '53$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/41.jpg',
            'category_name'=>'Mens formal summer clothes',
            'price'=> '54$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/42.jpg',
            'category_name'=>'Mens formal summer clothes',
            'price'=> '57$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/43.jpg',
            'category_name'=>'Mens summer pajamas',
            'price'=> '25$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/44.jpg',
            'category_name'=>'Mens summer pajamas',
            'price'=> '28$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/45.jpg',
            'category_name'=>'Mens summer pajamas',
            'price'=> '23$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/46.jpg',
            'category_name'=>'Mens summer pajamas',
            'price'=> '20$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/47.jpg',
            'category_name'=>'Mens summer pajamas',
            'price'=> '28$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/48.jpg',
            'category_name'=>'Mens summer pajamas',
            'price'=> '30$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/49.jpg',
            'category_name'=>'Mens summer pajamas',
            'price'=> '32$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/50.jpg',
            'category_name'=>'Mens summer pajamas',
            'price'=> '25$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/51.jpg',
            'category_name'=>'Mens summer pajamas',
            'price'=> '26$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/52.jpg',
            'category_name'=>'Mens formal winter clothes',
            'price'=> '65$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/53.jpg',
            'category_name'=>'Mens formal winter clothes',
            'price'=> '68$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/54.jpg',
            'category_name'=>'Mens formal winter clothes',
            'price'=> '73$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/55.jpg',
            'category_name'=>'Mens formal winter clothes',
            'price'=> '63$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/56.jpg',
            'category_name'=>'Mens formal winter clothes',
            'price'=> '74$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/57.jpg',
            'category_name'=>'Mens formal winter clothes',
            'price'=> '75$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/58.jpg',
            'category_name'=>'Mens formal winter clothes',
            'price'=> '77$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/59.jpg',
            'category_name'=>'Mens formal winter clothes',
            'price'=> '71$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/60.jpg',
            'category_name'=>'Mens formal winter clothes',
            'price'=> '80$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/61.jpg',
            'category_name'=>'Mens formal winter clothes',
            'price'=> '66$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/62.jpg',
            'category_name'=>'Mens winter pajamas',
            'price'=> '37$'
        ]);
        \App\Models\clothing::factory()->create([
            'image_path'=>'image/63.jpg',
            'category_name'=>'Mens winter pajamas',
            'price'=> '32$'
        ]);\App\Models\clothing::factory()->create([
            'image_path'=>'image/64.jpg',
            'category_name'=>'Mens winter pajamas',
            'price'=> '40$'
        ]);\App\Models\clothing::factory()->create([
            'image_path'=>'image/65.jpg',
            'category_name'=>'Mens winter pajamas',
            'price'=> '42$'
        ]);\App\Models\clothing::factory()->create([
            'image_path'=>'image/66.jpg',
            'category_name'=>'Mens winter pajamas',
            'price'=> '37$'
        ]);\App\Models\clothing::factory()->create([
            'image_path'=>'image/67.jpg',
            'category_name'=>'Mens winter pajamas',
            'price'=> '34$'
        ]);\App\Models\clothing::factory()->create([
            'image_path'=>'image/68.jpg',
            'category_name'=>'Mens winter pajamas',
            'price'=> '44$'
        ]);\App\Models\clothing::factory()->create([
            'image_path'=>'image/69.jpg',
            'category_name'=>'Mens winter pajamas',
            'price'=> '43$'
        ]);
    }
}
