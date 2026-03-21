<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Vendor> $vendors
 */
?>
<div class="vendors index content">
    <?= $this->Html->link(__('New Vendor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vendors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('oem') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('zipcode') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('location_ID') ?></th>
                    <th><?= $this->Paginator->sort('shop_location') ?></th>
                    <th><?= $this->Paginator->sort('opt_oem') ?></th>
                    <th><?= $this->Paginator->sort('aftermarket') ?></th>
                    <th><?= $this->Paginator->sort('preferred') ?></th>
                    <th><?= $this->Paginator->sort('electronic') ?></th>
                    <th><?= $this->Paginator->sort('vendor_ID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendors as $vendor): ?>
                <tr>
                    <td><?= $this->Number->format($vendor->id) ?></td>
                    <td><?= h($vendor->name) ?></td>
                    <td><?= h($vendor->oem) ?></td>
                    <td><?= h($vendor->phone_number) ?></td>
                    <td><?= h($vendor->address) ?></td>
                    <td><?= h($vendor->city) ?></td>
                    <td><?= h($vendor->state) ?></td>
                    <td><?= h($vendor->zipcode) ?></td>
                    <td><?= h($vendor->email) ?></td>
                    <td><?= $this->Number->format($vendor->location_ID) ?></td>
                    <td><?= h($vendor->shop_location) ?></td>
                    <td><?= h($vendor->opt_oem) ?></td>
                    <td><?= h($vendor->aftermarket) ?></td>
                    <td><?= h($vendor->preferred) ?></td>
                    <td><?= h($vendor->electronic) ?></td>
                    <td><?= $vendor->vendor_ID === null ? '' : $this->Number->format($vendor->vendor_ID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $vendor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vendor->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendor->id)]) ?>
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
