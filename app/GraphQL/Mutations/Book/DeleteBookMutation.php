<?php


namespace App\GraphQL\Mutations\Book;


use App\Book;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;


class DeleteBookMutation extends Mutation {

    protected $attributes = [
        'name' => 'deleteBook'
    ];

    public function type(): Type {
        return Type::boolean();
    }

    public function args() : array {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::nonNull(Type::int()),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root,$args){
        $deletedBook = Book::where('id', $args['id'])->delete();
        return $deletedBook;

        // $book = Book::findOrFail($args['id']);

        // return  $book->delete() ? true : false;
    }

}