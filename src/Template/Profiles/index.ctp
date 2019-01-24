<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile[]|\Cake\Collection\CollectionInterface $profiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profiles index large-9 medium-8 columns content">
    <h3><?= __('Profiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('full_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nick_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jabatan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tempat_lahir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tanggal_lahir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('polres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('note') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profiles as $profile): ?>
            <tr>
                <td><?= $this->Number->format($profile->id) ?></td>
                <td><?= h($profile->full_name) ?></td>
                <td><?= h($profile->nick_name) ?></td>
                <td><?= h($profile->address) ?></td>
                <td><?= h($profile->email) ?></td>
                <td><?= h($profile->phone) ?></td>
                <td><?= h($profile->nip) ?></td>
                <td><?= h($profile->jabatan) ?></td>
                <td><?= h($profile->tempat_lahir) ?></td>
                <td><?= h($profile->tanggal_lahir) ?></td>
                <td><?= $this->Number->format($profile->polres) ?></td>
                <td><?= h($profile->note) ?></td>
                <td><?= h($profile->created) ?></td>
                <td><?= h($profile->modified) ?></td>
                <td><?= h($profile->user_created) ?></td>
                <td><?= h($profile->user_modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?>
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
