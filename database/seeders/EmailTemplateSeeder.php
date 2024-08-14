<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('email_templates')->insert([
            'title' => 'Contact Email',
            'subject' => 'Contact Email',
            'content' => 'Name: {{name}}

            Email: {{email}}

Phone: {{phone}}

Subject: {{subject}}

Message: {{message}}',
        ]);
    }
}
