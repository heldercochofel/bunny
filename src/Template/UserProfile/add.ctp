<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserProfile $userProfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Profile'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="userProfile form large-9 medium-8 columns content">
    <?= $this->Form->create($userProfile) ?>
    <fieldset>
        <legend><?= __('Add User Profile') ?></legend>
        <?php
            echo $this->Form->control('user_iduser');
            echo $this->Form->control('category_idcategory');
            echo $this->Form->control('text');
            echo $this->Form->control('source_idsource');
            echo $this->Form->control('timestamp');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
