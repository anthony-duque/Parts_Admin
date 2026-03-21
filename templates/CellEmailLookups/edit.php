<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CellEmailLookup $cellEmailLookup
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cellEmailLookup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cellEmailLookup->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cell Email Lookups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cellEmailLookups form content">
            <?= $this->Form->create($cellEmailLookup) ?>
            <fieldset>
                <legend><?= __('Edit Cell Email Lookup') ?></legend>
                <?php
                    echo $this->Form->control('cell_name');
                    echo $this->Form->control('email_format');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
