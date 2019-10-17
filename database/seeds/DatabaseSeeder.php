<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AddressSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ProductAmountSeed::class,
            ProductImageSeeder::class,
            ProductPriceSeeder::class,
            PurchaseSeeder::class,
            PurchaseDetailSeeder::class,
            ReviewSeeder::class,
            PackageSeeder::class,
            PackageListSeeder::class

        ]);
    }
}