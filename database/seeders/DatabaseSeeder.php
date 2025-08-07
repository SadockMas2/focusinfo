<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'facebook' => 'https://facebook.com/eitpncompany',
            'twitter' => 'https://twitter.com/eitpncompany',
            'instagram' => 'https://instagram.com/eitpncompany',
            'youtube' => 'https://youtube.com/@eitpncompany',
            'linkedin' => 'https://linkedin.com/company/eitpncompany',
            'contact_email' => 'info@eitpncompany.com',
            'contact_phone' => '+243976578023',
            'address' => 'Goma',
            'logo' => '-',
            'favicon' => '-',
            'description' => 'Eitpn Company',
            'keywords' => 'Eitpn, company, agriculture, elevage, apiculture',
            'site_name' => 'EITPN Company',
            'site_url' => 'https://eitpncompany.org',
            'history_title' => 'Histoire',
            'history_content' => 'Notre Histoire est...',
            'missions' => '-',
            'visions' => '-',
            'apercu' => '-',
            'objectifs' => '-',
            'objectifs_specifiques' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
