<?php

return [

	'tables' => [
		'permissions' => ['read', 'update'],
		'roles' => ['create', 'read', 'update', 'delete'],
		'users' => ['create', 'read', 'update', 'delete'],
		'tags' => ['create', 'read', 'update', 'delete'],
		'articles' => ['create', 'read', 'update', 'delete'],
		'comments' => ['read', 'delete']
	]
];