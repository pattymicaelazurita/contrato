<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contrato> $contratos
 */
?>
<div class="contratos index content">
    <?= $this->Html->link(__('New Contrato'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contratos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idContrato') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('monto') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('idCliente') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contratos as $contrato): ?>
                <tr>
                    <td><?= $this->Number->format($contrato->idContrato) ?></td>
                    <td><?= h($contrato->nombre) ?></td>
                    <td><?= $this->Number->format($contrato->monto) ?></td>
                    <td><?= h($contrato->fecha) ?></td>
                    <td><?= $this->Number->format($contrato->idCliente) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contrato->idContrato]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contrato->idContrato]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contrato->idContrato], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->idContrato)]) ?>
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
</div>
