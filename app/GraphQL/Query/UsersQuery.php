<?php
namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\User;

class UsersQuery extends Query {

	protected $attributes = [
		'name' => 'user'
	];

	public function type()
	{
		return Type::listOf(GraphQL::type('User'));
	}

	public function args()
	{
		return [
			'id' => ['name' => 'id', 'type' => Type::string()],
			'email' => ['name' => 'email', 'type' => Type::string()],
      'password' => ['name' => 'password', 'type' => Type::string()]
		];
	}

	public function resolve($root, $args)
	{
		if(isset($args['id']))
		{
			return User::where('id' , $args['id'])->get();
		}
		else if(isset($args['email']))
		{
			return User::where('email', $args['email'])->get();
		}
    else if(isset($args['password']))
		{
			return User::where('password',  bcrypt($args['password']))->get();
		}
		else
		{
			return User::all();
		}
	}

}
