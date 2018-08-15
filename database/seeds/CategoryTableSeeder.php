<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $now = Carbon::now()->toDateTimeString();
        try{
        Category::insert([
            ['name'=>'Laptops','slug'=>'laptops','created_at'=>$now,'updated_at'=>$now],
            ['name'=>'Desktop','slug'=>'desktop','created_at'=>$now,'updated_at'=>$now],
            ['name'=>'Mobile Phones','slug'=>'mobile-phones','created_at'=>$now,'updated_at'=>$now],
            ['name'=>'Tablets','slug'=>'tablets','created_at'=>$now,'updated_at'=>$now],
            ['name'=>'TVs','slug'=>'tvs','created_at'=>$now,'updated_at'=>$now],
            ['name'=>'Digital Camera','slug'=>'digital-cameras','created_at'=>$now,'updated_at'=>$now],
            ['name'=>'Appliance','slug'=>'appliances','created_at'=>$now,'updated_at'=>$now],
            ['name'=>'Gadgets','slug'=>'gadgets','created_at'=>$now,'updated_at'=>$now] 
        ]);
        }
        catch(Exception $e)
        {
        }
    }
}
