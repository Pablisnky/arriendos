<!-- No posee un controlador, archivo llamado desde RegistrosHabitaciones_C y RegistrosCasa_C -->
<p class="p_2"><?php echo $Datos[1];?> en <?php echo $Datos[2];?></p>
<table class="table_2">
    <caption class="caption_1"><?php echo $Datos[1];?> en <?php echo $Datos[2];?></caption>
    <thead>
        <th class="th_5">CÓDIGO</th>
        <th class="th_3">DEPARTAMENTO</th>
        <th class="th_2">MUNICIPIO</th>
        <th class="th_4">BARRIO</th>
        <th class="th_4">DIRECCION</th>
        <th class="th_1">PRECIO</th>
        <th class="th_1">DETALLES</th>
    </thead>   
    <tbody>     <?php
        //Se traen los datos obtenidos en la consulta 
            foreach($Datos["registros"] as $Registros) :
         ?>
            <tr class="tr_1">
                <td><?php echo $Registros->ID_Inmueble;?></td>
                <td>Norte de Santander</td>
                <td>Pamplona</td>
                <td><?php echo $Registros->barrio;?></td>
                <td><?php echo $Registros->direccion;?></td>
                <td><?php echo $Registros->precio;?></td>
                <td class="td_3"><label class="label_2" onclick="abrirDetalles(<?php echo $Registros->ID_Inmueble;?>)">Ver</label></td>
            </tr>
                <?php  
            endforeach; 
        ?>
    </tbody>
</table>    
    <?php
//     }
// else{
//     echo "<p class='p_1'>No se encontraron registros</p>";
//     echo "<img class='imagen_5' src='../images/logo_aplicacion/logo_Mira_horebi.png' alt='imagen de fondo'  onclick='mostrarMenu()'/>";
// }
?>