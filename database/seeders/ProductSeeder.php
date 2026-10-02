<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Facial Wash Honey',
                'category' => 'Skincare',
                'price' => 52500,
                'old_price' => 60000,
                'image' => 'assets/images/products/facial-wash-honey.webp',
                'badge' => 'Best Seller',
                'description' => 'Pembersih wajah untuk membantu membersihkan kotoran dan minyak berlebih.',
            ],
            [
                'name' => 'Go Milku Gold SR12',
                'category' => 'Herbal',
                'price' => 85000,
                'old_price' => 95000,
                'image' => 'assets/images/products/go-milku-gold.webp',
                'badge' => 'Favorit',
                'description' => 'Produk susu SR12 untuk melengkapi kebutuhan nutrisi harian.',
            ],
            [
                'name' => 'Brightening Day Cream',
                'category' => 'Skincare',
                'price' => 68000,
                'old_price' => null,
                'image' => 'assets/images/products/brightening-day-cream.webp',
                'badge' => 'New',
                'description' => 'Krim wajah untuk perawatan kulit di siang hari.',
            ],
            [
                'name' => 'Body Lotion SR12',
                'category' => 'Body Care',
                'price' => 65000,
                'old_price' => 72000,
                'image' => 'assets/images/products/body-lotion.webp',
                'badge' => null,
                'description' => 'Perawatan kulit tubuh untuk membantu menjaga kelembapan kulit.',
            ],
            [
                'name' => 'Natural Face Toner',
                'category' => 'Skincare',
                'price' => 59000,
                'old_price' => null,
                'image' => 'assets/images/products/natural-toner.webp',
                'badge' => null,
                'description' => 'Toner ringan untuk melengkapi rutinitas perawatan wajah.',
            ],
            [
                'name' => 'Herbal Fresh Drink',
                'category' => 'Herbal',
                'price' => 75000,
                'old_price' => 82000,
                'image' => 'assets/images/products/herbal-fresh-drink.webp',
                'badge' => 'Popular',
                'description' => 'Minuman herbal pilihan untuk menemani aktivitas sehari-hari.',
            ],
            [
                'name' => 'Lip Cream Natural',
                'category' => 'Kosmetik',
                'price' => 49000,
                'old_price' => null,
                'image' => 'assets/images/products/lip-cream.webp',
                'badge' => 'New',
                'description' => 'Lip cream dengan tampilan natural untuk penggunaan sehari-hari.',
            ],
            [
                'name' => 'Gentle Facial Serum',
                'category' => 'Skincare',
                'price' => 89000,
                'old_price' => 99000,
                'image' => 'assets/images/products/gentle-serum.webp',
                'badge' => 'Best Seller',
                'description' => 'Serum wajah dengan tekstur ringan untuk rutinitas skincare.',
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['slug' => Str::slug($product['name'])],
                array_merge($product, [
                    'is_featured' => true,
                    'is_active' => true,
                ])
            );
        }
    }
}
