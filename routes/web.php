<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Post {
    public static function all() {
        return [
                [
                    'id' => 1,
                    'slug' => 'judul-artikel-pengaruh-teknologi',
                    'title' => 'Pengaruh Teknologi terhadap Kehidupan Sehari-Hari',
                    'author' => 'Ali Basloom',
                    'body' => 'Teknologi telah menjadi bagian yang tidak terpisahkan dari kehidupan kita. Mulai dari smartphone yang
                    membantu kita tetap terhubung dengan keluarga dan teman, hingga berbagai aplikasi yang mempermudah
                    pekerjaan. Dalam beberapa dekade terakhir, perkembangan teknologi telah mengubah cara kita bekerja, belajar,
                    dan berkomunikasi. Namun, seiring manfaatnya, teknologi juga membawa tantangan baru, seperti ketergantungan
                    pada perangkat digital dan masalah privasi. Oleh karena itu, penting bagi kita untuk bijak dalam menggunakan
                    teknologi agar dampak positifnya bisa dirasakan secara optimal.'
                ],
                [
                    'id' => 2,
                    'slug' => 'judul-artikel-manfaat-membaca-buku',
                    'title' => 'Manfaat Membaca Buku Setiap Hari',
                    'author' => 'Ali Basloom',
                    'body' => 'Membaca buku memiliki banyak manfaat untuk kesehatan mental dan pengetahuan kita. Selain mengurangi stres,
                    membaca juga dapat meningkatkan konsentrasi, memperkaya kosakata, dan memperluas wawasan. Saat ini, dengan
                    munculnya buku elektronik, akses ke bacaan berkualitas semakin mudah. Hanya dengan beberapa ketukan di
                    layar, kita dapat menemukan berbagai topik yang menarik dan menambah pengetahuan kita. Meluangkan waktu
                    untuk membaca setiap hari dapat menjadi investasi berharga bagi pertumbuhan pribadi dan pengembangan diri.'
                ]
            ];
    }
}

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/posts', function() {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{id}', function($slug) { 

    $post = Arr::first(Post::all(), function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact Person']);
});
