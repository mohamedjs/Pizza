<?php
namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType {

	protected $attributes = [
		'name' => 'User',
		'description' => 'A user'
	];


	public function fields()
	{
		return [
			'id' => [
				'type' => Type::nonNull(Type::string()),
				'description' => 'The id of the user'
			],
			'email' => [
				'type' => Type::string(),
				'description' => 'The email of user'
			],
			'name' => [
				'type' => Type::string(),
				'description' => 'The name of user'
			],
      'password' =>[
        'type' => Type::string(),
        'description' => 'The password of user'
      ]
		];
	}


	protected function resolveEmailField($root, $args)
	{
		return strtolower($root->email);
	}
	// protected function resolvePasswordField($root, $args)
	// {
	// 	$pass=decrypt($root->password);
	// 	return $pass;
	// }
}
