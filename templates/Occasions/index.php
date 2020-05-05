<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Occasion[]|\Cake\Collection\CollectionInterface $occasions
 */
?>
<div class="occasions index content">
    <?= $this->Html->link(__('New Occasion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Occasions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($occasions as $occasion): ?>
                <tr>
                    <td><?= $this->Number->format($occasion->id) ?></td>
                    <td><?= h($occasion->name) ?></td>
                    <td><?= h($occasion->description) ?></td>
                    <td><?= h($occasion->created) ?></td>
                    <td><?= h($occasion->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $occasion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $occasion->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $occasion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $occasion->id)]) ?>
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
