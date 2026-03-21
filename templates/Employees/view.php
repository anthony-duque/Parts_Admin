<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->FirstName . " " . $employee->LastName), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees view content">
            <h3><?= h($employee->userName) ?></h3>
            <table>
                <tr>
                    <th><?= __('UserName') ?></th>
                    <td><?= h($employee->userName) ?></td>
                </tr>
                <tr>
                    <th><?= __('FirstName') ?></th>
                    <td><?= h($employee->firstName) ?></td>
                </tr>
                <tr>
                    <th><?= __('LastName') ?></th>
                    <td><?= h($employee->lastName) ?></td>
                </tr>
                <tr>
                    <th><?= __('CellService') ?></th>
                    <td><?= h($employee->cellService) ?></td>
                </tr>
                <tr>
                    <th><?= __('DeptCode') ?></th>
                    <td><?= h($employee->deptCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($employee->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notif Preference') ?></th>
                    <td><?= h($employee->notif_preference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($employee->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('CellNumber') ?></th>
                    <td><?= $employee->cellNumber === null ? '' : $this->Number->format($employee->cellNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('LocID') ?></th>
                    <td><?= $this->Number->format($employee->locID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notify') ?></th>
                    <td><?= $employee->notify ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
