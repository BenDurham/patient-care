<nav class="large-3 medium-4 columns" id="actions-sidebar">
     <?= $this->Element('actions', array('type' => 'Carrier', 'typePlural' => 'Carriers')); ?>
</nav>
<div class="carriers index large-9 medium-8 columns content">
    <h3><?= __('Carriers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('code') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carriers as $carrier): ?>
            <tr>
                <td><?= $this->Number->format($carrier->id) ?></td>
                <td><?= h($carrier->name) ?></td>
                <td><?= h($carrier->code) ?></td>
                <td><?= h($carrier->created) ?></td>
                <td><?= h($carrier->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $carrier->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carrier->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carrier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carrier->id)]) ?>
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
