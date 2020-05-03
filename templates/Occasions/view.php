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
            <?= $this->Html->link(__('Edit Occasion'), ['action' => 'edit', $occasion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Occasion'), ['action' => 'delete', $occasion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $occasion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Occasions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Occasion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="occasions view content">
            <h3><?= h($occasion->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($occasion->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($occasion->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Flower') ?></th>
                    <td><?= $occasion->has('flower') ? $this->Html->link($occasion->flower->name, ['controller' => 'Flowers', 'action' => 'view', $occasion->flower->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($occasion->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($occasion->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($occasion->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
