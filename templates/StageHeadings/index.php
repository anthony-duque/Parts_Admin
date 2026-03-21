<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\StageHeading> $stageHeadings
 */
?>
<div class="stageHeadings index content">
    <?= $this->Html->link(__('New Stage Heading'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Stage Headings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Description') ?></th>
                    <th><?= $this->Paginator->sort('Order_no') ?></th>
                    <th><?= $this->Paginator->sort('Loc_ID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stageHeadings as $stageHeading): ?>
                <tr>
                    <td><?= $this->Number->format($stageHeading->id) ?></td>
                    <td><?= h($stageHeading->Description) ?></td>
                    <td><?= $this->Number->format($stageHeading->Order_no) ?></td>
                    <td><?= $this->Number->format($stageHeading->Loc_ID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stageHeading->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stageHeading->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stageHeading->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stageHeading->id)]) ?>
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
