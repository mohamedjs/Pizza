<?php
namespace App\GraphQL\Type;

use Folklore\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class CategoryType extends GraphQLType {

	protected $attributes = [
		'name' => 'category',
		'description' => 'A category'
	];

	public function fields()
	{
		return [
			'id' => [
				'type' => Type::nonNull(Type::string()),
				'description' => 'The id of the category'
			],
			'category_name' => [
				'type' => Type::string(),
				'description' => 'The category name '
			],
			'subs' => [
						'type' => Type::listOf(GraphQL::type('Subcategory')),
						'description' => 'SubCategory description'
					],
		];
	}


	protected function resolveEmailField($root, $args)
	{
		return strtolower($root->category_name);
	}
	// protected function resolvePasswordField($root, $args)
	// {
	// 	$pass=decrypt($root->password);
	// 	return $pass;
	// }
}
