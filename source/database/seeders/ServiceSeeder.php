<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Web Development',
                'description' => 'Lorem ipsum dolor sit amet consectetur. Sapien nisl lobortis odio semper tellus id sed vitae. At mauris dui nam nibh viverra. Lacus pulvinar fringilla amet auctor tortor eget venenatis',
            ],
            [
                'name' => 'Mobile Development',
                'description' => 'Lorem ipsum dolor sit amet consectetur. Sapien nisl lobortis odio semper tellus id sed vitae. At mauris dui nam nibh viverra. Lacus pulvinar fringilla amet auctor tortor eget venenatis',
            ],
            [
                'name' => 'UI/UX Design',
                'description' => 'Lorem ipsum dolor sit amet consectetur. Sapien nisl lobortis odio semper tellus id sed vitae. At mauris dui nam nibh viverra. Lacus pulvinar fringilla amet auctor tortor eget venenatis',
            ],
            [
                'name' => 'Branding',
                'description' => 'Lorem ipsum dolor sit amet consectetur. Sapien nisl lobortis odio semper tellus id sed vitae. At mauris dui nam nibh viverra. Lacus pulvinar fringilla amet auctor tortor eget venenatis',
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
