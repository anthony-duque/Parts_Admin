<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Employee> $employees
 */
?>
<div class="employees index content">
    <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Employees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('userName') ?></th>
                    <th><?= $this->Paginator->sort('firstName') ?></th>
                    <th><?= $this->Paginator->sort('lastName') ?></th>
                    <th><?= $this->Paginator->sort('cellNumber') ?></th>
                    <th><?= $this->Paginator->sort('cellService') ?></th>
                    <th><?= $this->Paginator->sort('deptCode') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('notify') ?></th>
                    <th><?= $this->Paginator->sort('notif_preference') ?></th>
                    <th><?= $this->Paginator->sort('locID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $this->Number->format($employee->id) ?></td>
                    <td><?= h($employee->userName) ?></td>
                    <td><?= h($employee->firstName) ?></td>
                    <td><?= h($employee->lastName) ?></td>
                    <td><?= $employee->cellNumber === null ? '' : $this->Number->format($employee->cellNumber) ?></td>
                    <td><?= h($employee->cellService) ?></td>
                    <td><?= h($employee->deptCode) ?></td>
                    <td><?= h($employee->email) ?></td>
                    <td><?= h($employee->notify) ?></td>
                    <td><?= h($employee->notif_preference) ?></td>
                    <td><?= $this->Number->format($employee->locID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $employee->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
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
