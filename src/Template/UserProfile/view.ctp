<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserProfile $userProfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Profile'), ['action' => 'edit', $userProfile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Profile'), ['action' => 'delete', $userProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userProfile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Profile'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Profile'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userProfile view large-9 medium-8 columns content">
    <h3><?= h($userProfile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userProfile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Iduser') ?></th>
            <td><?= $this->Number->format($userProfile->user_iduser) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Idcategory') ?></th>
            <td><?= $this->Number->format($userProfile->category_idcategory) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source Idsource') ?></th>
            <td><?= $this->Number->format($userProfile->source_idsource) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($userProfile->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timestamp') ?></th>
            <td><?= h($userProfile->timestamp) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($userProfile->text)); ?>
    </div>
</div>
