<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class allskktenagakerjabloraFactory extends Factory
{

    public function definition(): array
    {

                $keterampilanList = [
            'GALI',
            'RELIEF',
            'BANGUNAN',
            'PEMBESIAN',
            'KITCHENSET',
            'KONSTRUKSI',
            'PENGECATAN',
            'AHLI TEMBOK',
            'LAS LISTRIK',
            'MESIN BROKER',
            'KAYU | KUSEN',
            'HAMMER DRILL',
            'OPERATOR BEKO',
            'PASANG KERAMIK',
            'PEMASANGAN BATU',
            'PASANG BATU | COR',
            'BENGKEL | MEKANIK',
            'KONSTRUKI BANGUNAN',
            'PEMASANGAN BATU BATA',
            'KAYU | PEMASANGAN BATU',
            'PASANG BATU | BESI | KAYU',
            'KAYU | PEMASANGAN BATU BATA',
            'PASANG BATU | COR | BESI | KAYU',
        ];

        $faker = FakerFactory::create('id_ID');

        // Generate tanggal lahir
        $ttl = $faker->date('Y-m-d', '2000-01-01');

        // Generate NIK Blora (32)
        $nik = '32' . $faker->unique()->numerify('##############');

        return [
            // ========================
            // RELASI & ID PATEN
            // ========================
            'user_id' => 7,
            'jenjangpendidikan_id' => rand(1, 6),
            'jabatankerja_id' => 76,
            'namasekolah_id' => null,
            'tahunpilihan_id' => rand(1, 5),
            'kecamatankbb_id' => rand(1, 16),
            'jenjang_id' => 1,
            'agendaskk_id' => null,

            // ========================
            // DATA PRIBADI
            // ========================
            'namalengkap' => $faker->firstNameMale . ' ' . $faker->lastName,
            // 'namalengkap' => $faker->name,
            'nik' => $nik,
            'tempatlahir' => $faker->city,
            'ttl' => $ttl,
            'jeniskelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
            'alamat' => $faker->address,
            'notelepon' => $faker->phoneNumber,
            'email' => $faker->safeEmail,
            'tahunlulus' => rand(1990, 2000),
            'keterampilan' => $faker->randomElement($keterampilanList),

            // ========================
            // UPLOAD (DUMMY)
            // ========================
            'uploadktp' => 'dummy.pdf',
            'uploadfoto' => 'dummy.jpg',
            'uploadijazah' => 'dummy.pdf',
            'uploadpengalaman' => 'dummy.pdf',
            'uploadkebenarandata' => 'dummy.pdf',
            'uploadnpwp' => 'dummy.pdf',
            'uploaddaftarriwayathidup' => 'dummy.pdf',

            // ========================
            // DATA SERTIFIKASI
            // ========================
            'namaasosiasi' => 'GATENSI',
            'punyaskk' => 'TIDAK',
            'punyasiki' => 'TIDAK',
            'portalpupr' => 'BELUM',
            'siappatuh' => 'BELUM',
            'sertifikat' => 'BELUM',
            'catatanvalidasi' => null,

            // ========================
            // VALIDASI
            // ========================
            'validasi_ktp' => null,
            'validasi_foto' => null,
            'validasi_ijazah' => null,
            'validasi_pengalaman' => null,
            'validasi_kebenarandata' => null,
            'validasi_npwp' => null,
            'validasi_daftarriwayathidup' => null,

            'verifikasipu' => null,
            'verifikasilps' => false,
            'verifikasihadirsertifikasi' => false,
        ];
    }
}
