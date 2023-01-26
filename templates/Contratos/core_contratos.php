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
$mostrarI=0;
$mostrarF=0;
if (isset($_GET['FechaIni'])) {
    $identificadorInicio = $_GET['FechaIni'];
} else {
    $mostrarI=1;
}
if (isset($_GET['FechaFin'])) {
    $identificadorFin = $_GET['FechaFin'];
} else {
    $mostrarF=1;
}
$valido=0;
$arreglo=[];
?>

<?php if(!empty($identificadorInicio) && $mostrarI==0):
    echo "Fecha de Inicio: ",date("d/m/Y", strtotime($identificadorInicio));
?>
<br>
<?php endif;?>
<?php if(!empty($identificadorFin) && $mostrarF==0):
    echo "Fecha de Fin: ",date("d/m/Y", strtotime($identificadorFin));
?>
<br>
<?php endif;?>

<div class="contratos index content">
    
    <?php if(empty($identificadorInicio) && empty($identificadorFin)){  
        foreach ($contratos as $contrato){ 
            $newDateCompare = date("d/m/Y", strtotime($contrato->fecha));
            
            $value=$contrato->idCliente;
            $nombreContrato=($contrato->nombre).' - '.($newDateCompare);
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
        
        }
    }elseif(!empty($identificadorInicio) && empty($identificadorFin)){
        $firstcompare=new DateTime(date("Y-m-d",strtotime('-1 day',strtotime($identificadorInicio))));
        
        foreach ($contratos as $contrato){ 
            
            $newDateCompare = date("d/m/Y", strtotime($contrato->fecha));
            $secndCompare=new DateTime (date("Y-m-d", strtotime($contrato->fecha)));
                            
            $diferencia=$secndCompare->diff($firstcompare);
                            
            if (($diferencia->invert === 1)) {
                $value=$contrato->idCliente;
                $nombreContrato=($contrato->nombre).' - '.($newDateCompare);
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
            }
        } 
    }elseif(empty($identificadorInicio) && !empty($identificadorFin)){
        $firstcompare=new DateTime(date("Y-m-d",strtotime('+1 day',strtotime($identificadorFin))));
        
        foreach ($contratos as $contrato){ 
            
            $newDateCompare = date("d/m/Y", strtotime($contrato->fecha));
            $secndCompare=new DateTime (date("Y-m-d", strtotime($contrato->fecha)));
                            
            $diferencia=$firstcompare->diff($secndCompare);
                            
            if (($diferencia->invert === 1)) {
                $value=$contrato->idCliente;
                $nombreContrato=($contrato->nombre).' - '.($newDateCompare);
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
            }
        } 
    }elseif(!empty($identificadorInicio) && !empty($identificadorFin)){
        $firstcompare=new DateTime(date("Y-m-d",strtotime('-1 day',strtotime($identificadorInicio))));
        $firstcompareend=new DateTime(date("Y-m-d",strtotime('+1 day',strtotime($identificadorFin))));
        
        $validar=$firstcompare->diff($firstcompareend);

        if($validar->invert === 1){
            $valido=1;
        }else{
            foreach ($contratos as $contrato){ 
                
                $newDateCompare = date("d/m/Y", strtotime($contrato->fecha));
                $secndCompare=new DateTime (date("Y-m-d", strtotime($contrato->fecha)));
                
                $diferenciaIni=$secndCompare->diff($firstcompare);
                $diferenciaFin=$firstcompareend->diff($secndCompare);
                                
                if (($diferenciaIni->invert === 1) && ($diferenciaFin->invert === 1)) {
                    $value=$contrato->idCliente;
                    $nombreContrato=($contrato->nombre).' - '.($newDateCompare);
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
                }
            } 
        }
    }?>

    <?php if($valido==1){
        echo 'La fecha de inicio debe ser previa a la fecha de fin';
    }else{
    ?>
        <h3><?= __('Contratos') ?></h3>
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
                        <td><?= $this->Html->link(__($a[0]), ['controller' => 'Cliente','action'=>'view',$a[0]]) ?></td>
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

    <?php }?>
</div>

