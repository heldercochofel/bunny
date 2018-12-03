<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserProfile[]|\Cake\Collection\CollectionInterface $userProfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Profile'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userProfile index large-9 medium-8 columns content">
    <h3><?= __('User Profile') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_iduser') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_idcategory') ?></th>
                <th scope="col"><?= $this->Paginator->sort('source_idsource') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timestamp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userProfile as $userProfile): ?>
            <tr>
                <td><?= $this->Number->format($userProfile->id) ?></td>
                <td><?= $this->Number->format($userProfile->user_iduser) ?></td>
                <td><?= $this->Number->format($userProfile->category_idcategory) ?></td>
                <td><?= $this->Number->format($userProfile->source_idsource) ?></td>
                <td><?= h($userProfile->timestamp) ?></td>
                <td><?= $this->Number->format($userProfile->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userProfile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userProfile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userProfile->id)]) ?>
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
