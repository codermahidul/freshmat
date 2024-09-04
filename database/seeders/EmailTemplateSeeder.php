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
        // DB::table('email_templates')->insert([
        //     'title' => 'Contact Email',
        //     'subject' => 'Contact Email',
        //     'content' => 'Name: {{name}}

        //     Email: {{email}}

        //     Phone: {{phone}}

        //     Subject: {{subject}}

        //     Message: {{message}}',
        // ]);

        // DB::table('email_templates')->insert([
        //     'title' => 'Order Successfully',
        //     'subject' => 'Order Successfully',
        //     'content' => 'Hi {{user_name}},

        //     Thanks for your new order. Your order id has been submited .

        //     Total Amount : {{total_amount}},

        //     Payment Method : {{payment_method}},

        //     Payment Status : {{payment_status}},

        //     Order Status : {{order_status}},

        //     Order Date: {{order_date}},',
        // ]);

        DB::table('email_templates')->insert([
            'title' => 'Password Reset',
            'subject' => 'Password Reset',
            'content' => 'Dear {{name}},
            Do you want to reset your password? Please Click the following link and Reset Your Password.',
        ]);

        DB::table('email_templates')->insert([
            'title' => 'Verify Email Address',
            'subject' => 'Verify Email Address',
            'content' => 'Dear {{user_name}},
            Congratulations! Your Account has been created successfully. Please Click the following link and Active your Account.',
        ]);


    }
}
