<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $searchTarget->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $searchTarget->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Search Targets'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="searchTargets form large-9 medium-8 columns content">
    <?= $this->Form->create($searchTarget) ?>
    <fieldset>
        <legend><?= __('Edit Search Target') ?></legend>
        <?php
            echo $this->Form->input('keyword');
          //  echo $this->Form->input('status');
          //  echo $this->Form->input('result');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
