<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properties')->insert([
            // Category 1: منازل
            [
                'name' => 'منزل فاخر 1',
                'img' => 'images/luxury_house1.jpg',
                'description' => 'منزل فاخر بإطلالة رائعة في منطقة هادئة.',
                'price' => 1500000,
                'area' => 350,
                'rooms' => 5,
                'direction' => 'شمال',
                'address' => '123 شارع الهدوء، المدينة',
                'status' => 'متاح',
                'type' => 'شراء',
                'user_id' => 3,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'منزل فاخر 2',
                'img' => 'images/luxury_house2.jpg',
                'description' => 'منزل فاخر بإطلالة رائعة في منطقة هادئة.',
                'price' => 1600000,
                'area' => 360,
                'rooms' => 6,
                'direction' => 'جنوب',
                'address' => '124 شارع الهدوء، المدينة',
                'status' => 'متاح',
                'type' => 'شراء',
                'user_id' => 3,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'منزل فاخر 3',
                'img' => 'images/luxury_house3.jpg',
                'description' => 'منزل فاخر بإطلالة رائعة في منطقة هادئة.',
                'price' => 1700000,
                'area' => 370,
                'rooms' => 7,
                'direction' => 'شرق',
                'address' => '125 شارع الهدوء، المدينة',
                'status' => 'متاح',
                'type' => 'شراء',
                'user_id' => 3,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'منزل فاخر 4',
                'img' => 'images/luxury_house4.jpg',
                'description' => 'منزل فاخر بإطلالة رائعة في منطقة هادئة.',
                'price' => 1800000,
                'area' => 380,
                'rooms' => 8,
                'direction' => 'غرب',
                'address' => '126 شارع الهدوء، المدينة',
                'status' => 'متاح',
                'type' => 'شراء',
                'user_id' => 3,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Category 2: شقق
            [
                'name' => 'شقة متوسطة 1',
                'img' => 'images/medium_apartment1.jpg',
                'description' => 'شقة متوسطة في وسط المدينة، قريبة من جميع الخدمات.',
                'price' => 750000,
                'area' => 150,
                'rooms' => 3,
                'direction' => 'جنوب',
                'address' => '456 شارع الخدمات، المدينة',
                'status' => 'متاح',
                'type' => 'آجار',
                'user_id' => 5,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'شقة متوسطة 2',
                'img' => 'images/medium_apartment2.jpg',
                'description' => 'شقة متوسطة في وسط المدينة، قريبة من جميع الخدمات.',
                'price' => 760000,
                'area' => 160,
                'rooms' => 4,
                'direction' => 'شمال',
                'address' => '457 شارع الخدمات، المدينة',
                'status' => 'متاح',
                'type' => 'آجار',
                'user_id' => 5,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'شقة متوسطة 3',
                'img' => 'images/medium_apartment3.jpg',
                'description' => 'شقة متوسطة في وسط المدينة، قريبة من جميع الخدمات.',
                'price' => 770000,
                'area' => 170,
                'rooms' => 5,
                'direction' => 'شرق',
                'address' => '458 شارع الخدمات، المدينة',
                'status' => 'متاح',
                'type' => 'آجار',
                'user_id' => 5,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'شقة متوسطة 4',
                'img' => 'images/medium_apartment4.jpg',
                'description' => 'شقة متوسطة في وسط المدينة، قريبة من جميع الخدمات.',
                'price' => 780000,
                'area' => 180,
                'rooms' => 6,
                'direction' => 'غرب',
                'address' => '459 شارع الخدمات، المدينة',
                'status' => 'متاح',
                'type' => 'آجار',
                'user_id' => 5,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Category 3: فلل
            [
                'name' => 'فيلا فاخرة 1',
                'img' => 'images/luxury_villa1.jpg',
                'description' => 'فيلا فاخرة مع حديقة كبيرة ومسبح خاص.',
                'price' => 2500000,
                'area' => 500,
                'rooms' => 7,
                'direction' => 'شرق',
                'address' => '789 شارع الأزهار، المدينة',
                'status' => 'متاح',
                'type' => 'شراء',
                'user_id' => 6,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'فيلا فاخرة 2',
                'img' => 'images/luxury_villa2.jpg',
                'description' => 'فيلا فاخرة مع حديقة كبيرة ومسبح خاص.',
                'price' => 2600000,
                'area' => 510,
                'rooms' => 8,
                'direction' => 'غرب',
                'address' => '790 شارع الأزهار، المدينة',
                'status' => 'متاح',
                'type' => 'شراء',
                'user_id' => 6,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'فيلا فاخرة 3',
                'img' => 'images/luxury_villa3.jpg',
                'description' => 'فيلا فاخرة مع حديقة كبيرة ومسبح خاص.',
                'price' => 2700000,
                'area' => 520,
                'rooms' => 9,
                'direction' => 'شمال',
                'address' => '791 شارع الأزهار، المدينة',
                'status' => 'متاح',
                'type' => 'شراء',
                'user_id' => 6,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'فيلا فاخرة 4',
                'img' => 'images/luxury_villa4.jpg',
                'description' => 'فيلا فاخرة مع حديقة كبيرة ومسبح خاص.',
                'price' => 2800000,
                'area' => 530,
                'rooms' => 10,
                'direction' => 'جنوب',
                'address' => '792 شارع الأزهار، المدينة',
                'status' => 'متاح',
                'type' => 'شراء',
                'user_id' => 6,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Category 4: مكاتب
            [
                'name' => 'مكتب حديث 1',
                'img' => 'images/modern_office1.jpg',
                'description' => 'مكتب حديث مجهز بالكامل، مناسب للشركات الناشئة.',
                'price' => 1000000,
                'area' => 200,
                'rooms' => 4,
                'direction' => 'غرب',
                'address' => '321 شارع الأعمال، المدينة',
                'status' => 'متاح',
                'type' => 'آجار',
                'user_id' => 7,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'مكتب حديث 2',
                'img' => 'images/modern_office2.jpg',
                'description' => 'مكتب حديث مجهز بالكامل، مناسب للشركات الناشئة.',
                'price' => 1100000,
                'area' => 210,
                'rooms' => 5,
                'direction' => 'شمال',
                'address' => '322 شارع الأعمال، المدينة',
                'status' => 'متاح',
                'type' => 'آجار',
                'user_id' => 7,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'مكتب حديث 3',
                'img' => 'images/modern_office3.jpg',
                'description' => 'مكتب حديث مجهز بالكامل، مناسب للشركات الناشئة.',
                'price' => 1200000,
                'area' => 220,
                'rooms' => 6,
                'direction' => 'جنوب',
                'address' => '323 شارع الأعمال، المدينة',
                'status' => 'متاح',
                'type' => 'آجار',
                'user_id' => 7,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'مكتب حديث 4',
                'img' => 'images/modern_office4.jpg',
                'description' => 'مكتب حديث مجهز بالكامل، مناسب للشركات الناشئة.',
                'price' => 1300000,
                'area' => 230,
                'rooms' => 7,
                'direction' => 'شرق',
                'address' => '324 شارع الأعمال، المدينة',
                'status' => 'متاح',
                'type' => 'آجار',
                'user_id' => 7,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Category 5: محلات تجارية
            [
                'name' => 'محل تجاري 1',
                'img' => 'images/commercial_shop1.jpg',
                'description' => 'محل تجاري في موقع استراتيجي في وسط المدينة.',
                'price' => 500000,
                'area' => 100,
                'rooms' => 2,
                'direction' => 'شمال غرب',
                'address' => '654 شارع التجارة، المدينة',
                'status' => 'متاح',
                'type' => 'آجار',
                'user_id' => 5,
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'محل تجاري 2',
                'img' => 'images/commercial_shop2.jpg',
                'description' => 'محل تجاري في موقع استراتيجي في وسط المدينة.',
                'price' => 510000,
                'area' => 110,
                'rooms' => 3,
                'direction' => 'شمال شرق',
                'address' => '655 شارع التجارة، المدينة',
                'status' => 'متاح',
                'type' => 'آجار',
                'user_id' => 5,
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'محل تجاري 3',
                'img' => 'images/commercial_shop3.jpg',
                'description' => 'محل تجاري في موقع استراتيجي في وسط المدينة.',
                'price' => 520000,
                'area' => 120,
                'rooms' => 4,
                'direction' => 'جنوب غرب',
                'address' => '656 شارع التجارة، المدينة',
                'status' => 'متاح',
                'type' => 'آجار',
                'user_id' => 5,
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'محل تجاري 4',
                'img' => 'images/commercial_shop4.jpg',
                'description' => 'محل تجاري في موقع استراتيجي في وسط المدينة.',
                'price' => 530000,
                'area' => 130,
                'rooms' => 5,
                'direction' => 'جنوب شرق',
                'address' => '657 شارع التجارة، المدينة',
                'status' => 'متاح',
                'type' => 'آجار',
                'user_id' => 5,
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
