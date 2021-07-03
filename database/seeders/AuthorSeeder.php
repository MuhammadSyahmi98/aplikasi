<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory(30)->create();


        

        Book::each(function($book) {
            $max_authors = 5;
            $author_ids = Author::inRandomOrder()
            ->limit( rand(1, $max_authors) )
            ->pluck('id');

            $book->author()->sync( $author_ids );
        });

        // This to assign random foreign key
        // Have 30 athours
        // Book::each(function($book){
        //     $book->author_id = rand(1,30);
        //     $book->save();
        // });
    }
}
