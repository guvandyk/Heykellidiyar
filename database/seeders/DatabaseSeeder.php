<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
    	$this->call(AdminSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(WorkItemSeeder::class);
        
        $this->call(SozlerSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(SertifikatSeeder::class);
        $this->call(OurPartSeeder::class);
        $this->call(Product_CategorySeeder::class);
        $this->call(Category_ItemSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(LicenseSeeder::class);
    }
}
