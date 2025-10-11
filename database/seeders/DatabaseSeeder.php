<?php

namespace Database\Seeders;
use Illuminate\Support\Str;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

         User::factory()->create([
            'name' => 'Administrator Simascut',
            'email' => 'admin@simascut.com',
            'email_verified_at' => now(),
            'password' => bcrypt('mantap'), // passwordnya : mantap
            'remember_token' => Str::random(10),
        ]);

        User::factory()->create([
            'name' => 'Kepala Kantor',
            'email' => 'kakan@simascut.com',
            'email_verified_at' => now(),
            'password' => bcrypt('mantap'), // passwordnya : mantap
            'remember_token' => Str::random(10),
        ]);

        User::factory()->create([
            'name' => 'Kepala Seksi',
            'email' => 'kasi@simascut.com',
            'email_verified_at' => now(),
            'password' => bcrypt('mantap'), // passwordnya : mantap
            'remember_token' => Str::random(10),
        ]);


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

         // ===== Seed Master Cuti =====
        // status pakai string bebas: "aktif", "nonaktif", atau bisa diisi keterangan singkat.
        $cutiTypes = [
            ['name' => 'Cuti Tahunan',                      'status' => 'aktif'],
            ['name' => 'Cuti Sakit',                        'status' => 'aktif'],
            ['name' => 'Cuti Melahirkan (Maternity)',       'status' => 'aktif'],
            ['name' => 'Cuti Ayah (Paternity)',             'status' => 'aktif'],
            ['name' => 'Cuti Pernikahan',                   'status' => 'aktif'],
            ['name' => 'Cuti Kematian (Bereavement)',       'status' => 'aktif'],
            ['name' => 'Cuti Besar / Sabbatical',           'status' => 'aktif'],
            ['name' => 'Cuti Ibadah (Haji/Umrah)',          'status' => 'aktif'],
            ['name' => 'Cuti Tanpa Gaji (Unpaid Leave)',    'status' => 'aktif'],
            ['name' => 'Cuti Darurat (Emergency Leave)',    'status' => 'aktif'],
        ];

        // Gunakan upsert agar idempotent (tidak dobel ketika seeder dijalankan ulang)
        DB::table('cutis')->upsert(
            collect($cutiTypes)->map(function ($row) {
                return [
                    'name'       => $row['name'],
                    'status'     => $row['status'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            })->all(),
            ['name'], // unique by name
            ['status', 'updated_at']
        );
        // ===== End Seed Master Cuti =====




    }
}
