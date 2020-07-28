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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $locai->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $locai->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Locais'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="locais form content">
            <?= $this->Form->create($locai) ?>
            <fieldset>
                <legend><?= __('Edit Locai') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('cep');
                    echo $this->Form->control('logradouro');
                    echo $this->Form->control('complemento');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('bairro');
                    echo $this->Form->control('uf');
                    echo $this->Form->control('cidade');
                    echo $this->Form->control('data');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
