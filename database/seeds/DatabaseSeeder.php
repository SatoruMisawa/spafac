<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $seeders = [
        ProviderSeeder::class,
        PrefectureSeeder::class,
        FacilityKindSeeder::class,
        SpaceUsageSeeder::class,
        KeyDeliverySeeder::class,
        PreorderDeadlineSeeder::class,
        PreorderPeriodSeeder::class,
        DaySeeder::class,
        TesterSeeder::class,
        AdminTablesSeeder::class,
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }
    }
}