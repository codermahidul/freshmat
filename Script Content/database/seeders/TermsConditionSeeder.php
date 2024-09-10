<?php

namespace Database\Seeders;
use App\Models\TermsCondition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermsConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TermsCondition::insert([
            'id' => 1,
            'content' => 'Write your terms and condition',
        ]);
    }
}
