<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contrato> $contratos
 */
?>
<body>
<form action="coreContratos" method="get">
    Inicio: <input type="date" name="FechaIni"><br>
    Fin: <input type="date" name="FechaFin"><br>
    <input type="submit" value="Enviar">
</form>
</body>

<?php
$identificadorInicio=$_GET["FechaIni"];
$identificadorFin=$_GET["FechaFin"];
$arreglo=[];
?>
<?php if(!empty($identificadorInicio)):
    echo "Fecha de Inicio: ",$identificadorInicio;
?>
<br>
<?php endif;?>


<?php if(!empty($identificadorFin)):
    echo "Fecha de Fin: ",$identificadorFin;
?>
<br>
<?php endif;?>

<div class="contratos index content">
    <h3><?= __('Contratos') ?></h3>
    <?php if(empty($identificadorInicio) && empty($identificadorFin)): ?>
        <div class="table-responsive">
            <table>
                
                <tbody>
                    <?php foreach ($contratos as $contrato): ?>
                    <tr>
                        <?php
                            $value=$contrato->idCliente;
                            $nombreContrato=($contrato->nombre).' - '.($contrato->fecha);
                            $monto=$contrato->monto;
                            $igual=False;
                            $i=-1;
                            foreach($arreglo as $a){
                                $i=$i+1;
                                foreach($a as $b){
                                    if($b==$value){
                                        $igual=True;
                                        $n=$i;
                                    }
                                }
                            }
                            
                            if($igual==False){
                                $arreglo[][]=$value;
                                $i=$i+1;
                                $n=$i;
                            }
                            
                            if(!empty($arreglo[$n][1])){
                                $arreglo[$n][1]=$arreglo[$n][1]+$monto;
                            }else{
                                $arreglo[$n][1]=$monto;
                            }
                            $arreglo[$n][]=$nombreContrato;
                        ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Cliente') ?></th>
                    <th><?= $this->Paginator->sort('Monto') ?></th>
                    <th><?= $this->Paginator->sort('Contratos') ?></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arreglo as $a): ?>
                <tr>
                    <td><?= $a[0] ?></td>
                    <td><?= $a[1] ?></td>
                    <td>
                        <?php $i=0?>
                        <?php foreach($a as $b):
                            $i=$i+1;
                            if($i>2):
                                echo $b;
                        ?>
                        <br>
                        <?php endif;?>
                        <?php endforeach;?>
                    </td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    <?php endif;?>
    

</div>
<?php

foreach($arreglo as $a){
    foreach($a as $b){
        echo $b;
    }
}
    
?>
