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
            <?= $this->Html->link(__('Edit Cell Email Lookup'), ['action' => 'edit', $cellEmailLookup->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cell Email Lookup'), ['action' => 'delete', $cellEmailLookup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cellEmailLookup->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cell Email Lookups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cell Email Lookup'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cellEmailLookups view content">
            <h3><?= h($cellEmailLookup->cell_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cell Name') ?></th>
                    <td><?= h($cellEmailLookup->cell_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Format') ?></th>
                    <td><?= h($cellEmailLookup->email_format) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cellEmailLookup->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
