<?php

namespace App\GraphQL\Queries\Book;

use App\Book;
use GraphQL\Type\Definition\Type;

use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;


class BooksQuery extends Query {

    protected $attributes = [
        'name' => 'books',
    ];

    public function type(): Type {
        return Type::listOf(Type::nonNull(GraphQL::type('Book')));
    }

    public function resolve($root,$args){
        return Book::all();
    }

    
}