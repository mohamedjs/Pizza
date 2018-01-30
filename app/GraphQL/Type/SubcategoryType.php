<?php
namespace App\GraphQL\Type;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class SubcategoryType extends GraphQLType {

	protected $attributes = [
		'name' => 'subcategory',
		'description' => 'A subcategory'
	];

	public function fields()
	{
		return [
				'id' => [
					'type' => Type::nonNull(Type::string()),
					'description' => 'The id of the subcategory'
				],
				'sub_name' => [
					'type' => Type::string(),
					'description' => 'The subcategory name '
			],
			'category' => [
            'type'        => GraphQL::type('Category'),
            'description' => 'sub description',
        ]
		];
	}


	protected function resolveEmailField($root, $args)
	{
		return strtolower($root->sub_name);
	}
	// protected function resolvePasswordField($root, $args)
	// {
	// 	$pass=decrypt($root->password);
	// 	return $pass;
	// }
}
