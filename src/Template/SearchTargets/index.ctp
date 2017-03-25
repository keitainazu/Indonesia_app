<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Search Target'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="searchTargets index large-9 medium-8 columns content">
    <h3><?= __('Search Targets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('keyword') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($searchTargets as $searchTarget): ?>
            <tr>
                <td><?= $this->Number->format($searchTarget->id) ?></td>
                <td><?= h($searchTarget->keyword) ?></td>
                <td><?= h($searchTarget->status) ?></td>
                <td><?= h($searchTarget->created) ?></td>
                <td><?= h($searchTarget->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $searchTarget->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $searchTarget->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $searchTarget->id], ['confirm' => __('Are you sure you want to delete # {0}?', $searchTarget->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
