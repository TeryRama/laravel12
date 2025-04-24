<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        $articles = [
            [
                'title' => 'Mengenal Laravel 11 Lebih Dalam',
                'author' => 'Tengku Ryan',
                'slug' => Str::slug('Mengenal Laravel 11 Lebih Dalam'),
                'body' => <<<EOT
Laravel 11 hadir dengan banyak pembaruan yang signifikan, salah satunya adalah struktur direktori yang lebih rapi dan modular. Ini memungkinkan developer untuk memisahkan logika aplikasi dengan lebih bersih dan terorganisir.

Fitur lain yang menarik adalah peningkatan pada job batching dan queue monitoring yang lebih baik, serta integrasi yang lebih mudah dengan teknologi frontend modern seperti Inertia.js dan Livewire.

Dengan performa yang terus ditingkatkan dan dokumentasi yang lengkap, Laravel 11 menjadi pilihan ideal bagi pengembang web di Indonesia maupun internasional.
EOT,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'title' => 'Tips Menggunakan Eloquent Secara Efisien',
                'author' => 'Ahmad Fadhil',
                'slug' => Str::slug('Tips Menggunakan Eloquent Secara Efisien'),
                'body' => <<<EOT
Eloquent adalah ORM andalan Laravel, namun penggunaannya yang tidak efisien bisa menimbulkan masalah performa.

Beberapa tips penting: gunakan `select()` untuk memilih hanya kolom yang dibutuhkan, hindari N+1 query dengan `with()`, dan manfaatkan `chunk()` untuk proses data besar.

Optimasi Eloquent tidak hanya mempercepat aplikasi, tapi juga mengurangi beban server secara signifikan.
EOT,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'title' => 'Apa Itu Inertia.js dan Mengapa Populer di Laravel?',
                'author' => 'Siti Nurhaliza',
                'slug' => Str::slug('Apa Itu Inertia.js dan Mengapa Populer di Laravel?'),
                'body' => <<<EOT
Inertia.js adalah library yang memungkinkan kita membangun SPA (Single Page Application) menggunakan backend Laravel tanpa perlu API layer secara eksplisit.

Dengan Inertia.js, kita dapat menggunakan Vue atau React sebagai frontend, sementara routing dan controller tetap dikelola oleh Laravel. Ini mempermudah tim fullstack untuk bekerja tanpa harus membuat dua proyek terpisah.

Popularitas Inertia.js terus meningkat karena memberikan pengalaman SPA tanpa kompleksitas tambahan.
EOT,
                'created_at' => $now,
                'updated_at' => $now
            ]
        ];

        DB::table('posts')->insert($articles);
    }
}
