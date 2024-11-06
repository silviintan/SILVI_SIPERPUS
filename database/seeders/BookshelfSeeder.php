<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:: table('bookshelfs')->insert([
               ['code' => 'BS001',
                'name' => 'Manga'
                ],
               [
                'code' => 'BS001',
                'name' => 'Novel'
                ]
            ]);
            Book::create([
                'title'         =>'Gajah Terbang',
                'author'        =>'Minisittar',
                'year'          =>'2024',
                'publisher'     =>'Universitas gajah Terbang',
                'city'          =>'Cianjur',
                'cover'         =>'gajahterbang.jpg',
                'bookshelf_id'  =>1
            ]);
    }
}
