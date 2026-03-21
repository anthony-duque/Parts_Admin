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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stageHeading->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stageHeading->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Stage Headings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stageHeadings form content">
            <?= $this->Form->create($stageHeading) ?>
            <fieldset>
                <legend><?= __('Edit Stage Heading') ?></legend>
                <?php
                    echo $this->Form->control('Description');
                    echo $this->Form->control('Order_no');
                    echo $this->Form->control('Loc_ID');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
