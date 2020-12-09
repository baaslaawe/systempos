<div class="page-header">    
    <div class="icon">
        <img alt="Gastos" class="iconimg" src="<?php echo $this->session->userdata('new_imagenes')['titulo_gastos']['original'] ?>">        
    </div>
     <h1 class="sub-title"><?php echo custom_lang("Gastos", "Gastos");?></h1>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="block">
            <?php 
                $message = $this->session->flashdata('message');
                $message1 = $this->session->flashdata('message1');
                $message_movimientos = $this->session->flashdata('message_movimientos');

                if(!empty($message)):?>
                    <div class="alert alert-success">
                        <?php echo $message;?>
                    </div>
                <?php endif; 

                if(!empty($message1)):?>
                    <div class="alert alert-error">
                        <?php echo $message1;?>
                    </div>
            <?php endif; ?>

            <?php if(!empty($message_movimientos)):?>
                    <div class="alert alert-success">
                        <?php echo $message_movimientos;?>
                    </div>
            <?php endif; ?>

            <?php $permisos = $this->session->userdata('permisos');

                    $is_admin = $this->session->userdata('is_admin');

                if(in_array("59", $permisos) || $is_admin == 't'):?>
                <div class="col-md-6">
                    <!--<a href="<?php echo site_url("proformas/nuevo")?>" class="btn btn-success"><?php echo custom_lang('sima_new_expenses', "Nuevo gasto");?></a>-->
                    <a href="<?php echo site_url("proformas/nuevo")?>" data-tooltip="Nuevo Gasto">                        
                        <img alt="Nuevo gasto" class="btnimagenes" src="<?php echo $this->session->userdata('new_imagenes')['mas_verde']['original'] ?>"> 
                    </a>
                </div>
                <div class="col-md-6 btnizquierda">
                    <div class="col-md-2 col-md-offset-10">
                        <a href="<?php echo site_url("proformas/anulados")?>" data-tooltip="Gastos Anulados">                            
                            <img alt="Gastos anulados" class="btnimagenes" src="<?php echo $this->session->userdata('new_imagenes')['gastos_anulados']['original'] ?>">                                                           
                        </a>
                    </div>
                </div>

            <?php endif;?>            
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="block">        
            <div class="head blue">
                <h2><?php echo custom_lang("sima_all_expenses", "Listado de Gastos")?></h2>
            </div>
                <div class="data-fluid">
                    <table class="table aTable" cellpadding="0" cellspacing="0" width="100%" id="proformasTable">
                        <thead>
                            <tr>
                                <th width="10%"><?php echo custom_lang('', "Consecutivo");?></th>
                                <th width="10%"><?php echo custom_lang('sima_description', "Descripci&oacute;n");?></th>
                                <th width="10%"><?php echo custom_lang('Proveedor', "Proveedor");?></th>
                                <th width="10%"><?php echo custom_lang('sima_date', "Fecha");?></th>
                                <th width="10%"><?php echo custom_lang('sima_value', "Valor");?> </th>
                                <th width="10%"><?php echo custom_lang('sima_amount', "Cantidad");?> </th>
                                <th width="10%"><?php echo custom_lang('sima_bank', "Banco asociado");?> </th>
                                <th width="10%"><?php echo custom_lang('sima_notes', "Almacén");?></th>
                                <th width="20%"><?php echo custom_lang('sima_action', "Acciones");?></th>
                            </tr>
                        </thead>
                        <tbody> </tbody>
                        <tfoot>
                            <tr>
                                <th width="10%"><?php echo custom_lang('', "Consecutivo");?></th>
                                <th width="10%"><?php echo custom_lang('sima_description', "Descripci&oacute;n");?></th>
                                <th width="10%"><?php echo custom_lang('Proveedor', "Proveedor");?></th>
                                <th width="10%"><?php echo custom_lang('sima_date', "Fecha");?></th>
                                <th width="10%"><?php echo custom_lang('sima_value', "Valor");?> </th>
                                <th width="10%"><?php echo custom_lang('sima_amount', "Cantidad");?> </th>
                                <th width="10%"><?php echo custom_lang('sima_bank', "Banco asociado");?> </th>
                                <th width="10%"><?php echo custom_lang('sima_notes', "Almacén");?></th>
                                <th width="20%"><?php echo custom_lang('sima_action', "Acciones");?></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>           
        </div>
    </div>

