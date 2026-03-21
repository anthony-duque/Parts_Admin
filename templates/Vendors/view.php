<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendor $vendor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vendor'), ['action' => 'edit', $vendor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vendor'), ['action' => 'delete', $vendor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vendors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vendor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vendors view content">
            <h3><?= h($vendor->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($vendor->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($vendor->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($vendor->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($vendor->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($vendor->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zipcode') ?></th>
                    <td><?= h($vendor->zipcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($vendor->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Shop Location') ?></th>
                    <td><?= h($vendor->shop_location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vendor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location ID') ?></th>
                    <td><?= $this->Number->format($vendor->location_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vendor ID') ?></th>
                    <td><?= $vendor->vendor_ID === null ? '' : $this->Number->format($vendor->vendor_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Oem') ?></th>
                    <td><?= $vendor->oem ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Opt Oem') ?></th>
                    <td><?= $vendor->opt_oem ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Aftermarket') ?></th>
                    <td><?= $vendor->aftermarket ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Preferred') ?></th>
                    <td><?= $vendor->preferred ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Electronic') ?></th>
                    <td><?= $vendor->electronic ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
