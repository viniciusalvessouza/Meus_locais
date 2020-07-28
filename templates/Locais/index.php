<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Locai[]|\Cake\Collection\CollectionInterface $locais
 */
?>


<div class="locais index content">

    <h3><?= __('Locais') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('data') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($locais as $locai): ?>
                <tr>
                    <td><?= $this->Html->link(__(h($locai->nome)), ['action' => 'view', $locai->id]) ?> </td>
                    <td><?= h($locai->data) ?></td>
                    <td class="actions">
                        
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $locai->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $locai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $locai->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
    <?= $this->Form->create($locai,["action"=>$this->Url->build('/locais/add')]) ?>
    <?= $this->Form->button('Adicionar Local') ?>
    <?= $this->Form->end() ?>

</div>
