<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\TransactionModel;
use App\Models\TransactionDetailModel;
use App\Models\DiskonModel; // Tambahkan model diskon

class Home extends BaseController
{
    protected $product;
    protected $transaction;
    protected $transaction_detail;
    protected $diskon; // Tambahkan variabel diskon

    function __construct()
    {
        helper('form');
        helper('number');
        $this->product = new ProductModel();
        $this->transaction = new TransactionModel();
        $this->transaction_detail = new TransactionDetailModel();
        $this->diskon = new DiskonModel(); // Inisialisasi model diskon
    }

    public function index(): string
{
    helper(['form', 'number']);

    // Ambil semua produk dari database
    $product = $this->product->findAll();

    // Cek apakah hari ini ada diskon
    $today = date('Y-m-d');
    $diskon = $this->diskon->where('tanggal', $today)->first();
    $nominalDiskon = $diskon ? (int)$diskon['nominal'] : 0;

    // Tidak mengubah harga produk
    // Harga asli tetap dikirim ke view seperti apa adanya

    $data = [
        'product' => $product,
        'diskon' => $nominalDiskon // Hanya untuk alert info (opsional)
    ];

    return view('v_home', $data);
}


    public function profile()
    {
        $username = session()->get('username');
        $data['username'] = $username;

        $buy = $this->transaction->where('username', $username)->findAll();
        $data['buy'] = $buy;

        $product = [];

        if (!empty($buy)) {
            foreach ($buy as $item) {
                $detail = $this->transaction_detail
                    ->select('transaction_detail.*, product.nama, product.harga, product.foto')
                    ->join('product', 'transaction_detail.product_id=product.id')
                    ->where('transaction_id', $item['id'])
                    ->findAll();

                if (!empty($detail)) {
                    $product[$item['id']] = $detail;
                }
            }
        }

        $data['product'] = $product;

        return view('v_profile', $data);
    }

    public function faq()
    {
        return view('v_faq');
    }

    public function contact()
    {
        return view('v_contact');
    }
}
