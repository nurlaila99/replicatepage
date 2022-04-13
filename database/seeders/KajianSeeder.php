<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KajianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket_kajians')->insert([
        	'nama_paket' => 'KAJIAN SPESIAL RAMADHAN',
            'detail_paket' => 'Kajian Spesial Ramadhan selasa 20 hari & Siaran Ulang',
            'tanggal_kajian' => '2022-04-01',
            'tanggal_selesai' => '2022-04-21',
            'tempat' => 'Zoom Video Conference',
            'waktu_kajian' => '09:00:00',
            'deskripsi' => '[IRINGI RAMADHAN DENGAN ILMU]

            Bismillahirrahmanirrahim..
            
            Masjid Al Irsyad Surabaya
            
            menghadirkan
            
            Kajian Online Spesial Ramadhan (LIVE INTERAKTIF)
            
            "Iringi Ramadhan Dengan Ilmu"
            (Kajian Rutin Selama 20 Hari)
            
            MARHABAN YAA RAMADHAN..
            
            Alhamdulillah, Allah beri kesempatan Masjid Al Irsyad untuk mengadakan "Kajian Online Spesial Ramadhan 1443H" bersama para guru-guru nasional kita dan pastinya peserta memiliki kesempatan untuk bertanya langsung ke para Asatidz / Narasumber.
            
            InsyaaAllah program ini akan dilaksanakan:
            
            📅 01 - 21 April 2022
            ⏰ 09.00-11.00 WIB
            🌐 LIVE via ZOOM & YOUTUBE
            
            📲 informasi lebih lanjut silakan hubungi Admin :
            http://wa.me/6285158381772
            
            📝 CARA DAFTAR :
            
            PILIH INFAQ YANG DIINGINKAN & KLIK TOMBOL BELI DIBAWAH INI
            
            ⬇️⬇️⬇️⬇️⬇️⬇️⬇️',
            'tgl_beli_tiket' => '2022-03-18 12:00:00',
            'tgl_penutupan_tiket' => '2022-04-21 09:00:00',
            'harga_tiket' => '150000',
            'stok_tiket' => '148'
        ]);
    }
}
