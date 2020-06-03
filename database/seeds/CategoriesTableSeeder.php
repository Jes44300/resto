<?php

use Illuminate\Database\Seeder;
use App\Category ; 

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'High tech',
            'slug' => 'tintin'
        ]) ; 

        Category::create([
            'name' => 'Maison',
            'slug' => 'Beaujoire'
        ]) ;

        Category::create([
            'name' => 'Voiture',
            'slug' => 'Merco'
        ]) ;

        Category::create([
            'name' => 'Voiture',
            'slug' => 'Merco'
        ]) ;

        Category::create([
            'name' => 'Voiture',
            'slug' => 'Merco'
        ]) ;
    }
}
