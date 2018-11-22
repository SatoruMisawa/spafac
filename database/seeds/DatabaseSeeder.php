<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $seeders = [
        AdminTablesSeeder::class,
        AmenitySeeder::class,
        DaySeeder::class,
        FacilityKindSeeder::class,
        KeyDeliverySeeder::class,
        PrefectureSeeder::class,
        PreorderDeadlineSeeder::class,
        PreorderPeriodSeeder::class,
        ProviderSeeder::class,
        SpaceUsageSeeder::class,
        TesterSeeder::class,
        RentSpaceTypeSeeder::class,
        RentSpaceBusinessTypeSeeder::class,
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