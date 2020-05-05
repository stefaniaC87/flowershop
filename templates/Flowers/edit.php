<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flower $flower
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $flower->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $flower->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Flowers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="flowers form content">
            <?= $this->Form->create($flower) ?>
            <fieldset>
                <legend><?= __('Edit Flower') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('occasion_id', ['options' => $occasions]);
                    echo $this->Form->control('cost');
                    echo $this->Form->control('quantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
