<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Authorized[]|\Cake\Collection\CollectionInterface $authorizeds
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Authorized'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authorizeds index large-9 medium-8 columns content">
    <h3><?= __('Authorizeds') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('controller_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('method_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('icon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parameter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lead') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authorizeds as $authorized): ?>
            <tr>
                <td><?= $this->Number->format($authorized->id) ?></td>
                <td><?= $authorized->has('parent_authorized') ? $this->Html->link($authorized->parent_authorized->id, ['controller' => 'Authorizeds', 'action' => 'view', $authorized->parent_authorized->id]) : '' ?></td>
                <td><?= $authorized->has('role') ? $this->Html->link($authorized->role->id, ['controller' => 'Roles', 'action' => 'view', $authorized->role->id]) : '' ?></td>
                <td><?= h($authorized->controller_name) ?></td>
                <td><?= h($authorized->method_name) ?></td>
                <td><?= h($authorized->status) ?></td>
                <td><?= h($authorized->icon) ?></td>
                <td><?= h($authorized->alias) ?></td>
                <td><?= h($authorized->parameter) ?></td>
                <td><?= $this->Number->format($authorized->lead) ?></td>
                <td><?= h($authorized->created) ?></td>
                <td><?= h($authorized->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $authorized->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $authorized->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $authorized->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authorized->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
