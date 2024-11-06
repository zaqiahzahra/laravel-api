<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = Author::all();

        $genres = ['Fiction', 'Non-Fiction', 'Mystery', 'Science Fiction', 'Fantasy', 'Biography'];

        $bookTitles = [
            'Petualangan di Negeri Ajaib',
            'Misteri Pulau Terpencil', 
            'Rahasia Hutan Terlarang',
            'Kisah dari Masa Depan',
            'Jejak Sang Penjelajah',
            'Legenda Kota Kuno',
            'Perjalanan ke Antariksa',
            'Dongeng dari Timur',
            'Catatan Sang Pengelana',
            'Dunia di Balik Cermin'
        ];
        }
    }
