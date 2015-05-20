<?php

$this->extend('/Common/admin_index');

$this->Html
    ->addCrumb('', '/admin', array('icon' => 'home'))
    ->addCrumb(__d('tags', 'Tags'), '/' . $this->request->url);

?>
<div class="navbar">
 <div class="navbar-inner">
    <?php echo $this->Html->link(__d('tags', 'Tags'), array('action' => 'index','admin'=>TRUE),array('class'=>'brand')); ?>
    <?php echo $this->Form->create('Tag',array('class'=>'navbar-search pull-left')); ?>
    <?php echo $this->Form->input('Tag.search',array('label'=>false,'div'=>false,'class'=>'search-query','placeholder'=>'Cerca'));?>
    <?php echo $this->Form->end(); ?>
    <ul class="nav">
        <li>
        <?php echo $this->Html->link('<i class="icon-plus-sign"></i> '.__d('tags', 'New'), array('action' => 'add','admin'=>TRUE),array('escape'=>false)); ?>
        </li>
    </ul>
 </div>
</div>

<table class="table table-striped">
<thead>
<?php

	$tableHeaders = $this->Html->tableHeaders(array(
		$this->Paginator->sort('name', __d('tags', 'Name')),
		$this->Paginator->sort('keyname', __d('tags', 'Key Name')),
		$this->Paginator->sort('id', __d('tags', 'Identifier')),
		__d('tags', 'Actions'),
	));
	echo $this->Html->tag('thead', $tableHeaders);
	?>
</thead>
<tbody>
<?php
$rows=array();
foreach ($tags as $tag):
	$actions = array();
	$actions[] = $this->Croogo->adminRowAction(
		'',
		array('action' => 'edit', $tag['Tag']['id']),
		array('icon' => $this->Theme->getIcon('update'), 'tooltip' => __d('tags', 'Edit this tag'))
	);
	$actions[] = $this->Croogo->adminRowAction(
		'',
		array('action' => 'delete', $tag['Tag']['id']),
		array('icon' => $this->Theme->getIcon('delete'), 'tooltip' => __d('tag', 'Tag id')),
		__d('croogo', 'Are you sure?')
	);
	$actions = $this->Html->div('item-actions', implode(' ', $actions));

	$rows[] = array(
		$tag['Tag']['name'],
		$tag['Tag']['keyname'],
		$tag['Tag']['id'],
		$this->Html->div('item-actions', $actions),
	);

 endforeach;


echo $this->Html->tableCells($rows);

?>
</tbody>
</table>
