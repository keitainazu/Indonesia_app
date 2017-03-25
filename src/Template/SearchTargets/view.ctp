<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Search Target'), ['action' => 'edit', $searchTarget->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Search Target'), ['action' => 'delete', $searchTarget->id], ['confirm' => __('Are you sure you want to delete # {0}?', $searchTarget->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Search Targets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Search Target'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="searchTargets view large-9 medium-8 columns content">
    <h3><?= h($searchTarget->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Keyword') ?></th>
            <td><?= h($searchTarget->keyword) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($searchTarget->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($searchTarget->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($searchTarget->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($searchTarget->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Result') ?></h4>
        <?= $this->Text->autoParagraph(h($searchTarget->result)); ?>
    </div>
</div>
