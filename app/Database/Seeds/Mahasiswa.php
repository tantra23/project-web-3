<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        
        $data_mahasiswa = [
            ['npm' => '2017051030',
            'nama'    => 'Tri duta dewan tantra gata',
            'alamat'    => 'lampung',
            'created_at'    => Time::now(),
        
        ],
            ['npm' => '2057051004',
                'nama'    => 'Indah ',
                'alamat'    => 'jakarta',
                'created_at'    => Time::now(),
            
            ],
            
            ['npm' => '2017051070',
            'nama'    => 'Muhaymi nurdin',
            'alamat'    => 'tulang bawang',
            'created_at'    => Time::now(),
        
        ],


        ];

        // Using Query Builder
        foreach($data_mahasiswa as $data)
        $this->db->table('mahasiswa')->insert($data);
    }
}
