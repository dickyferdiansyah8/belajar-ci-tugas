<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiskonSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'tanggal' => '2025-07-4',
                'nominal' => 100000,
                'created_at' => '2025-07-4 06:01:35',
                'updated_at' => null
            ],
            [
                'tanggal' => '2025-07-5',
                'nominal' => 200000,
                'created_at' => '2025-07-4 06:01:35',
                'updated_at' => null
            ],
            [
                'tanggal' => '2025-07-6',
                'nominal' => 300000,
                'created_at' => '2025-07-4 06:01:35',
                'updated_at' => null
            ],
            [
                'tanggal' => '2025-07-7',
                'nominal' => 100000,
                'created_at' => '2025-07-4 06:01:35',
                'updated_at' => null
            ],
            [
                'tanggal' => '2025-07-8',
                'nominal' => 300000,
                'created_at' => '2025-07-4 06:01:35',
                'updated_at' => null
            ],
            [
                'tanggal' => '2025-07-9',
                'nominal' => 100000,
                'created_at' => '2025-07-4 06:01:35',
                'updated_at' => null
            ],
            [
                'tanggal' => '2025-07-10',
                'nominal' => 200000,
                'created_at' => '2025-07-4 06:01:35',
                'updated_at' => null
            ],
            [
                'tanggal' => '2025-07-11',
                'nominal' => 100000,
                'created_at' => '2025-07-4 06:01:35',
                'updated_at' => null
            ],
            [
                'tanggal' => '2025-07-12',
                'nominal' => 200000,
                'created_at' => '2025-07-4 06:01:35',
                'updated_at' => null
            ],
            [
                'tanggal' => '2025-07-13',
                'nominal' => 300000,
                'created_at' => '2025-07-4 06:01:35',
                'updated_at' => null
            ],
        ];

        $this->db->table('diskon')->insertBatch($data);
    }
}
