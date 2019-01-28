<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Authorized $authorized
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $authorized->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $authorized->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Authorizeds'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Authorizeds'), ['controller' => 'Authorizeds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Authorized'), ['controller' => 'Authorizeds', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authorizeds form large-9 medium-8 columns content">
    <?= $this->Form->create($authorized) ?>
    <fieldset>
        <legend><?= __('Edit Authorized') ?></legend>
        <?php
            echo $this->Form->control('parent_id', ['options' => $parentAuthorizeds]);
            echo $this->Form->control('role_id', ['options' => $roles, 'empty' => true]);
            echo $this->Form->control('controller_name');
            echo $this->Form->control('method_name');
            echo $this->Form->control('status');
            echo $this->Form->control('icon');
            echo $this->Form->control('alias');
            echo $this->Form->control('parameter');
            echo $this->Form->control('lead');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
