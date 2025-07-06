<?php

namespace App\Models;

use CodeIgniter\Model;

class DiskonModel extends Model
{
    protected $table = 'diskon';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    // Gunakan 'object' jika ingin hasilnya dalam bentuk object

    protected $useSoftDeletes = false;

    protected $allowedFields = ['tanggal', 'nominal', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Jika diperlukan validasi
    protected $validationRules    = [
        'tanggal' => 'required|valid_date|is_unique[diskon.tanggal]',
        'nominal' => 'required|numeric',
    ];

    // Validation Messages
    protected $validationMessages   = [
        'tanggal' => [
            'is_unique' => 'Diskon untuk tanggal yang Anda masukkan sudah terdaftar. Silakan pilih tanggal lain yang belum terdaftar.'
        ]
    ];

    protected $skipValidation     = false;
}