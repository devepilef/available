<?php

namespace Database\Seeders;

use App\Rule;
use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rule::factory()->createMany([
            [
                'name' => 'Accepted'
            ],
            [
                'name' => 'Accepted If'
            ],
            [
                'name' => 'Active URL'
            ],
            [
                'name' => 'After (Date'
            ],
            [
                'name' => 'After Or Equal (Date'
            ],
            [
                'name' => 'Alpha'
            ],
            [
                'name' => 'Alpha Dash'
            ],
            [
                'name' => 'Alpha Numeric'
            ],
            [
                'name' => 'Array'
            ],
            [
                'name' => 'Bail'
            ],
            [
                'name' => 'Before (Date'
            ],
            [
                'name' => 'Before Or Equal (Date'
            ],
            [
                'name' => 'Between'
            ],
            [
                'name' => 'Boolean'
            ],
            [
                'name' => 'Confirmed'
            ],
            [
                'name' => 'Current Password'
            ],
            [
                'name' => 'Date'
            ],
            [
                'name' => 'Date Equals'
            ],
            [
                'name' => 'Date Format'
            ],
            [
                'name' => 'Declined'
            ],
            [
                'name' => 'Declined If'
            ],
            [
                'name' => 'Different'
            ],
            [
                'name' => 'Digits'
            ],
            [
                'name' => 'Digits Between'
            ],
            [
                'name' => 'Dimensions (Image Files'
            ],
            [
                'name' => 'Distinct'
            ],
            [
                'name' => 'Email'
            ],
            [
                'name' => 'Ends With'
            ],
            [
                'name' => 'Enum'
            ],
            [
                'name' => 'Exclude'
            ],
            [
                'name' => 'Exclude If'
            ],
            [
                'name' => 'Exclude Unless'
            ],
            [
                'name' => 'Exclude Without'
            ],
            [
                'name' => 'Exists (Database'
            ],
            [
                'name' => 'File'
            ],
            [
                'name' => 'Filled'
            ],
            [
                'name' => 'Greater Than'
            ],
            [
                'name' => 'Greater Than Or Equal'
            ],
            [
                'name' => 'Image (File'
            ],
            [
                'name' => 'In'
            ],
            [
                'name' => 'In Array'
            ],
            [
                'name' => 'Integer'
            ],
            [
                'name' => 'IP Address'
            ],
            [
                'name' => 'MAC Address'
            ],
            [
                'name' => 'JSON'
            ],
            [
                'name' => 'Less Than'
            ],
            [
                'name' => 'Less Than Or Equal'
            ],
            [
                'name' => 'Max'
            ],
            [
                'name' => 'MIME Types'
            ],
            [
                'name' => 'MIME Type By File Extension'
            ],
            [
                'name' => 'Min'
            ],
            [
                'name' => 'Multiple Of'
            ],
            [
                'name' => 'Not In'
            ],
            [
                'name' => 'Not Regex'
            ],
            [
                'name' => 'Nullable'
            ],
            [
                'name' => 'Numeric'
            ],
            [
                'name' => 'Password'
            ],
            [
                'name' => 'Present'
            ],
            [
                'name' => 'Prohibited'
            ],
            [
                'name' => 'Prohibited If'
            ],
            [
                'name' => 'Prohibited Unless'
            ],
            [
                'name' => 'Prohibits'
            ],
            [
                'name' => 'Regular Expression'
            ],
            [
                'name' => 'Required'
            ],
            [
                'name' => 'Required If'
            ],
            [
                'name' => 'Required Unless'
            ],
            [
                'name' => 'Required With'
            ],
            [
                'name' => 'Required With All'
            ],
            [
                'name' => 'Required Without'
            ],
            [
                'name' => 'Required Without All'
            ],
            [
                'name' => 'Same'
            ],
            [
                'name' => 'Size'
            ],
            [
                'name' => 'Sometimes'
            ],
            [
                'name' => 'Starts With'
            ],
            [
                'name' => 'String'
            ],
            [
                'name' => 'Timezone'
            ],
            [
                'name' => 'Unique (Database'
            ],
            [
                'name' => 'URL'
            ],
            [
                'name' => 'UUID'
            ],
        ]);
    }
}
