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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vendor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vendor->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Vendors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vendors form content">
            <?= $this->Form->create($vendor) ?>
            <fieldset>
                <legend><?= __('Edit Vendor') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('oem');
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('address');
                    echo $this->Form->control('city');
                    echo $this->Form->control('state');
                    echo $this->Form->control('zipcode');
                    echo $this->Form->control('email');
                    echo $this->Form->control('location_ID');
                    echo $this->Form->control('shop_location');
                    echo $this->Form->control('opt_oem');
                    echo $this->Form->control('aftermarket');
                    echo $this->Form->control('preferred');
                    echo $this->Form->control('electronic');
                    echo $this->Form->control('vendor_ID');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
