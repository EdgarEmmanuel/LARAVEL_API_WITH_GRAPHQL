<?php

namespace App\GraphQL\Types;

use App\Book;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type  as GraphQLType;

class BookType extends GraphQLType {

    protected $attributes = [
        'name' => 'Book',
        'description' => ' list of all the book',
        'model' => Book::class
    ];



    public function fields(): array {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of a particular book',
            ],
            'title' => [
                'type' => Type::nonNull(Type::String()),
                'description' => 'Title of the book',
            ],
            'author' => [
                'type' => Type::nonNull(Type::String()),
                'description' => 'author of this book',
            ],
            'language' => [
                'type' => Type::nonNull(Type::String()),
                'description' => 'langauge of this book',
            ],
            'year_published' => [
                'type' => Type::nonNull(Type::String()),
                'description' => 'the year the book has been published',
            ],
            'isbn' => [
                'type' => Type::nonNull(Type::String()),
                'description' => 'Isbn of the book',
            ],
        ];
    }

}