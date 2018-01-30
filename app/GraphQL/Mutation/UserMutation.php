<?php

namespace App\GraphQL\Mutation;

use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\user;
class UserMutation extends Mutation
{
    protected $attributes = [
        'name' => 'UserMutation',
        'description' => 'A mutation'
    ];

    public function type()
    {
        return GraphQL::type('User');
    }

    public function args()
    {
        return [
          'email' => ['name' => 'email', 'type' => Type::nonNull(Type::string()),'rules' => ['required', 'email']],
          'name' => ['name' => 'name', 'type' => Type::nonNull(Type::string())],
          'password' => ['name' => 'password', 'type' => Type::nonNull(Type::string())]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
      $user = new User();
      $user->name = $args['name'];
      $user->email = $args['email'];
      $user->password = bcrypt($args['password']);
      $user->save();

      return $user;
    }
}
