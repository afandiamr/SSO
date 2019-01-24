<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $profile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profile'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profiles view large-9 medium-8 columns content">
    <h3><?= h($profile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Full Name') ?></th>
            <td><?= h($profile->full_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nick Name') ?></th>
            <td><?= h($profile->nick_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($profile->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($profile->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($profile->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nip') ?></th>
            <td><?= h($profile->nip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jabatan') ?></th>
            <td><?= h($profile->jabatan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempat Lahir') ?></th>
            <td><?= h($profile->tempat_lahir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tanggal Lahir') ?></th>
            <td><?= h($profile->tanggal_lahir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= h($profile->note) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Created') ?></th>
            <td><?= h($profile->user_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Modified') ?></th>
            <td><?= h($profile->user_modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($profile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Polres') ?></th>
            <td><?= $this->Number->format($profile->polres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($profile->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($profile->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($profile->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Pass Mobile') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Last Login') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Photo Dir') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Profile Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($profile->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->role_id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->pass_mobile) ?></td>
                <td><?= h($users->photo) ?></td>
                <td><?= h($users->status) ?></td>
                <td><?= h($users->last_login) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->photo_dir) ?></td>
                <td><?= h($users->modified) ?></td>
                <td><?= h($users->profile_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
