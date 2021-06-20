<?php


namespace App\GraphQL\Mutations\Book;


use App\Book;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;


class CreateBookMutation extends Mutation {

    protected $attributes = [
        'name' => 'createBook'
    ];

    public function type(): Type {
        return Type::nonNull(GraphQL::type('Book'));
    }

    public function args() : array {
        return [
            'title' => [
                'name' => 'title',
                'type' => Type::nonNull(Type::String())
            ],
            'author' => [
                'name' => 'author',
                'type' => Type::nonNull(Type::String())
            ],
            'language' => [
                'name' => 'language',
                'type' => Type::nonNull(Type::String())
            ],
            'year_published' => [
                'name' => 'year_published',
                'type' => Type::nonNull(Type::String())
            ],
            'isbn' => [
                'name' => 'isbn',
                'type' => Type::nonNull(Type::String())
            ],
        ];
    }

    public function resolve($root,$args){
        $book = new Book();
        $book->fill($args);
        $book->save();

        return $book;
    }

}