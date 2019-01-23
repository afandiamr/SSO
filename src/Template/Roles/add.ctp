<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="roles form large-9 medium-8 columns content">
    <?= $this->Form->create($role) ?>
    <fieldset>
        <legend><?= __('Add Role') ?></legend>
        <?php
            echo $this->Form->control('group');
            echo $this->Form->control('keterangan');
            echo $this->Form->control('user_modified');
            echo $this->Form->control('user_created');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>