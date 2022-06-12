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
            'name' => 'Juego de Vasos',
            'slug' => 'Juego de Vasos',
            'details' => 'Vasos de vidrio Enfriado,12 piezas, Transparentes',
            'price' => 23.99,
            'shipping_cost' => 2.99,
            'description' => 'Juego de Vasos',
            'category_id' => 6,
            'brand_id' => 6,
            'image_path' => 'juegovasos.png'
        ]);

        Product::create([
            'name' => 'Cuchillos Japoneses',
            'slug' => 'Cuchillos Japoneses',
            'details' => 'Acero inoxidable, 6 piezas, Negro',
            'price' => 90.99,
            'shipping_cost' => 12.99,
            'description' => 'Cuchillos Japoneses',
            'category_id' => 6,
            'brand_id' => 6,
            'image_path' => 'CuchilloJaponeses.jpg'
        ]);

        Product::create([
            'name' => 'Platos de Ceramica',
            'slug' => 'Platos de Ceramica',
            'details' => 'Juego de vajilla, 18 piezas, aptos para microondas',
            'price' => 84.99,
            'shipping_cost' => 12.99,
            'description' => 'Platos de Ceramica',
            'category_id' => 6,
            'brand_id' => 6,
            'image_path' => 'platosdeceramica.jpeg'
        ]);

        Product::create([
            'name' => 'Mesa de Madera',
            'slug' => 'Mesa de Madera',
            'details' => 'Mesa de comedor, madera de roble',
            'price' => 35.99,
            'shipping_cost' => 5.99,
            'description' => 'Mesa de Madera',
            'category_id' => 6,
            'brand_id' => 6,
            'image_path' => 'MesadeMadera.png'
        ]);

        Product::create([
            'name' => 'Cocina Electrica Duxtop LCD',
            'slug' => 'Cocina Electrica Duxtop LCD',
            'details' => 'Dos quemadores, 1800 W, Sensor tactil estufa',
            'price' => 200.99,
            'shipping_cost' => 15.99,
            'description' => 'Cocina Electrica Duxtop LCD',
            'category_id' => 6,
            'brand_id' => 6,
            'image_path' => 'cocinaelectrica.jpg'
        ]);

        Product::create([
            'name' => 'Silla de Madera',
            'slug' => 'Silla de Madera',
            'details' => 'Dos de Madera de Pino, listones en respando',
            'price' => 99.99,
            'shipping_cost' => 16.99,
            'description' => 'Silla de Madera',
            'category_id' => 7,
            'brand_id' => 7,
            'image_path' => 'silla.jpg'
        ]);

        Product::create([
            'name' => 'Sofa Luxor',
            'slug' => 'Sofa Luxor',
            'details' => 'Sofa Moderno, diseño comodo',
            'price' => 1099.99,
            'shipping_cost' => 25.99,
            'description' => 'Sofa Luxor',
            'category_id' => 7,
            'brand_id' => 7,
            'image_path' => 'Sofa.jpg'
        ]);

        Product::create([
            'name' => 'Lampara de Mesa',
            'slug' => 'Lampara de Mesa',
            'details' => 'Lampara minimalista, diseño moderno, beige',
            'price' => 44.99,
            'shipping_cost' => 8.99,
            'description' => 'Lampara de Mesa',
            'category_id' => 7,
            'brand_id' => 7,
            'image_path' => 'Linternademesa.jpg'
        ]);

        Product::create([
            'name' => 'Gabetero de Madera',
            'slug' => 'Gabetero de Madera',
            'details' => 'diseño Moderno y minimalista, 4 gabetas, color madera',
            'price' => 94.99,
            'shipping_cost' => 12.99,
            'description' => 'Gabetero de Madera',
            'category_id' => 7,
            'brand_id' => 7,
            'image_path' => 'gabeterodemadera.jpg'
        ]);

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

        Product::create([
            'name' => 'Play Station 5',
            'slug' => 'Play Station 5',
            'details' => '2 controles, 4k-TV Gaming, 16GB GDDR6, 1TB SSD',
            'price' => 449.99,
            'shipping_cost' => 26.99,
            'description' => 'Play Station 5',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'ps5.jpg'
        ]);
    }
}
