<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Product::create([
           'name' => 'Choco Lave',
           'slug' => 'choco-lava',
           'details' => 'Delicious Treat to the sweettooths',
           'price'  => '230',
           'specification' => 'Choco lave cake and dudges made with freshlly brewed coffee beans'
       ]);
       Product::create([
        'name' => 'Spagetti',
        'slug' => 'spagetti',
        'details' => 'Italian delight',
        'price'  => '321',
        'specification' => 'Example description'
    ]);
    Product::create([
        'name' => 'galaxy s9',
        'slug' => 's9',
        'details' => '64Gb, 6Gb RAM, Mali G1050, Gorilla Glass 4,Span Dragon 850Soc',
        'price'  => '49000',
        'specification' => 'Example Description'
    ]);
    Product::create([
        'name' => 'Mac Book Pro',
        'slug' => 'macbook-pro',
        'details' => '256Gb SSD,14.4 Inch Screen,Retina Display, A9 Processor',
        'price'  => '230',
        'specification' => 'Example Description'
    ]);
    Product::create([
        'name' => 'Alexa Echo',
        'slug' => 'alexa-echo',
        'details' => 'Smart Home Comapanion',
        'price'  => '230',
        'specification' => 'Example Description'
    ]);
    }
}
