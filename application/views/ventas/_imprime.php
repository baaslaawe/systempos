<?php 
$ci = &get_instance();
$ci->load->model("opciones_model");
?>
<div id="ticket_wrapper">

    <div id="ticket_header">

        <?php if(!empty($data['data_empresa']['data']['logotipo'])) { ?>
        <?php if($data['data_empresa']['data']['nit'] != '900590001-2' && $data['data_empresa']['data']['nit'] != '6466096-9'){ ?>

            <div align="center" style="margin-top: 5px;"><img src="<?php echo base_url("uploads/{$data['data_empresa']['data']['logotipo']}"); ?>" width="150" border="0" /></div>        <?php } 
            if($data['data_empresa']['data']['nit'] == '900590001-2' || $data['data_empresa']['data']['nit'] == '6466096-9'){?>
            <div align="center" style="margin-top: 2px;"><img src="<?php echo base_url("uploads/{$data['data_empresa']['data']['logotipo']}"); ?>" width="65" border="0" /></div>
       <?php } ?>
              <?php } ?>
        <div id="company_name"><?php echo $data['data_empresa']['data']['nombre']; ?></div>
        
        <?php if($data['data_empresa']['data']['resolucion_factura_estado'] == 'si') { ?>
            <div id="company_resolucion"><?php echo $data['venta']['resolucion_factura']; ?></div>
            <div id="company_nit"><?php echo $data['data_empresa']['data']['documento'].":" . $data['venta']['nit']; ?></div>
            <div id="company_razon_social"><?php echo $data['data_almacen']['razon_social']; ?></div>
        <?php } else { ?>
            <!--<div id="company_resolucion"><?php echo $data['data_empresa']['data']['resolucion']; ?></div>-->
            <div id="company_nit"><?php echo $data['data_empresa']['data']['documento'].":" . $data['data_empresa']['data']['nit']; ?></div>
            <div id="company_razon_social"><?php echo $data['data_almacen']['razon_social']; ?></div>
        <?php } ?>

        <div id="heading"> <?php echo $data['data_empresa']["data"]['cabecera_factura'];?></div>


        <div id="company_almacen"><?php echo "Almacen:" . $data['venta']['nombre'] ?></div>

        <table id="ticket_company" align="center">

            <tr>

                <td style="width:65%;text-align: left;"><?php echo $data['venta']['direccion'] ?></td>

                <td style="width:35%;text-align: right;"><?php echo $data['venta']['telefono'] ?></td>              

            </tr>

        </table>            

        <table id="ticket_factura" align="center">

            <tr>

                <td style="width:45%;text-align: left;"><?php echo $data['data_empresa']['data']['titulo_venta']. ": " . $data['venta']['factura'] ?></td>

                <td style="width:55%;text-align: right;"><?php echo "Fecha:" . $data['venta']['fecha'] ?></td>              

            </tr>

        </table>            
<?php //var_dump($data['venta']); ?>
        <div id="customer"><?php echo "Cliente:" . ($data['venta']['nombre_comercial'] == "" ? "Mostrador" : $data['venta']["nombre_comercial"] . ' <br> ' .$data['venta']["tipo_identificacion"]. ': '. $data['venta']["nif_cif"]) ?></div>
        <?php if( strlen(trim($data['venta']['cliente_direccion'])) > 0) { ?>
            <div id="customer">Direcci&oacute;n: <?php echo $data['venta']['cliente_direccion'] ?></div>
        <?php } ?>
        <?php if( strlen(trim($data['venta']['cliente_telefono'])) > 0 || strlen(trim($data['venta']['cliente_movil'])) > 0 ) { ?>
            <div id="customer">Tel&eacute;fono:<?php echo ' '.$data['venta']['cliente_telefono'].' '.$data['venta']['cliente_movil'] ?></div>
        <?php } ?>
        <?php if( strlen(trim($data['venta']['cliente_email'])) > 0) { ?>
            <div id="customer">Email:<?php echo ' '.$data['venta']['cliente_email'] ?></div>
        <?php } ?>   
        
<?php  $username = $this->session->userdata('username');

    if($data['data_empresa']['data']['vendedor_impresion'] == '1'){ ?>
        <div id="seller"><?php echo "Vendedor: " . $data['venta']['vendedor'] ?></div>
 <?php  }   ?>          
<?php if($data['data_empresa']['data']['vendedor_impresion'] == '2'){ ?>
        <div id="seller"><?php echo "Vendedor: " . @$data['username'] ?></div>
 <?php  }   ?>          
