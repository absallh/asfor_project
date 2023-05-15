<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * @var array
     */
    protected $settings = [
        [
            'key'                       =>  'site_name',
            'value'                     =>  'Asfor System',
        ],
        [
            'key'                       =>  'dashboard_color',
            'value'                     =>  '#002aff',
        ],
        [
            'key'                       =>  'site_logo',
            'value'                     =>  'uploads/settings/1225cfa8-ed8a-4c3a-828b-f2866bdd14e8.png',
        ],
        [
            'key'                       =>  'site_favicon',
            'value'                     =>  'uploads/settings/a0fef885-b225-4682-9a07-f61aca71bced.png',
        ],
        [
            'key'                       =>  'seo_meta_title',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'seo_meta_description',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'seo_meta_keywords',
            'value'                     =>  '',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting)
        {
            $result = Setting::create($setting);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->settings). ' records');
    }
}
