<?php
namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class MonthType extends GraphQLType {

	protected $attributes = [
		'name' => 'Month',
		'description' => 'A month'
	];


	public function fields()
	{
		return [
			'id' => [
				'type' => Type::nonNull(Type::string()),
				'description' => 'The id of the user'
			],
			'month_name' => [
				'type' => Type::string(),
				'description' => 'The email of user'
			]
		];
	}

	protected function resolveEmailField($root, $args)
	{
		return strtolower($root->month_name);
	}

}
