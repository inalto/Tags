<?php
/**
 * Routes
 *
 * example_routes.php will be loaded in main app/config/routes.php file.
 */
Croogo::hookRoutes('Tags');


/**
 * Admin menu (navigation)
 */
CroogoNav::add('Tags', array(
	'icon' => array('tag', 'large'),
	'title' => __d('tags', 'Tags'),
	'url' => '#',
	'weight'=>'0',
	'children' => array(

		'tags' => array(
			'title' => __d('tags', 'List'),
			'url' =>  array(
				'admin' => true,
				'plugin' => 'tags',
				'controller' => 'tags',
				'action' => 'index'
				),
			
		),
		'add' => array(
			'title' => __d('tags', 'Add'),
			'url' =>  array(
				'admin' => true,
				'plugin' => 'tags',
				'controller' => 'tags',
				'action' => 'add'
				),
			
		),



	),
));

