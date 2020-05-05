<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flower[]|\Cake\Collection\CollectionInterface $flowers
 */
?>
<div class="flowers index content">
    <?= $this->Html->link(__('New Flower'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Flowers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('occasion_id') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flowers as $flower): ?>
                <tr>
                    <td><?= $this->Number->format($flower->id) ?></td>
                    <td><?= h($flower->name) ?></td>
                    <td><?= $flower->has('occasion') ? $this->Html->link($flower->occasion->name, ['controller' => 'Occasions', 'action' => 'view', $flower->occasion->id]) : '' ?></td>
                    <td><?= $this->Number->format($flower->cost) ?></td>
                    <td><?= $this->Number->format($flower->quantity) ?></td>
                    <td><?= h($flower->created) ?></td>
                    <td><?= h($flower->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $flower->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flower->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flower->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flower->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
