<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

     //   Product::truncate();
       
        for($i = 1; $i <= 10; $i++){
            Product::updateOrCreate([
                'name'=> 'Laptop'.$i,
                'slug' => 'laptop'.$i,
                'details' => [13,14,15][array_rand([13,14,15])].'inch,'.[1,2,3][array_rand([1,2,3])].'TB SSD,32GB RAM',
                'price' => rand(1500,3000),
                'description' => 'Lorem'.$i.' ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.',
                ])->categories()->attach(1);
        }
      $product = Product::find(1)-> categories()->attach(2); 

        for($i = 1; $i <= 10; $i++){
            Product::updateOrCreate([
                'name'=> 'Desktop'.$i,
                'slug' => 'desktop-'.$i,
                'details' => [24,25,27][array_rand([24,25,27])].'inch,'.[1,2,3][array_rand([1,2,3])].'TB SSD,32GB RAM',
                'price' => rand(2500,5000),
                'description' => 'Lorem '.$i.'ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.',
                ])->categories()->attach(2);
        }

        for($i = 1; $i <= 10; $i++){
            Product::updateOrCreate([
                'name'=> 'Phone'.$i,
                'slug' => 'phone-'.$i,
                'details' => [16,32,64,128,256][array_rand([16,32,64,128,256])].'GB,'.[7,8,9][array_rand([7,8,9])].'inch screen,4GHZ Quad Core',
                'price' => rand(400,1500),
                'description' => 'Lorem'.$i.' ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.',
                ])->categories()->attach(3);
        }

        for($i = 1; $i <= 10; $i++){
            Product::updateOrCreate([
                'name'=> 'TV'.$i,
                'slug' => 'tv'.$i,
                'details' => [46,50,60][array_rand([46,50,60])].'inch screen Smart TV,4K',
                'price' => rand(700,2500),
                'description' => 'Lorem'.$i.' ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.',
                ])->categories()->attach(4);
        }
    }
}