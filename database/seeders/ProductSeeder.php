<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat direktori jika belum ada
        Storage::makeDirectory('public/product');

        $products = [
            [
                'name' => 'Samsung S21 Ultra 5G',
                'category' => 'Smartphone',
                'image' => 'image1.jpg',
                'path' => 'storage/product/image1.jpg',
                'description' => "Samsung S21 Ultra 5G adalah smartphone andalan yang menawarkan pengalaman tak tertandingi dalam teknologi mobile. Dibekali dengan kamera yang canggih, layar Super AMOLED yang memukau, dan performa yang tangguh, S21 Ultra 5G adalah pilihan sempurna bagi mereka yang menginginkan yang terbaik. Nikmati kemampuan multitasking tanpa batas, keindahan gambar yang luar biasa, dan kecepatan internet 5G yang mengagumkan dengan Samsung S21 Ultra 5G.",
                'warranty' => '1 Tahun',
                'memory' => '6/128 GB',
                'price' => 9000000,
                'discount' => 0,
            ],
            [
                'name' => 'Samsung Galaxy S20',
                'category' => 'Smartphone',
                'image' => 'image2.jpg',
                'path' => 'storage/product/image2.jpg',
                'description' => "Samsung Galaxy S20 adalah smartphone premium yang menawarkan kombinasi sempurna antara desain elegan, performa tinggi, dan fitur-fitur canggih. Dengan kamera yang inovatif, layar Dynamic AMOLED yang memukau, dan kemampuan 5G, S20 adalah pilihan ideal bagi mereka yang menginginkan yang terbaik dalam teknologi mobile. Rasakan kecepatan dan ketangguhan yang luar biasa dengan Samsung Galaxy S20.",
                'warranty' => '1 Tahun',
                'memory' => '8/256 GB',
                'price' => 7500000,
                'discount' => 0,
            ],
            [
                'name' => 'iPhone 12 Pro',
                'category' => 'Smartphone',
                'image' => 'image3.jpg',
                'path' => 'storage/product/image3.jpg',
                'description' => "iPhone 12 Pro adalah perangkat revolusioner yang menghadirkan kinerja maksimal, desain yang elegan, dan fitur-fitur inovatif. Dibekali dengan prosesor A14 Bionic yang canggih, sistem kamera yang luar biasa, dan layar Super Retina XDR yang memukau, iPhone 12 Pro adalah pilihan sempurna bagi mereka yang menginginkan yang terbaik dalam teknologi mobile. Rasakan kekuatan dan keindahan iPhone 12 Pro dalam setiap momen Anda.",
                'warranty' => '1 Tahun',
                'memory' => '6/128 GB',
                'price' => 10000000,
                'discount' => 10,
            ],
            [
                'name' => 'Dell XPS 13',
                'category' => 'Laptop',
                'image' => 'image4.jpg',
                'path' => 'storage/product/image4.jpg',
                'description' => "Dell XPS 13 adalah laptop ultrabook yang memadukan desain yang ramping dengan performa yang tangguh. Dengan layar InfinityEdge yang memukau, prosesor Intel Core generasi terbaru, dan desain yang ringkas, XPS 13 cocok untuk pengguna yang membutuhkan laptop yang portabel namun tetap bertenaga. Nikmati produktivitas yang maksimal dan kinerja yang tak tertandingi dengan Dell XPS 13.",
                'warranty' => '2 Tahun',
                'memory' => '512 GB SSD',
                'price' => 10000000,
                'discount' => 5,
            ],
            [
                'name' => 'MacBook Air',
                'category' => 'Laptop',
                'image' => 'image5.jpg',
                'path' => 'storage/product/image5.jpg',
                'description' => "MacBook Air adalah laptop ultra-portabel yang memadukan kinerja luar biasa dengan desain yang ramping dan ringan. Dengan prosesor Apple M1 yang inovatif, layar Retina yang memukau, dan daya tahan baterai yang luar biasa, MacBook Air adalah pilihan sempurna bagi mereka yang mencari laptop yang bisa dibawa ke mana saja. Baik Anda sedang bepergian, bekerja dari kafe, atau menjalankan tugas sehari-hari, MacBook Air akan memenuhi semua kebutuhan Anda.",
                'warranty' => '2 Tahun',
                'memory' => '256 GB SSD',
                'price' => 14000000,
                'discount' => 0,
            ],
            [
                'name' => 'iPad Air',
                'category' => 'Tablet',
                'image' => 'image6.jpg',
                'path' => 'storage/product/image6.jpg',
                'description' => "iPad Air adalah tablet yang menggabungkan kinerja tinggi dengan desain yang elegan dan layar yang luar biasa. Dengan prosesor A14 Bionic yang canggih, layar Retina 10,9 inci, dan dukungan untuk Apple Pencil dan Keyboard Magic, iPad Air cocok untuk produktivitas sehari-hari, hiburan, dan kreativitas. Dengan berbagai fitur yang luar biasa, iPad Air memberikan pengalaman yang tidak tertandingi dalam kategori tablet.",
                'warranty' => '1 Tahun',
                'memory' => '128 GB',
                'price' => 7000000,
                'discount' => 0,
            ],
            [
                'name' => 'Samsung Galaxy Tab S6',
                'category' => 'Tablet',
                'image' => 'image7.jpg',
                'path' => 'storage/product/image7.jpg',
                'description' => "Samsung Galaxy Tab S6 adalah tablet premium yang menggabungkan kinerja tinggi dengan desain yang elegan. Dengan layar Super AMOLED yang memukau, S Pen yang presisi, dan audio AKG yang kaya, Tab S6 cocok untuk produktivitas, hiburan, dan kreativitas. Rasakan kebebasan untuk bekerja dan bermain di mana saja dengan Samsung Galaxy Tab S6.",
                'warranty' => '1 Tahun',
                'memory' => '256 GB',
                'price' => 6000000,
                'discount' => 5,
            ],
            [
                'name' => 'Asus ROG Phone 5',
                'category' => 'Smartphone',
                'image' => 'image8.jpg',
                'path' => 'storage/product/image8.jpg',
                'description' => "Asus ROG Phone 5 adalah smartphone gaming terbaru yang menghadirkan performa luar biasa dan fitur-fitur gaming canggih. Dengan layar AMOLED 144Hz yang responsif, sistem pendinginan AeroActive, dan tombol trigger ultrasonik, ROG Phone 5 memungkinkan Anda untuk merasakan sensasi gaming sejati di mana saja. Baik Anda adalah gamer profesional atau penggemar mobile gaming yang serius, Asus ROG Phone 5 akan memberikan pengalaman gaming yang tak tertandingi.",
                'warranty' => '1 Tahun',
                'memory' => '12/256 GB',
                'price' => 5000000,
                'discount' => 10,
            ],
            [
                'name' => 'HP Spectre x360',
                'category' => 'Laptop',
                'image' => 'image9.jpg',
                'path' => 'storage/product/image9.jpg',
                'description' => "HP Spectre x360 adalah laptop premium yang menawarkan kombinasi sempurna antara desain yang elegan, performa tinggi, dan fleksibilitas yang luar biasa. Dengan layar sentuh 360 derajat, prosesor Intel Core generasi terbaru, dan desain yang ramping, Spectre x360 cocok untuk produktivitas sehari-hari, hiburan, dan kreativitas. Rasakan kebebasan untuk bekerja di mana saja dengan HP Spectre x360.",
                'warranty' => '2 Tahun',
                'memory' => '512 GB SSD',
                'price' => 16000000,
                'discount' => 0,
            ],
            [
                'name' => 'iPad Pro',
                'category' => 'Tablet',
                'image' => 'image10.jpg',
                'path' => 'storage/product/image10.jpg',
                'description' => "iPad Pro adalah tablet revolusioner yang menggabungkan performa tinggi dengan desain yang ramping dan fitur-fitur inovatif. Dengan layar Liquid Retina yang luar biasa, prosesor A12Z Bionic yang canggih, dan dukungan untuk Apple Pencil dan Magic Keyboard, iPad Pro adalah alat yang sempurna untuk pekerjaan, pembelajaran, dan kreativitas. Rasakan kemampuan dan kelincahan yang luar biasa dengan iPad Pro.",
                'warranty' => '1 Tahun',
                'memory' => '256 GB',
                'price' => 9000000,
                'discount' => 0,
            ],
            [
                'name' => 'Xiaomi Redmi Note 10',
                'category' => 'Smartphone',
                'image' => 'image11.jpg',
                'path' => 'storage/product/image11.jpg',
                'description' => "Xiaomi Redmi Note 10 adalah smartphone terjangkau yang menghadirkan kinerja yang handal dan fitur-fitur canggih. Dengan layar AMOLED yang jernih, sistem kamera yang unggul, dan baterai yang tahan lama, Redmi Note 10 cocok untuk pengguna yang mencari smartphone yang dapat diandalkan untuk kebutuhan sehari-hari. Rasakan kualitas dan nilai yang luar biasa dengan Xiaomi Redmi Note 10.",
                'warranty' => '1 Tahun',
                'memory' => '4/128 GB',
                'price' => 1800000,
                'discount' => 0,
            ],
            [
                'name' => 'Lenovo Yoga C940',
                'category' => 'Laptop',
                'image' => 'image12.jpg',
                'path' => 'storage/product/image12.jpg',
                'description' => "Lenovo Yoga C940 adalah laptop 2-in-1 yang menggabungkan kinerja tinggi dengan desain yang elegan dan fleksibilitas yang luar biasa. Dengan layar 4K HDR yang memukau, prosesor Intel Core i7 generasi ke-10, dan fitur-fitur premium seperti Dolby Atmos Speaker System, Yoga C940 cocok untuk produktivitas, hiburan, dan kreativitas. Rasakan kemewahan dan kelincahan dengan Lenovo Yoga C940.",
                'warranty' => '2 Tahun',
                'memory' => '1 TB SSD',
                'price' => 20000000,
                'discount' => 0,
            ]
        ];

        // Menambahkan data gambar ke tabel images
        foreach ($products as $product) {
            DB::table('products')->insert([
                'name' => $product['name'],
                'category' => $product['category'],
                'image' => $product['image'],
                'path' => $product['path'],
                'description' => $product['description'],
                'warranty' => $product['warranty'],
                'memory' => $product['memory'],
                'price' => $product['price'],
                'discount' => $product['discount'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Memastikan image ada di direktori yang tepat
        $exampleImages = [
            ['source' => 'https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?q=80&w=1742&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'destination' => 'public/product/image1.jpg'], // Smartphone
            ['source' => 'https://images.unsplash.com/photo-1609252924198-30b8cb324d2b?q=80&w=1587&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'destination' => 'public/product/image2.jpg'], // Smartphone
            ['source' => 'https://images.unsplash.com/photo-1606341518803-50c80a525f32?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'destination' => 'public/product/image3.jpg'], // Smartphone
            ['source' => 'https://images.unsplash.com/photo-1593642632823-8f785ba67e45?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'destination' => 'public/product/image4.jpg'], // Laptop
            ['source' => 'https://images.unsplash.com/photo-1541807084-5c52b6b3adef?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'destination' => 'public/product/image5.jpg'], // Laptop
            ['source' => 'https://images.unsplash.com/photo-1561154464-82e9adf32764?q=80&w=1587&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'destination' => 'public/product/image6.jpg'], // Tablet
            ['source' => 'https://images.unsplash.com/photo-1542751110-97427bbecf20?q=80&w=1684&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'destination' => 'public/product/image7.jpg'], // Tablet
            ['source' => 'https://images.unsplash.com/photo-1655802282818-06e80ec3743d?q=80&w=1631&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'destination' => 'public/product/image8.jpg'], // Smartphone
            ['source' => 'https://images.unsplash.com/photo-1593642634524-b40b5baae6bb?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'destination' => 'public/product/image9.jpg'], // Laptop
            ['source' => 'https://images.unsplash.com/photo-1623126908029-58cb08a2b272?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'destination' => 'public/product/image10.jpg'], // Tablet
            ['source' => 'https://images.unsplash.com/photo-1655802334467-5591938e0c62?q=80&w=1631&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'destination' => 'public/product/image11.jpg'], // Smartphone
            ['source' => 'https://images.unsplash.com/photo-1636211992838-251a43d72ad2?q=80&w=1587&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'destination' => 'public/product/image12.jpg'], // Laptop
        ];

        foreach ($exampleImages as $image) {
            Storage::put($image['destination'], file_get_contents($image['source']));
        }
    }
}
