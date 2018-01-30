<?php
namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use App\User;
use App\SubCategory;
class SubcategorysQuery extends Query {

	protected $attributes = [
		'name' => 'subcategory'
	];

	public function type()
	{
		return Type::listOf(GraphQL::type('Subcategory'));
	}

	public function args()
	{
		return [
			'id' => ['name' => 'id', 'type' => Type::string()],
			'sub_name' => ['name' => 'sub_name', 'type' => Type::string()],
		];
	}

	public function resolve($root, $args , $context , ResolveInfo $info)
	{
		$fields = $info->getFieldSelection($depth = 3);
		if(isset($args['id']))
		{
			return SubCategory::where('id' , $args['id'])->get();
		}
		else{
        $sub = SubCategory::query();

        foreach ($fields as $field) {
            if ($field === 'Subcategory') {
              $sub->with('category');
            }
        }
        return $sub->get();
	}
}

}
