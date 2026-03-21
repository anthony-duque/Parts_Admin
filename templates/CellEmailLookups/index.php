<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CellEmailLookup> $cellEmailLookups
 */
?>
<div class="cellEmailLookups index content">
    <?= $this->Html->link(__('New Cell Email Lookup'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cell Email Lookups') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cell_name') ?></th>
                    <th><?= $this->Paginator->sort('email_format') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cellEmailLookups as $cellEmailLookup): ?>
                <tr>
                    <td><?= $this->Number->format($cellEmailLookup->id) ?></td>
                    <td><?= h($cellEmailLookup->cell_name) ?></td>
                    <td><?= h($cellEmailLookup->email_format) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cellEmailLookup->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cellEmailLookup->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cellEmailLookup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cellEmailLookup->id)]) ?>
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
