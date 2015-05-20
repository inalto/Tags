<?php
/**
 * Copyright 2009-2014, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2009-2014, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$this->extend('/Common/admin_edit');

$this->Html
    ->addCrumb('', '/admin', array('icon' => 'home'))
    ->addCrumb(__d('croogo', 'Tags'), array('plugin' => 'tags', 'controller' => 'tags', 'action' => 'index'));

?>
<div class="tags form">
<?php echo $this->Form->create('Tag');?>

<div class="row-fluid">
    <div class="span8">
    <fieldset>
        <legend><?php printf(__d('tags', 'Edit %s'), __d('tags', 'Tag')); ?></legend>
<?php
        echo $this->Form->input('tags', array('label' => 'Tags (list of tags separated by comma)'));
    ?>
    </fieldset>
</div>
    <div class="span4">
    <?php
        echo $this->Html->beginBox(__d('croogo', 'Publishing')) .
            $this->Form->button(__d('croogo', 'Apply'), array('name' => 'apply', 'class' => 'btn')) .
            $this->Form->button(__d('croogo', 'Save'), array('class' => 'btn btn-primary')) .
            $this->Html->link(__d('croogo', 'Cancel'), array('action' => 'index'), array('class' => 'cancel btn btn-danger'));
        echo $this->Html->endBox();
        echo $this->Croogo->adminBoxes();
    ?>
    </div>
<?php
        echo $this->Form->end();
    ?>
</div>
