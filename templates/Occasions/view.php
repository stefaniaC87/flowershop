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
            <div class="related">
                <h4><?= __('Related Flowers') ?></h4>
                <?php if (!empty($occasion->flowers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Occasion Id') ?></th>
                            <th><?= __('Cost') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($occasion->flowers as $flowers) : ?>
                        <tr>
                            <td><?= h($flowers->id) ?></td>
                            <td><?= h($flowers->name) ?></td>
                            <td><?= h($flowers->occasion_id) ?></td>
                            <td><?= h($flowers->cost) ?></td>
                            <td><?= h($flowers->quantity) ?></td>
                            <td><?= h($flowers->created) ?></td>
                            <td><?= h($flowers->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Flowers', 'action' => 'view', $flowers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Flowers', 'action' => 'edit', $flowers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flowers', 'action' => 'delete', $flowers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flowers->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
