<?php
// Colocar esse código em function.php

function SearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'SEU_CUSTOM_POST_TYPE_AQUI');
	}
	return $query;
}

add_filter('pre_get_posts','SearchFilter');