<script type="text/javascript">

    $(document).ready(function(){

        $('#proformasTable').dataTable( {

                "aaSorting": [0, "desc" ],

                "bProcessing": true,

                "bServerSide": true,
				
                "sAjaxSource": "<?php echo site_url("proformas/get_ajax_data");?>",

                "sPaginationType": "full_numbers",

                "iDisplayLength": 5, "aLengthMenu": [5,10,25,50,100],                

                "aoColumnDefs" : [

                    { "bSortable": false, "aTargets": [ 8 ], "bSearchable": false,

                        "mRender": function ( data, type, row ) {

                             var buttons = "<div class='btnacciones'>";
                             <?php if(in_array('60', $permisos) || $is_admin == 't'):?>

                                buttons += '<a href="<?php echo site_url("proformas/imprimir/");?>/'+data+'" class="button default btn-print acciones" target="_blank" data-tooltip="Comprabante de Egreso"><div class="icon"><img alt="imprimir" data-cambiar="<?php echo $this->session->userdata('new_imagenes')['imprimir']['cambio'] ?>" data-original="<?php echo $this->session->userdata('new_imagenes')['imprimir']['original'] ?>" class="iconacciones" src="<?php echo $this->session->userdata('new_imagenes')['imprimir']['original'] ?>" ></div></a>';
                             <?php endif;?>

                            <?php if(in_array('60', $permisos) || $is_admin == 't'):?>
                                if(row[6] == 'ninguno'){
                                    buttons += '<a data-tooltip="Editar" href="<?php echo site_url("proformas/editar/");?>/'+data+'" class="button default acciones"><div class="icon"><img alt="editar" data-cambiar="<?php echo $this->session->userdata('new_imagenes')['editar']['cambio'] ?>" data-original="<?php echo $this->session->userdata('new_imagenes')['editar']['original'] ?>" class="iconacciones" src="<?php echo $this->session->userdata('new_imagenes')['editar']['original'] ?>"></div></a>';
                                }else{
                                    buttons += '<a data-tooltip="No es posible editar ya que pertenece a bancos" class="button default acciones"><div class="icon"><img alt="editar" data-cambiar="<?php echo $this->session->userdata('new_imagenes')['editar']['cambio'] ?>" data-original="<?php echo $this->session->userdata('new_imagenes')['editar']['original'] ?>" class="iconacciones" src="<?php echo $this->session->userdata('new_imagenes')['editar']['original'] ?>"></div></a>';
                                }
                               
                             <?php endif;?>

                             <?php if(in_array('61', $permisos) || $is_admin == 't'):?>

                                buttons += '<a data-tooltip="Eliminar" onclick="eliminar_gasto('+data+')" class="button red acciones"><div class="icon"><img alt="Eliminar" data-cambiar="<?php echo $this->session->userdata('new_imagenes')['eliminar']['cambio'] ?>" data-original="<?php echo $this->session->userdata('new_imagenes')['eliminar']['original'] ?>" class="iconacciones" src="<?php echo $this->session->userdata('new_imagenes')['eliminar']['original'] ?>"></div></a>';

                             <?php endif;?>
                            buttons += "</div>";
                            return buttons;

                        }

                    }

                ]

        });

    });

      function eliminar_gasto(id){
        swal({
            title: '¿Estás seguro?',
            text: "Se anulará el gasto.",
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cancelar',
            confirmButtonColor: '#5ca745',
            cancelButtonColor: '#e62626',
            confirmButtonText: 'Si, anular'
            }).then((result) => {
                if(result.value) {
                    $.ajax({
                        url: "<?php echo site_url("proformas/eliminar")?>",
                        data: { id: id },
                        type: "POST",
                        success: function(data) {	
                            var response = JSON.parse(data);
                            switch(response.message){
                                case 'movimiento_conciliado':
                                    swal(
                                    'Error!',
                                    'El gasto cuenta con un movimiento conciliado',
                                    'error'
                                    );
                                 break;

                                 case 'movimiento_pre_conciliado':
                                    swal(
                                        'Error!',
                                        'El gasto cuenta con un movimiento pre-conciliado',
                                        'error'
                                    );
                                   
                                 break;

                                 case 'movimiento_eliminado':
                                    swal(
                                        'Redirigiendo!',
                                        'Gasto y movimiento asociado eliminado con éxito',
                                        'success'
                                    );
                                    setTimeout(function(){
                                        location.href = "<?php echo site_url('proformas');?>";
                                    }, 2000); 
                                 break;

                                  case 'success':
                                    swal(
                                        'Redirigiendo!',
                                        'Gasto anulado con éxito',
                                        'success'
                                    );
                                    setTimeout(function(){
                                        location.href = "<?php echo site_url('proformas');?>";
                                    }, 1600); 
                                 break;
                            }    		
                        }
                    });
                }
        })
    }
</script>