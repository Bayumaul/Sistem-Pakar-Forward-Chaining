<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PeyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $penyakit = collect([

            'Gingivitis (Radang gusi)',
            'Karies Gigi (gigi berlubang)',
            'Karang Gigi',
            'Stomatitis',
            'Abses Periodental',
            'Candidas Oral',
            'Trench Mouth',
            'Gigi Sensitif',
            

        ]);
        $id_penyakit = collect([
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        ]);
    }
}
