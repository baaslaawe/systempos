
<!DOCTYPE html>
<html>

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <style>

            body{

                font-family: sans-serif;

                background-color:#FFFFFF;

                font-size:9pt;

            }

            .header{

                 font-size:10pt;

            }

            #contenedor{

    margin-top: 20px;
    margin-bottom: 1px;
    margin-right: 0px;
    margin-left: 30px;

            }


            #print_area{

            border:0px;

          }

          .resolucion{
             font-size:8pt;
          }

            

        </style>

    </head>

    <body>

        <div id="contenedor" >

            <div id="print_area" >

                <div id="ticket_header" >

                  <!--<div align="center"><img src="logo_ticket.jpg" width="338" height="114" border="0" /></div>-->
                     <table style="border: inset 1px #000000; border-bottom: 0px solid red;" width=818>
                        <tr>
						
						 <td width="20%" align="right">
                                  <?php if(!empty($data['data_empresa']['data']['logotipo'])) : ?>
                                    <img width="130px" height="77px" src="<?php echo base_url("uploads/{$data['data_empresa']['data']['logotipo']}");?>" />
                                <?php endif; ?>                            
                          </td>
						
                            <td width="33%"  align="center" style=" font-size: 11px">
                               <B><?php echo strtoupper($data['data_empresa']['data']['nombre']); ?></B> <br>                                    
                                   
                                        <?php if($data['data_empresa']['data']['resolucion_factura_estado'] == 'si') { ?>
                                            <?php echo $data['data_empresa']['data']['documento'].":" . $data['data_almacen']['nit']; ?><br/>
                                            <?php echo $data['data_almacen']['resolucion_factura'];?><br/>
                                        <?php } else { ?>
                                            <?php if($data['data_empresa']['data']['sistema'] == 'Pos') { ?>
                                                    <?php echo $data['data_empresa']['data']['documento'].":" . $data['data_empresa']['data']['nit']; ?><br/>

                                                    <?php echo $data['data_empresa']['data']['resolucion'];?><br/>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php echo $data['data_empresa']['data']['direccion'] ?><br/>
									<?php if(strlen($data['data_empresa']['data']['telefono']) > 0){   ?>  
                                        <?php echo "TEL:" . $data['data_empresa']['data']['telefono'] ?> <br/>
									<?php } ?>  
									<?php if(strlen($data['data_empresa']['data']['web']) > 0){   ?>  	
										<B><?php echo "" . $data['data_empresa']['data']['web'] ?> </B><br/>
									<?php } ?>
									<?php if(strlen($data['data_empresa']['data']['email']) > 0){   ?>  		
										<B><?php echo "" . $data['data_empresa']['data']['email'] ?> </B>
                                 <?php } ?>
                            </td>

                            <td width="25%"  align="center">
                                <?php echo $data['data_empresa']["data"]['cabecera_factura'];?>  
				           </td>
                     <td width="10%"  align="center">
                       <img src="<?php echo base_url("application/views/ventas/clsCodigoBarras.php?codetype=code128&size=20&text=".$data['venta']['factura']);?>"  width="150px" height="45px"/>	
					 </td>
					 
                        <tr>  
                  </table>
                    
                    <table style="border-left: 1px inset #000000; border-right: 1px inset #000000; border-top: 1px inset #000000; border-bottom: 0px solid red;"  width=818>
                      <tr>                         
                        <td>&nbsp;&nbsp;
                         <?php echo strtoupper($data['venta']['nombre'] );?>
                        </td>
                        <td>&nbsp;&nbsp;
                         <?php echo "<b>Fecha:</b> " . $data['venta']['fecha'] ?>
                        </td>
                         <td align="right">
                          <b><?php echo strtoupper($data['data_empresa']['data']['titulo_venta']).' '. $data['venta']['factura'] ?></b>
                         </td>
                      </tr>
                   </table>
             
                   <table  width=818 style="border-left: 1px inset #000000; border-right: 1px inset #000000; border-top: 1px inset #000000; border-bottom: 0px solid red; ">
                     <tr>
                      <td width="48%"><?php echo "<B>Cliente: </B>" . strtoupper(($data['venta']['nombre_comercial'] == "" ? "Mostrador" : $data['venta']["nombre_comercial"])); ?></td>        
                      <td><?php echo "<B>C.C/NIT:</B> ".$data['venta']["nif_cif"]?></td>
                      <td><?php echo "<B>Ciudad:</B> " . $data['venta']['cliente_provincia']; ?></td>					  
                     </tr><?php /*echo "Email: ".$data['venta']["email"]*/ ?>
                     <tr>
                      <td><?php echo "<B>Direcci&oacute;n:</B> ".$data['venta']["cliente_direccion"]?></td>        
                      <td><?php echo "<B>Tel&eacute;fono: </B>".$data['venta']["cliente_telefono"]?></td>
					  <td><?php echo "<B>Celular:</B> ".$data['venta']["cliente_movil"]; ?></td>				  
                     </tr>
                    <tr>
                     <td width="48%"></td>
					  <td></td>	
					   <td></td>	        
                    </tr>
                  
                  </table>
				<?php  if($data['venta']['nota'] != ''){   ?>
                   <table  width=818 style="border-left: 1px inset #000000; border-right: 1px inset #000000; border-top: 1px inset #000000; border-bottom: 0px solid red; ">
                     <tr>
                      <td width="48%"><?php echo $data['venta']['nota']; ?></td>        
                     </tr>	        
                    </tr>
                  </table>				  
				<?php  }   ?>  
 
 					 <?php  
					 
					 $i=0;
					foreach ($data["detalle_venta"] as $p) { 
							
					    if($p['descuento'] > 0){  $i=1;  } 
						
					}					 
					 ?>	
                  <?php  
					 if($i == 1){  				 
		         ?>	 
                   <table  width=818 style="border: inset 1px #000000; border-bottom: inset 0px #000000;">

                        <th  style="border: inset 1px #000000; " align="left"><?php echo "Ref" ?></th>
                        <th  style="border: inset 1px #000000; " align="left"><?php echo "Descripción" ?></th>						
                        <th  style="border: inset 1px #000000; " align="left"><?php echo "Cantidad" ?></th>
                        <th  style="border: inset 1px #000000; " align="left"><?php echo "Precio" ?></th>
                        <th  style="border: inset 1px #000000; " align="left"><?php echo "Desc" ?></th>
                        <th  style="border: inset 1px #000000; " align="left"><?php echo "Total" ?></th>
                    </tr>
		           <?php  
				   }	  
					 else{  				 
		         ?>	 
                   <table  width=818 style="border: inset 1px #000000; border-bottom: inset 0px #000000;">

                        <th  style="border: inset 1px #000000; " align="left"><?php echo "Ref" ?></th>
                        <th  style="border: inset 1px #000000; " align="left"><?php echo "Descripción" ?></th>						
                        <th  style="border: inset 1px #000000; " align="left"><?php echo "Cantidad" ?></th>
                        <th  style="border: inset 1px #000000; " align="left"><?php echo "Precio" ?></th>
                        <th  style="border: inset 1px #000000; " align="left"><?php echo "Total" ?></th>
                    </tr>
		           <?php  
				   }			 
	            	?>	 					
					
							
                    <?php

                        $total = 0;

                        $timp  = 0;

                        $subtotal = 0;
                        $exentosImpuestont=0;

                        $total_items = 0;
                        $baset=0;

                    $group_by_impuesto = array();
                      $counter=NULL;
                      $hasta=NULL;
                     //print_r($data["detalle_venta"]);
                    foreach ($data["detalle_venta"] as $p) {
                        $basen=0;
                        $ivan=0;
                        $exentosImpueston=0;
                    $counter++;
                        if($data["tipo_factura"]=='clasico'){
                             /* SERVICIOS */
                            $pv = $p['precio_venta'];

                            $desc = $p['descuento'];

                            $pvd = $pv - ($pv * ($desc/100));

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
                            
                            if($p['impuesto'] != 0){
                                $precioUnitario=ROUND(($p['precio_venta'])+ (($p['precio_venta'])*($p['impuesto']/100)));
                            }else{
                                $precioUnitario=ROUND($p['precio_venta']);                    
                            }
                           // echo"<br>P=".$p['precio_venta'];
                         //   echo"<br>I=".$p['impuesto'];
                            //$pvd = $pv - $desc;
                            $pvd = $precioUnitario - $desc;
                            //$imp = (($pvd * ($p['impuesto'] / 100)) * $p['unidades']);
                           
                            if($p['impuesto']!=0){
                                $impn=strlen($p['impuesto']);
                                if($impn== 1){
                                    $im='1.0'.$p['impuesto'];     
                                    $basen=($pvd / $im); 
                                    $ivan=($basen*$p['impuesto']/100);                         
                                }
                                else{
                                    if($impn == 2){                                
                                        $im='1.'.$p['impuesto'];
                                        $basen=round($pvd / $im);
                                        $ivan=round($basen*$p['impuesto']/100);
                                    }
                                } 
                            }else{
                                $exentosImpueston=($pvd *  $p['unidades']);
                            } 
                                       
                            //$total_column = $pvd * $p['unidades'];
                            $total_column = round($pvd * $p['unidades']);
                            $total_items += $total_column;
                           // $valor_total = $pvd * $p['unidades'] + $imp ;
                            $valor_total = $pvd * $p['unidades'];
                           // $total += $valor_total;
                            $total = $total_items;
                            //$timp+=$imp;
                            $baset+=$basen*$p['unidades'];
                            $timp+=$ivan*$p['unidades'];
                            $exentosImpuestont+=$exentosImpueston;
                        }
                     
                       /* $group_by_impuesto_length= count($group_by_impuesto);

                        if($group_by_impuesto_length==0){
                            array_push($group_by_impuesto, array('impuesto_nombre'=>$p['impuesto_nombre'],'impuesto_valor'=>$imp) );
                        }else{
                            $impuesto_exist = false;
                            for ($i=0; $i <  $group_by_impuesto_length; $i++) { 
                                if($p['impuesto_nombre']==$group_by_impuesto[$i]['impuesto_nombre']){
                                    $impuesto_exist = true;
                                    $group_by_impuesto[$i]['impuesto_valor']=$group_by_impuesto[$i]['impuesto_valor']+$imp;
                                }
                            }
                            if(!$impuesto_exist)
                            array_push($group_by_impuesto, array('impuesto_nombre'=>$p['impuesto_nombre'],'impuesto_valor'=>$imp)  );
                        }
*/

                        ?>
                  <?php  
					 if($i == 1){  				 
		         ?>	 
                        <tr>
                            <td  style="font-size: 10px" align="left"><?php echo $p["codigo_producto"] ?></td>						
                            <td  style="font-size: 10px" align="left"><?php echo $p["nombre_producto"] ?></td>
                            <td  style="font-size: 10px" align="left"><?php echo $p["unidades"] ?></td>
                            <td  style="font-size: 10px" align="right"><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($precioUnitario); ?></td>
                            <td style="font-size: 10px"  align="right"><?php echo $p['descuento']; ?></td> 
							<td style="font-size: 9px"  align="right"><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($total_column); ?></td>   
					    </tr>
                   <?php
                    } 
					else{  				 
		         ?>							
                        <tr>
                            <td  style="font-size: 10px" align="left"><?php echo $p["codigo_producto"] ?></td>						
                            <td  style="font-size: 10px" align="left"><?php echo $p["nombre_producto"] ?></td>
                            <td  style="font-size: 10px" align="left"><?php echo $p["unidades"] ?></td>
                            <td  style="font-size: 10px" align="right"><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($precioUnitario); ?></td>
							<td style="font-size: 10px"  align="right"><?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($total_column); ?></td>   
					    </tr>						
				   <?php
                    }
                    ?>		
                   <?php
                    }
                    ?>
	                    <?php
					
					$hasta=9-$counter;
                    for($i=1;$i<=$hasta;$i++){
                     ?>
                        <tr> 
                            <td>&nbsp;</td>
                            <td></td>
                            <td></td>
                            <td></td> 
                            <td></td>   
                     </tr>    
                   <?php
                    }
                    ?>				
                  </table>
   <?php // $total = $total_items + $timp; ?>          
                   <table  width=818 height=80  style="border: inset 1px #000000; font-size: 11px">
                   <tr>
                     <td style="border-right: inset 1px #000000; width: 20%;" align="center"  valign="bottom">_______________________________<br><B>FIRMA DEL CLIENTE</B></td>	
                     <td style="font-size: 9px;  width: 50%;"><?php echo $data['data_empresa']["data"]['terminos_condiciones'];?></td>
                     <td style="border-left: inset 1px #000000; width: 12%;" align="left" >
              &nbsp;&nbsp; <b><?php echo "Valor items: " ?></b><br>
              &nbsp;&nbsp; <b><?php echo "Base IVA: " ?></b><br>
			  &nbsp;&nbsp; <b><?php echo "IVA: " ?></b><br>
              &nbsp;&nbsp; <b><?php echo "Exentos: " ?></b><br>
			  <?php   $formpago=str_replace("_"," ",$data['detalle_pago']['forma_pago']);  ?>			  
			<?php if($data['detalle_pago']['forma_pago']!='efectivo'){  ?>  
			&nbsp;&nbsp;  <b><?php echo "Forma de pago: " ?></b> <br>
		<?php } ?>
<?php if($data['detalle_pago']['forma_pago']=='efectivo'){  ?>	 
         &nbsp;&nbsp;  <b> Efectivo: </b> <br>
		 &nbsp;&nbsp;  Cambio:  <br>
			<?php } ?>	
		 &nbsp;&nbsp; 	<b>Total a Pagar: </b>
			  </td>
			   <td   align="right" >
			   <?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($total_items) ?><br>	
                <?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($baset) ?><br>	  
			   <?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($timp) ?><br>
               <?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($exentosImpuestont) ?><br>
		 <?php if($data['detalle_pago']['forma_pago']!='efectivo'){  ?>  		  
			  <?php echo ucfirst($formpago) ?><br>
	    	   <?php } ?>	
          <?php if($data['detalle_pago']['forma_pago']=='efectivo'){  ?>	
		      <?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($data['detalle_pago']['valor_entregado']) ?><br>
		      <?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($data['detalle_pago']['cambio']) ?><br>
            <?php } ?>		  					  
			  
		<?php echo $data['data_empresa']['data']['simbolo'].' '.number_format($total); ?>	  
			  
			  </td>
			  
			  </td>
                    </tr>
                </table>
 
                    <table  width=860>
                   <tr>
                     <td align="center" style="font-size:24px; font-weight:bold;">&nbsp;
					 
					<?php if($this->uri->segment(4) == 'copia'){ ?>	
                    
					  COPIA 
					<?php } ?>	  
					  
					 </td>
                   </tr>
                </table>           

            </div>

        </div>
    </body>

</html>

<script type="text/javascript">

    window.print();

</script>

