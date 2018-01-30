<?php
namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\Month;

class MonthQuery extends Query {

	protected $attributes = [
		'name' => 'month'
	];

	public function type()
	{
		return Type::listOf(GraphQL::type('Month'));
	}

	public function args()
	{
		return [
			'id' => ['name' => 'id', 'type' => Type::string()],
			'month_name' => ['name' => 'month_name', 'type' => Type::string()]

		];
	}

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $fields = $info->getFieldSelection($depth = 3);

        $users = User::query();

        foreach ($fields as $field => $keys) {

            if ($field === 'months') {
                $users->with('months');
            }
        }
        return $users->get();
    }

}
