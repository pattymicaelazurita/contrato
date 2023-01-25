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
            <?= $this->Html->link(__('Edit Contrato'), ['action' => 'edit', $contrato->idContrato], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contrato'), ['action' => 'delete', $contrato->idContrato], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->idContrato), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contratos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contrato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contratos view content">
            <h3><?= h($contrato->idContrato) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($contrato->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdContrato') ?></th>
                    <td><?= $this->Number->format($contrato->idContrato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monto') ?></th>
                    <td><?= $this->Number->format($contrato->monto) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCliente') ?></th>
                    <td><?= $this->Number->format($contrato->idCliente) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($contrato->fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