<?php if($data['data_empresa']['data']['vendedor_impresion'] == '3'){ ?>
        <div id="seller"><?php echo "Vendedor: " . $data['venta']['vendedor'] ?></div>
        <div id="seller"><?php echo "Usuario: " . $username ?></div>        
 <?php  }   ?>          
        
        <?php  if($data['venta']['nota'] != ''){   ?>
        <div id="seller"><?php echo $data['venta']['nota'] ?></div>
        <?php  }   ?>  
    </div>

 
                     <?php  
                     
                     $i=0;
                    foreach ($data["detalle_venta"] as $p) { 
                            
                        if($p['descuento'] > 0){  $i=1;  } 
                        
                    }                    
                     ?> 
                  <?php  
                     if($i == 1){                
                 ?>  
        <table id="ticket_items">
            <tr>
                <th style="width:15%;text-align: left;"><?php echo "Ref" ?></th>
                <th style="width:15%;text-align:center;"><?php echo "Cant" ?></th>
                <th style="width:20%;text-align:right;"><?php echo "Precio" ?></th>
                <th style="width:25%;text-align:center;"><?php echo "Desc" ?></th>
                <th style="width:25%;text-align:right;"><?php echo "Total" ?></th>
            </tr>
        <?php  
        } else {                   
        ?>  
        <table id="ticket_items">
            <tr>
                <th style="width:20%;text-align: left;"><?php echo "Ref" ?></th>
                <th style="width:20%;text-align:center;"><?php echo "Cant" ?></th>
                <th style="width:20%;text-align:right;" ><?php echo "Precio" ?></th>
                <th style="width:20%;text-align:right;" colspan="2"><?php echo "Total" ?></th>
            </tr>                
        <?php  
        }             
        ?>                   
                 
                 
        <?php

        $total = 0;

        $timp  = 0;

        $subtotal = 0;

        $total_items = 0;
        
        $total_items_propina = 0;

        $sobrecosto = 0;

        $propina_final = 0;
        $basen=0;
        $ivan=0;
        $exentos=0;
        $basent=0;
        $exentosImpueston=0;
        $vimpuesto=0;

    foreach ($data["detalle_venta"] as $p) {
        $basen=0;
        $ivan=0;
        if($p["nombre_producto"] == 'PROPINA'){      
            $sobrecosto = $p['descripcion_producto'];
        } else {  
            if($data["tipo_factura"]=='clasico'){
                    /* SERVICIOS */
                $pv = $p['precio_venta'];
                $desc = $p['descuento'];
                $pvd = $pv - $desc;
                $imp = $pv * $p['impuesto'] / 100 * $p['unidades'];
                $total_column = $pvd * $p['unidades'];
                $total_items += ($total_column);
                $valor_total = $pvd * $p['unidades'] + $imp ;
                $total += $ci->opciones_model->redondear($valor_total);
                $timp+=$imp;
                $p['precio_venta'] =  $ci->opciones_model->redondear($p['precio_venta']);
            } else {
                $pv = $p['precio_venta'];
                $desc = $p['descuento'];
                $pvd = $pv - $desc;
                $imp = round((($pvd * ($p['impuesto'] / 100)) * $p['unidades']));
                $total_column = ($pvd * $p['unidades']);
                $valor_total =($pvd * $p['unidades'] + $imp);
                $total += round($valor_total);
                $vimpuesto+= round(($pvd * $p['unidades']) * ($p['impuesto'] / 100));// Cambiamos la formula para ajustar el peso                                       
                $subtotal+=round($pvd * $p['unidades']); 
                $timp=$vimpuesto;
                $total_items=$subtotal;
                $imp = $ci->opciones_model->redondear($imp);
                $p['precio_venta'] = $ci->opciones_model->redondear($p['precio_venta']);
            }

            if(trim(strtoupper($p["des_impuesto"])) == 'IAC' || trim(strtoupper($p["des_impuesto"])) == 'IMPOCONSUMO' || trim(strtoupper($p["des_impuesto"])) == 'IMPUESTO AL CONSUMO'){
                $pv_propina = $p['precio_venta'];
                $desc_propina = $p['descuento'];
                $pvd_propina = $pv_propina - $desc_propina;
                $total_column_propina = $pvd_propina * $p['unidades'];
                $total_items_propina += $total_column_propina;                  
            }

            ?>

            <?php  
            if($i == 1){                
            ?>  
            <tr><td colspan="5">
            <?php echo substr($p["nombre_producto"], 0, 28); ?>        
            </td></tr>
            <tr>
                <td><?php echo $p["codigo_producto"]; ?></td>
                <td style='text-align:center;'><?php echo $p["unidades"]; ?></td>
                <td style='text-align:right;'><?php echo number_format($p['precio_venta']); ?></td>
                <td style='text-align:center;'><?php echo number_format($p['descuento']); ?></td>
                <td style='text-align:right;' colspan="2"><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($ci->opciones_model->redondear($valor_total)); ?></td>
            </tr>
            <?php
            } else {                
            ?> 
                <tr><td colspan="5">
                    <?php echo substr($p["nombre_producto"], 0, 28); ?>   
                    </td></tr>
                <tr>
                <td><?php echo $p["codigo_producto"]; ?></td>
                <td style='text-align:center;'><?php echo $p["unidades"]; ?></td>
                <td style='text-align:right;' colspan="2"><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($p['precio_venta']); ?></td>
                <td style='text-align:right;'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($ci->opciones_model->redondear($valor_total)); ?></td>
            </tr>               
        <?php
            }
        ?> 
    <?php
        }
    }
    ?>

    <tr>
        <td colspan="4" style='text-align:right;'><?php echo "Valor sin impuesto" ?></td>
        <td  style='text-align:right'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($ci->opciones_model->redondear($total_items)) ?></td>
    </tr>

    <tr>
        <td colspan="4" style='text-align:right;'>IVA</td>
        <td  style='text-align:right'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($timp) ?></td>
    </tr>

    <?php 
        if($sobrecosto > 0){
        $propina_final = ($total_items_propina * $sobrecosto) / 100;
        }
    ?>
            
    <?php if($sobrecosto > 0 && $propina_final > 0){ ?>
        <tr>
            <td colspan="4" style='text-align:right;'><?php echo "Propina" ?></td>
            <td  style='text-align:right'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($propina_final);  ?></td>
        </tr>
    <?php } ?>

    <?php foreach ($data["detalle_pago_multiples"] as $p) { ?>

        <?php
        $formpago=str_replace("_"," ",$p->forma_pago);
        if($p->forma_pago=='efectivo'){  ?>  
            <tr>
                <td colspan="4" style='text-align:right;'><?php echo ucfirst($formpago) ?></td>
                <td  style='text-align:right'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($p->valor_entregado) ?>
                </td>
            </tr>         
        <?php } ?> 

        <?php if($p->forma_pago!='efectivo'){  ?>  
            <tr>
                <td colspan="4" style='text-align:right;'><?php echo ucfirst($formpago) ?></td>
                <td  style='text-align:right'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($p->valor_entregado) ?>
                </td>
            </tr>   
        <?php } ?>   
    <?php } ?>

    <?php  foreach ($data["detalle_pago_multiples_cambio"] as $p) { ?>
        <tr>
            <td colspan="4" style='text-align:right;'><?php echo "Cambio" ?></td>
            <td  style='text-align:right'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format( round( $p->total_cambio,-1) ) ?></td>
        </tr>    
    <?php } ?>

    <?php  //$total = $total_items + $timp; ?> 
        <tr>
            <td colspan="4" style='text-align:right;'><?php echo "Total venta" ?></td>
            <td  style='text-align:right'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format( $ci->opciones_model->redondear( $total + $propina_final) ); ?></td>
        </tr>
        <tr>
            <td colspan="5">&nbsp;</td>
        </tr>
    </table>

    <div align="center"><?php echo  $data['data_empresa']['data']['resolucion'];//nl2br($data['resolucion']); ?></div>
        <div align="center" style="padding-bottom:-10px;">
            <?php echo $data['data_empresa']["data"]['terminos_condiciones'];?>
            <br/>   
            <?php         
            //puntos --------------------------------------------------------------------------------------------------------------------------
            if($data["puntos_cliente_factura"] > 0){
            ?>
                Puntos por esta factura: <?php  echo number_format($data["puntos_cliente_factura"]); ?><br/>
                Puntos Acumulados: <?php  echo number_format($data["puntos_cliente_acumulado"]); ?>
            <?php
            }         
            //puntos --------------------------------------------------------------------------------------------------------------------------
            ?>  
        </div>
        <br/>
        <?php if($data['venta']['factura_electronica'] === '1' && $data['qr']) { ?>
        <div align="center">
            <?php
                $responseRGrafica = get_curl('request/'.$data['venta']['id_venta'], $this->session->userdata('token_api'));
                echo '<img height="50" width="50" src="'.$responseRGrafica->qr.'" />';
            ?>
        </div>
        <br />
        <?php } ?>

        <?php if($data['publicidad_vendty'] == 1) { ?>
            <div align="center">Software POS Cloud: Vendty.com</div>
        <?php }?>
        <br/>
    </div>