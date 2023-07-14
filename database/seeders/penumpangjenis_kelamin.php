<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penumpangjenis_kelamin extends Seeder

{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('jenis_kelamin')->insert([
            'jeniskelamin' =>'Laki-Laki'
        ]);

        DB::table('jenis_kelamin')->insert([
            'jeniskelamin' =>'Perempuan'
        ]);

        DB::table('jenis_kelamin')->insert([
            'jeniskelamin' =>'Bukan Keduanya'
        ]);


        DB::table('penumpang')->insert(
            [
                'nama' => 'Azam',
                'no_telp' => '089284252',
                'jeniskelamin' =>'1',
        ]);  
        DB::table('penumpang')->insert(
            [
                'nama' => 'Adam',
                'no_telp' => '085544526',
                'jeniskelamin' =>'1',   
        ]);
        DB::table('penumpang')->insert(
            [
                'nama' => 'Keyza',
                'no_telp' => '085544526',
                'jeniskelamin' =>'1',
        ]);
    }
}
