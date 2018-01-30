<?php
namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use App\User;
use App\Category;
class CategorysQuery extends Query {

	protected $attributes = [
		'name' => 'category'
	];

	public function type()
	{
		return Type::listOf(GraphQL::type('Category'));
	}

	public function args()
	{
		return [
			'id' => ['name' => 'id', 'type' => Type::string()],
			'category_name' => ['name' => 'category_name', 'type' => Type::string()]
		];
	}

	public function resolve($root, $args , $context , ResolveInfo $info)
	{
		$fields = $info->getFieldSelection($depth = 3);
		if(isset($args['id']))
		{
			return Category::where('id' , $args['id'])->get();
		}
		else{
        $cats = Category::query();

        foreach ($fields as $field) {
            if ($field === 'Subcategory') {
              $cats->with('subs');
            }
        }
        return $cats->get();
	}
}

}
