<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/css/ticket.css"); ?>" media="screen"/>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/css/ticket_print.css") ?>"  media="print"/>

    </head>

    <body>

        <div id="contenedor">

            <div id="print_area">

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
        <?php } else { ?>
            <!--<div id="company_resolucion"><?php echo $data['data_empresa']['data']['resolucion']; ?></div>-->

            <div id="company_nit"><?php echo $data['data_empresa']['data']['documento'].":" . $data['data_empresa']['data']['nit']; ?></div>
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

                <td style="width:45%;text-align: left;"><?php echo $data['data_empresa']['data']['titulo_venta'] .": " . $data['venta']['factura'] ?></td>

                <td style="width:55%;text-align: right;"><?php echo "Fecha:" . $data['venta']['fecha'] ?></td>				

            </tr>

        </table>			

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
        <div id="seller"><?php echo "Vendedor: " . $data['username'] ?></div>
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

            <th style="width:20%;text-align: left;"><?php echo "Ref" ?></th>

            <th style="width:20%;text-align:center;"><?php echo "Cant" ?></th>

            <th style="width:20%;text-align:right;"><?php echo "Precio" ?></th>

            <th style="width:20%;text-align:center;"><?php echo "Desc" ?></th>
					
            <th style="width:20%;text-align:right;"><?php echo "Total" ?></th>

        </tr>
		           <?php  
				   }	  
					 else{  				 
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

            /*$group_by_impuesto = array();*/
        $idProductoAnterior = "";
        $promocionDetalle = array();
        foreach ($data["detalle_venta"] as $p) {
            if($p["nombre_producto"] == 'PROPINA'){  	
                $sobrecosto = $p['descripcion_producto'];
            }
            else{
                if($p["codigo_producto"] != $idProductoAnterior)
                {
                    $idProductoAnterior = $p["codigo_producto"];
                    if($data["tipo_factura"]=='clasico'){
                         /* SERVICIOS */
                        $pv = $p['precio_venta'];
                        $desc = $p['descuento'];
                        $pvd = $pv - $desc;
                        $imp = $pvd * $p['impuesto'] / 100 * $p['unidades'];
                        $total_column = $pvd * $p['unidades'];
                        $total_items += $total_column;
                        $valor_total = $pvd * $p['unidades'] + $imp ;
                        $total += $total + $valor_total;
                        $timp+=$imp;
                    }else{
                             /* POS */
                        $pv = $p['precio_venta'];
                        $desc = $p['descuento'];
                        $pvd = $pv - $desc;
                        $imp = $pvd * $p['impuesto'] / 100 * $p['unidades'];
                        $total_column = $pvd * $p['unidades'];
                        $total_items += $total_column;
                        $valor_total = $pvd * $p['unidades'] + $imp ;
                        $total += $total + $valor_total;
                        $timp+=$imp;
                    }

                    if(trim(strtoupper($p["des_impuesto"])) == 'IAC' || trim(strtoupper($p["des_impuesto"])) == 'IMPOCONSUMO' || trim(strtoupper($p["des_impuesto"])) == 'IMPUESTO AL CONSUMO')
                    {
                        $pv_propina = $p['precio_venta'];
                        $desc_propina = $p['descuento'];
                        $pvd_propina = $pv_propina - $desc_propina;
                        $total_column_propina = $pvd_propina * $p['unidades'];
                        $total_items_propina += $total_column_propina;

                    }
                    if($i == 1){  				 
                    ?>	 
                    <tr><td colspan="5"><?php echo $p["nombre_producto"] ?></td></tr>

                    <tr>

                        <td><?php echo $p["codigo_producto"]; ?></td>

                        <td style='text-align:center;'><?php echo $p["unidades"]; ?></td>

                        <td style='text-align:right;'><?php echo number_format($p["precio_venta"]); ?></td>

                        <td style='text-align:center;'><?php echo number_format($p['descuento']); ?></td>

                        <td style='text-align:right;' colspan="2"><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($valor_total); ?></td>

                    </tr>
                    <?php
                    } 
                    else{  				 
                    ?>	
                    <tr><td colspan="5"><?php echo $p["nombre_producto"] ?></td></tr>

                    <tr>

                        <td><?php echo $p["codigo_producto"]; ?></td>

                        <td style='text-align:center;'><?php echo $p["unidades"]; ?></td>

                        <td style='text-align:right;' colspan="2"><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($p["precio_venta"]); ?></td>

                        <td style='text-align:right;'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($valor_total); ?></td>

                    </tr>			 	
                    <?php
                    }


                }else
                {
                    if($i == 1){
                        array_push($promocionDetalle, array(
                            $p["nombre_producto"],
                            $p["codigo_producto"],
                            $p["unidades"],
                            number_format($p["precio_venta"]),
                            number_format($p['descuento']),
                            0
                        ));
                    }else
                    {
                        array_push($promocionDetalle, array(
                            $p["nombre_producto"],
                            $p["codigo_producto"],
                            $p["unidades"],
                            $data['data_empresa']['data']['simbolo'].' '.number_format($p["precio_venta"]),
                            0
                        ));
                    }
                    
                }
            }
        }
        ?>
        <tr>
            <td style='text-align:center;' colspan="4">Promociones (<?php echo $promocion ?>)</td>
        </tr>
        <?php
        foreach($promocionDetalle as $pD)
        {
            if($i == 1)
            {
            ?>
            <tr><td colspan="5"><?php echo $pD[0] ?></td></tr>
            <tr>
                <td><?php echo $pD[1]; ?></td>
                <td style='text-align:center;'><?php echo $pD[2]; ?></td>
                <td style='text-align:right;'><?php echo $pD[3]; ?></td>
                <td style='text-align:center;'><?php echo $pD[4]; ?></td>
                <td style='text-align:right;' colspan="2"><?php echo $pD[5] ?></td>
            </tr>
            <?php
            }else
            {
            ?>
            <tr><td colspan="5"><?php echo $pD[0] ?></td></tr>
            <tr>
                <td><?php echo $pD[1]; ?></td>
                <td style='text-align:center;'><?php echo $pD[2]; ?></td>
                <td style='text-align:right;' colspan="2"><?php echo $pD[3] ?></td>
                <td style='text-align:right;'><?php echo $pD[4]; ?></td>
            </tr>    
            <?php    
            }
        }
        ?>
        <tr><td colspan="4"></td></tr>
        <tr>

            <td colspan="4" style='text-align:right;'><?php echo "Valor items" ?></td>

            <?php  $total = $total_items + $timp; ?>

            <td  style='text-align:right'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($total_items) ?></td>

        </tr>

  <?php  foreach ($data["venta_impuestos"] as $p) {  
  if($p->imp != ''){ 
  ?>
        <tr>

            <td colspan="4" style='text-align:right;'><?php echo $p->imp ?></td>

            <td  style='text-align:right'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($p->impuestos) ?></td>

        </tr>

  <?php  
     }else{
  ?>
        <tr>

            <td colspan="4" style='text-align:right;'>IVA</td>

            <td  style='text-align:right'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($p->impuestos) ?></td>

        </tr>

  <?php	 
	 }
   
   }
   ?>
         <?php 
			if($sobrecosto > 0){
			 $propina_final = ($total_items_propina * $sobrecosto) / 100;
			}
        ?>
		
        <?php 
			if($sobrecosto > 0 && $propina_final > 0){
        ?>

        <tr>

            <td colspan="4" style='text-align:right;'><?php echo "Propina" ?></td>

            <td  style='text-align:right'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($propina_final);  ?></td>

        </tr>
        <?php 
			}
        ?>

<?php  

foreach ($data["detalle_pago_multiples"] as $p) { ?>


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

                        <td  style='text-align:right'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($p->total_cambio) ?>
                        </td>

                    </tr>    
	
<?php } ?>

        <tr>

            <td colspan="4" style='text-align:right;'><?php echo "Total venta" ?></td>

            <td  style='text-align:right'><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($total + $propina_final); ?></td>

        </tr>
        <tr>

            <td colspan="5">&nbsp;</td>

        </tr>

        <?php 

          /* $efe   = 0;

           $otros = 0;

           foreach ($data["formas_pago"] as $f):

               if ($f["forma_pago"] == 1)

                   $efe += $f["valor_entregado"];

               else 

                   $otros += $f["valor_entregado"];

        ?>

        <tr>

            <td colspan="4"><?php echo $f["descripcion"]; ?></td>

            <td  style='text-align:right'><?php echo number_format($f['valor_entregado']); ?></td>

        </tr>

        <?php endforeach; ?>

        <?php if ($efe > 0) { 

           $cambio = ($total - $otros - $efe) * -1;

        ?>

           <tr>

                <td colspan="4"><?php echo "Cambio" ?></td>

                <td  style='text-align:right'><?php echo number_format($cambio); ?></td>

            </tr> 

        <?php } */?>

        

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
    <?php if($data['publicidad_vendty'] == 1)
                        {
                            ?>
                            <div align="center">Software POS Cloud: Vendty.com</div>
                            <?php
                        }?>
    <br/>



</div>

            </div>

        </div>

    </body>

</html>

<script type="text/javascript">

    window.print();

</script>