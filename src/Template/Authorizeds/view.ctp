<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Authorized $authorized
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Authorized'), ['action' => 'edit', $authorized->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Authorized'), ['action' => 'delete', $authorized->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authorized->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Authorizeds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Authorized'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Authorizeds'), ['controller' => 'Authorizeds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Authorized'), ['controller' => 'Authorizeds', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Authorizeds'), ['controller' => 'Authorizeds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Authorized'), ['controller' => 'Authorizeds', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="authorizeds view large-9 medium-8 columns content">
    <h3><?= h($authorized->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Parent Authorized') ?></th>
            <td><?= $authorized->has('parent_authorized') ? $this->Html->link($authorized->parent_authorized->id, ['controller' => 'Authorizeds', 'action' => 'view', $authorized->parent_authorized->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $authorized->has('role') ? $this->Html->link($authorized->role->id, ['controller' => 'Roles', 'action' => 'view', $authorized->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Controller Name') ?></th>
            <td><?= h($authorized->controller_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Method Name') ?></th>
            <td><?= h($authorized->method_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($authorized->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon') ?></th>
            <td><?= h($authorized->icon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($authorized->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parameter') ?></th>
            <td><?= h($authorized->parameter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($authorized->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lft') ?></th>
            <td><?= $this->Number->format($authorized->lft) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rght') ?></th>
            <td><?= $this->Number->format($authorized->rght) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lead') ?></th>
            <td><?= $this->Number->format($authorized->lead) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($authorized->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($authorized->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Authorizeds') ?></h4>
        <?php if (!empty($authorized->child_authorizeds)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Lft') ?></th>
                <th scope="col"><?= __('Rght') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('Prefix') ?></th>
                <th scope="col"><?= __('Controller Name') ?></th>
                <th scope="col"><?= __('Method Name') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Icon') ?></th>
                <th scope="col"><?= __('Alias') ?></th>
                <th scope="col"><?= __('Parameter') ?></th>
                <th scope="col"><?= __('Lead') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($authorized->child_authorizeds as $childAuthorizeds): ?>
            <tr>
                <td><?= h($childAuthorizeds->id) ?></td>
                <td><?= h($childAuthorizeds->parent_id) ?></td>
                <td><?= h($childAuthorizeds->lft) ?></td>
                <td><?= h($childAuthorizeds->rght) ?></td>
                <td><?= h($childAuthorizeds->role_id) ?></td>
                <td><?= h($childAuthorizeds->prefix) ?></td>
                <td><?= h($childAuthorizeds->controller_name) ?></td>
                <td><?= h($childAuthorizeds->method_name) ?></td>
                <td><?= h($childAuthorizeds->status) ?></td>
                <td><?= h($childAuthorizeds->icon) ?></td>
                <td><?= h($childAuthorizeds->alias) ?></td>
                <td><?= h($childAuthorizeds->parameter) ?></td>
                <td><?= h($childAuthorizeds->lead) ?></td>
                <td><?= h($childAuthorizeds->created) ?></td>
                <td><?= h($childAuthorizeds->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Authorizeds', 'action' => 'view', $childAuthorizeds->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Authorizeds', 'action' => 'edit', $childAuthorizeds->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Authorizeds', 'action' => 'delete', $childAuthorizeds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childAuthorizeds->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
