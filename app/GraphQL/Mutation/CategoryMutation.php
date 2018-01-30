<?php

namespace App\GraphQL\Mutation;

use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\Category;
class CategoryMutation extends Mutation
{
    protected $attributes = [
        'name' => 'CategoryMutation',
        'description' => 'A mutation'
    ];

    public function type()
    {
        return GraphQL::type('Category');
    }

    public function args()
    {
        return [
          'category_name' => ['name' => 'category_name', 'type' => Type::nonNull(Type::string())]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
      $cat = new Category();
      $cat->category_name = $args['category_name'];
      $cat->save();
      return $cat;
    }

}
