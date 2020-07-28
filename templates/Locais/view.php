<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Locai $locai
 */
?>


<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Locai'), ['action' => 'edit', $locai->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Locai'), ['action' => 'delete', $locai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $locai->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Locais'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Locai'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="locais view content">
            <h3><?= h($locai->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($locai->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cep') ?></th>
                    <td><?= h($locai->cep) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logradouro') ?></th>
                    <td><?= h($locai->logradouro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Complemento') ?></th>
                    <td><?= h($locai->complemento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($locai->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bairro') ?></th>
                    <td><?= h($locai->bairro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uf') ?></th>
                    <td><?= h($locai->uf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($locai->cidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($locai->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data') ?></th>
                    <td><?= h($locai->data) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
