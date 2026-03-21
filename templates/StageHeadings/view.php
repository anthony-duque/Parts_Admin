<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StageHeading $stageHeading
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Stage Heading'), ['action' => 'edit', $stageHeading->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Stage Heading'), ['action' => 'delete', $stageHeading->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stageHeading->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Stage Headings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Stage Heading'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stageHeadings view content">
            <h3><?= h($stageHeading->Description) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($stageHeading->Description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stageHeading->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order No') ?></th>
                    <td><?= $this->Number->format($stageHeading->Order_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loc ID') ?></th>
                    <td><?= $this->Number->format($stageHeading->Loc_ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
