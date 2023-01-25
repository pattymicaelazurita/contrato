<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contrato->idContrato],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->idContrato), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Contratos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contratos form content">
            <?= $this->Form->create($contrato) ?>
            <fieldset>
                <legend><?= __('Edit Contrato') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('monto');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('idCliente');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
