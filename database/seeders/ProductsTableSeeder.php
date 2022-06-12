<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

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
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'price' => 2499.99,
            'shipping_cost' => 29.99,
            'description' => 'MackBook Pro',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'macbook-pro.png'
        ]);


        Product::create([
            'name' => 'Dell Vostro 3557',
            'slug' => 'vostro-3557',
            'details' => '15 pulgadas, 1TB HDD, 8GB RAM',
            'price' => 1499.99,
            'shipping_cost' => 19.99,
            'description' => 'Dell Vostro 3557',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'dell-v3557.png'
        ]);


        Product::create([
            'name' => 'iPhone 11 Pro',
            'slug' => 'iphone-11-pro',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 649.99,
            'shipping_cost' => 14.99,
            'description' => 'iPhone 11 Pro',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'iphone-11-pro.png'
        ]);


        Product::create([
            'name' => 'Remax 610D Headset',
            'slug' => 'remax-610d',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 8.99,
            'shipping_cost' => 1.89,
            'description' => 'Remax 610D Headset',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'remax-610d.jpg'
        ]);


        Product::create([
            'name' => 'Samsung LED TV',
            'slug' => 'samsung-led-24',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 41.99,
            'shipping_cost' => 12.59,
            'description' => 'Samsung LED TV',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'samsung-led-24.png'
        ]);


        Product::create([
            'name' => 'Samsung Camara Digital',
            'slug' => 'samsung-mv800',
            'details' => '16.1MP, 5x Optical Zoom',
            'price' => 144.99,
            'shipping_cost' => 13.39,
            'description' => 'Samsung Digital Camera',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'samsung-mv800.jpg'
        ]);


        Product::create([
            'name' => 'Huawei GR 5 2017',
            'slug' => 'gr5-2017',
            'details' => '5.5 pulgadas, 32GB 4GB RAM',
            'price' => 148.99,
            'shipping_cost' => 6.79,
            'description' => 'Huawei GR 5 2017',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'gr5-2017.jpg'
        ]);

        Product::create([
            'name' => 'Set de comedor',
            'slug' => 'stc-04',
            'details' => 'Set de comedor exterior',
            'price' => 145.00,
            'shipping_cost' => 100.00,
            'description' => 'Set de comedor exterior',
            'category_id' => 6,
            'brand_id' => 6,
            'image_path' => 'set4.jpg'
        ]);

        Product::create([
            'name' => 'Sillón Uma Turquesa',
            'slug' => 'sstl-04',
            'details' => 'Sillón Uma Turquesa',
            'price' => 125.80,
            'shipping_cost' => 90.00,
            'description' => 'Sillón Uma Turquesa',
            'category_id' => 7,
            'brand_id' => 6,
            'image_path' => 'sillon.jpg'
        ]);

        Product::create([
            'name' => 'Lampara de techo artesanal',
            'slug' => 'lta-078',
            'details' => 'Lampara de techo artesanal',
            'price' => 15.50,
            'shipping_cost' => 8.00,
            'description' => 'Lampara de techo artesanal',
            'category_id' => 6,
            'brand_id' => 8,
            'image_path' => 'lta.jpg'
        ]);

        Product::create([
            'name' => 'Cama Royal King',
            'slug' => 'lta-07y',
            'details' => 'Cama Royal King',
            'price' => 175.99,
            'shipping_cost' => 135.50,
            'description' => 'Cama Royal King',
            'category_id' => 6,
            'brand_id' => 8,
            'image_path' => 'crk.jpg'
        ]);

        Product::create([
            'name' => 'Ropero W. Deluxe',
            'slug' => 'lta-07t',
            'details' => 'Ropero W. Deluxe',
            'price' => 75.99,
            'shipping_cost' => 55.12,
            'description' => 'Ropero W. Deluxe',
            'category_id' => 6,
            'brand_id' => 6,
            'image_path' => 'rwd.jpg'
        ]);

        Product::create([
            'name' => 'Set de sartenes Atlas',
            'slug' => 'lta-07u',
            'details' => 'Set de sartenes Atlas',
            'price' => 12.99,
            'shipping_cost' => 9.25,
            'description' => 'Set de sartenes Atlas',
            'category_id' => 8,
            'brand_id' => 7,
            'image_path' => 'pal.jpg'
        ]);

        Product::create([
            'name' => 'Cuchillos SR. Chef',
            'slug' => 'lta-07i',
            'details' => 'Cuchillos SR. Chef',
            'price' => 8.57,
            'shipping_cost' => 4.25,
            'description' => 'Cuchillos SR. Chef',
            'category_id' => 8,
            'brand_id' => 7,
            'image_path' => 'sir.jpg'
        ]);

        Product::create([
            'name' => 'Licuadora Oster Enterprisse',
            'slug' => 'lta-t07',
            'details' => 'Licuadora Oster Enterprisse',
            'price' => 95.99,
            'shipping_cost' => 75.00,
            'description' => 'Licuadora Oster Enterprisse',
            'category_id' => 8,
            'brand_id' => 7,
            'image_path' => 'ose.jpg'
        ]);


        Product::create([
            'name' => 'Hamaca de tela EconoProm',
            'slug' => 'lta-0y7',
            'details' => 'Hamaca de tela EconoProm',
            'price' => 29.99,
            'shipping_cost' => 25.15,
            'description' => 'Hamaca de tela EconoProm',
            'category_id' => 8,
            'brand_id' => 7,
            'image_path' => 'hamaca.jpg'
        ]);
    }
}
