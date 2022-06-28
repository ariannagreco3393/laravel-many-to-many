<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = ['FrontEnd', 'Backend', 'Programming', 'FullStack', 'Design' , 'Ops'   ];

        foreach ($categories as $category) {

            $new_cat = new Category();
            $new_cat->name = $category;
            $new_cat->slug = Str::slug($new_cat->name) ;
            $new_cat->save();
            # code...
        }
    }
}
