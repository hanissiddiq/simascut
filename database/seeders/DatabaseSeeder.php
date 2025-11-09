<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
        $cutiTypes = [['name' => 'Cuti Tahunan', 'status' => 'active'], ['name' => 'Cuti Sakit', 'status' => 'active'], ['name' => 'Cuti Melahirkan (Maternity)', 'status' => 'active'], ['name' => 'Cuti Ayah (Paternity)', 'status' => 'active'], ['name' => 'Cuti Pernikahan', 'status' => 'active'], ['name' => 'Cuti Kematian (Bereavement)', 'status' => 'active'], ['name' => 'Cuti Besar / Sabbatical', 'status' => 'active'], ['name' => 'Cuti Ibadah (Haji/Umrah)', 'status' => 'active'], ['name' => 'Cuti Tanpa Gaji (Unpaid Leave)', 'status' => 'active'], ['name' => 'Cuti Darurat (Emergency Leave)', 'status' => 'active']];

        // Gunakan upsert agar idempotent (tidak dobel ketika seeder dijalankan ulang)
        DB::table('cutis')->upsert(
            collect($cutiTypes)
                ->map(function ($row) {
                    return [
                        'name' => $row['name'],
                        'status' => $row['status'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                })
                ->all(),
            ['name'], // unique by name
            ['status', 'updated_at'],
        );
        // ===== End Seed Master Cuti =====

        // ===== Seed Master Jabatan =====
        $jabatanTypes = [
            ['name' => 'Direktur Utama', 'status' => 'active'],
            ['name' => 'Wakil Direktur', 'status' => 'active'],
            ['name' => 'Kepala Kantor', 'status' => 'active'],
            ['name' => 'Kepala Seksi', 'status' => 'active'],
            ['name' => 'Manajer HRD', 'status' => 'active'],
            ['name' => 'Manajer Keuangan', 'status' => 'active'],
            ['name' => 'Manajer Operasional', 'status' => 'active'],
            ['name' => 'Supervisor Produksi', 'status' => 'active'],
            ['name' => 'Supervisor Marketing', 'status' => 'active'],
            ['name' => 'Staff HRD', 'status' => 'active'],
            ['name' => 'Staff Keuangan', 'status' => 'active'],
            ['name' => 'Staff Administrasi', 'status' => 'active'],
            ['name' => 'Staff IT Support', 'status' => 'active'],
            ['name' => 'Staff Customer Service', 'status' => 'active'],
            ['name' => 'Dokter', 'status' => 'active'],
            ['name' => 'Perawat', 'status' => 'active'],
            ['name' => 'Security', 'status' => 'active'],
            ['name' => 'Office Boy / Girl', 'status' => 'active']];

        // Gunakan upsert agar idempotent
        DB::table('jabatans')->upsert(
            collect($jabatanTypes)
                ->map(function ($row) {
                    return [
                        'name' => $row['name'],
                        'status' => $row['status'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                })
                ->all(),
            ['name'], // unique by name
            ['status', 'updated_at'],
        );
        // ===== End Seed Master Jabatan =====
        // ===== Seed Master Seksi =====
        $seksiTypes = [
            ['name' => 'Seksi Umum & Administrasi',    'status' => 'active'],
            ['name' => 'Seksi Keuangan & Akuntansi',   'status' => 'active'],
            ['name' => 'Seksi Sumber Daya Manusia',    'status' => 'active'],
            ['name' => 'Seksi Rekam Medis',            'status' => 'active'],
            ['name' => 'Seksi Pelayanan Medis',        'status' => 'active'],
            ['name' => 'Seksi Keperawatan',            'status' => 'active'],
            ['name' => 'Seksi Laboratorium',           'status' => 'active'],
            ['name' => 'Seksi Farmasi',                'status' => 'active'],
            ['name' => 'Seksi Gizi',                   'status' => 'active'],
            ['name' => 'Seksi IT & Sistem Informasi',  'status' => 'active'],
            ['name' => 'Seksi Pemeliharaan & Umum',    'status' => 'active'],
            ['name' => 'Seksi Humas & Marketing',      'status' => 'active'],
        ];

        // Gunakan upsert agar idempotent
        DB::table('seksis')->upsert(
            collect($seksiTypes)->map(function ($row) {
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
        // ===== End Seed Master Seksi =====
        // ===== Start Seed Request Cuti =====
         $requestCutis = [
            [
                'user_id'    => 1, // pastikan user dengan id=1 ada
                'cuti_id'    => 1, // pastikan cuti dengan id=1 ada (misalnya Cuti Tahunan)
                'start_date' => '2025-10-10',
                'end_date'   => '2025-10-15',
                'reason'     => 'Liburan keluarga',
                'status'     => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id'    => 2,
                'cuti_id'    => 2, // misalnya Cuti Sakit
                'start_date' => '2025-10-05',
                'end_date'   => '2025-10-07',
                'reason'     => 'Demam tinggi dan butuh istirahat',
                'status'     => 'approve',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id'    => 3,
                'cuti_id'    => 3, // misalnya Cuti Melahirkan
                'start_date' => '2025-09-20',
                'end_date'   => '2025-12-20',
                'reason'     => 'Cuti melahirkan anak pertama',
                'status'     => 'approve',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
         DB::table('request_cutis')->insert($requestCutis);
        // ===== End Seed Request Cuti =====
    }
}
