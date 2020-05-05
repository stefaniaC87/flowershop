<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Occasion $occasion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $occasion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $occasion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Occasions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="occasions form content">
            <?= $this->Form->create($occasion) ?>
            <fieldset>
                <legend><?= __('Edit Occasion') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
