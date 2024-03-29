<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name' => 'Accounting/Finance',
            'slug' => 'accounting-finance',
            'status' => 1,
        ]);
        Category::create([
            'category_name' => 'Bank/Non-Bank',
            'slug' => 'bank-non-bank',
            'status' => 1,
        ]);
        Category::create([
            'category_name' => 'Commercial',
            'slug' => 'commercial',
            'status' => 1,
        ]);
        Category::create([
            'category_name' => 'Education',
            'slug' => 'education',
            'status' => 1,
        ]);
        Category::create([
            'category_name' => 'Software',
            'slug' => 'software',
            'status' => 1,
        ]);
    }
}
