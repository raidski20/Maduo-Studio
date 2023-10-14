<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = Service::limit(4)->pluck('id');

        $sections = [
            [
                'name' => 'hero',
                'title' => 'BUSINESS INTELLIGENCE AGENCY',
                'description' => 'crafting business-story with art',
            ],
            [
                'name' => 'statistics',
                'title' => '',
                'description' => '',
                'extra_data' => [
                    'entities' => [
                        [
                            'name' => 'Projects',
                            'number' => '540'
                        ],
                    ]
                ]
            ],
            [
                'name' => 'about-us',
                'title' => 'About Us !',
                'description' => 'Lorem ipsum dolor sit amet consectetur. Egestas praesent sagittis lectus libero ultricies enim aliquam. Quis ipsum nibh quis odio sit vel enim. Laoreet neque duis sem ut amet. Urna ullamcorper dignissim magnis nunc.',
                'extra_data' => [
                    'title' => 'What We do?',
                    'description' => 'Lorem ipsum dolor sit amet consectetur. Pulvinar volutpat in dui sed cursus lacus nibh arcu odio. Pharetra penatibus imperdiet in elementum commodo a nisl non pharetra. Ultrices convallis quis felis faucibus lacinia aenean. Ac sed ipsum blandit aliquet urna cursus fusce etiam. Lacus eget neque fringilla mi. Et habitasse lectus id gravida lorem. Vulputate iaculis sagittis non sit in ullamcorper rhoncus nec adipiscing. Nam ornare ultricies morbi volutpat malesuada nisl. Vel mollis ultrices integer molestie vitae facilisi enim sit. Adipiscing quis auctor ac pellentesque blandit pellentesque nibh donec. Purus faucibus fermentum blandit massa.'
                ]
            ],
            [
                'name' => 'services',
                'title' => 'Want you to boost your business growth? Solution is here.',
                'description' => 'Lorem ipsum dolor sit amet consectetur. Ultrices augue ut vitae velit sodales. Sapien lacus eu vulputate ac commodo nisl dictumst lacus.',
                'extra_data' => [
                    'services' => $services
                ]
            ],
            [
                'name' => 'contact-us',
                'title' => 'Lets Talk',
                'description' => 'Have some big idea or brand to develop and need help? Then reach out, we\'d love to hear about your project and provide help.',
                'extra_data' => [
                    'socials' => [
                        [
                            'name' => 'twitter',
                            'link' => 'https://twitter.com/maduostudio'
                        ],
                        [
                            'name' => 'facebook',
                            'link' => 'https://www.facebook.com/maduostudio'
                        ]
                    ],
                    'other' => [
                        [
                            'name' => 'email',
                            'value' => 'maduostudio@gmail.com'
                        ],
                        [
                            'name' => 'phone',
                            'value' => '+213(0) 558-66-95-67'
                        ]
                    ]
                ]
            ],
        ];

        foreach ($sections as $section) {
            Section::create($section);
        }
    }
}
