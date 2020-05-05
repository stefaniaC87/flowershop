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
            <?= $this->Html->link(__('Edit Flower'), ['action' => 'edit', $flower->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Flower'), ['action' => 'delete', $flower->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flower->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Flowers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Flower'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="flowers view content">
            <h3><?= h($flower->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($flower->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Occasion') ?></th>
                    <td><?= $flower->has('occasion') ? $this->Html->link($flower->occasion->name, ['controller' => 'Occasions', 'action' => 'view', $flower->occasion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($flower->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($flower->cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($flower->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($flower->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($flower->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
