<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Counter;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\InvoiceDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Counter::factory(1)->create();
        InvoiceDetail::factory(5)->create();
    }
}
