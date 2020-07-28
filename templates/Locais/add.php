<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Locai $locai
 */
use Jarouche\ViaCEP\HelperViaCep;


?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Locais'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="locais form content">
            
            <?= $this->Form->create($locai,["autocomplete"=>"on", "onsubmit"=>"return validaForm(this)"]) ?>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('cep', ["onblur"=>"pesquisacep(this.value)"]);
            echo $this->Form->control('logradouro');
            echo $this->Form->control('complemento');
            echo $this->Form->control('numero');
            echo $this->Form->control('bairro');
            echo $this->Form->control('uf',["onblur"=>"myFunction('uf')"]);
            echo $this->Form->control('cidade');
            echo $this->Form->control('data');

        ?>          
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>