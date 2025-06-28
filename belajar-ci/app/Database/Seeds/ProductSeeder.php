<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $data = [
            [
                'nama' => 'iPhone 11 Pro',
                'harga'  => 7195000,
                'jumlah' => 5,
                'foto' => 'iphone11.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'iPhone 12 Pro',
                'harga'  => 13300000,
                'jumlah' => 7,
                'foto' => 'iphone12.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'iPhone 13 Pro',
                'harga'  => 17499000,
                'jumlah' => 5,
                'foto' => 'iphone13.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ]
        ];

        foreach ($data as $item) {
            // insert semua data ke tabel
            $this->db->table('product')->insert($item);
        }
    }
}