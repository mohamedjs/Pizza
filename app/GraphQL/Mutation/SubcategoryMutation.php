<?php

namespace App\GraphQL\Mutation;

use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\SubCategory;
class SubcategoryMutation extends Mutation
{
    protected $attributes = [
        'name' => 'CategoryMutation',
        'description' => 'A mutation'
    ];

    public function type()
    {
        return GraphQL::type('Subcategory');
    }

    public function args()
    {
        return [
          'sub_name' => ['name' => 'sub_name', 'type' => Type::nonNull(Type::string())],
          'cat_id' => [ 'name' => 'cat_id', 'type' => Type::nonNull(Type::string()) ]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
      $sub = new SubCategory();
      $sub->sub_name = $args['sub_name'];
      $sub->category_id=$args['cat_id'];
      $sub->save();
      return $sub;
    }

}
