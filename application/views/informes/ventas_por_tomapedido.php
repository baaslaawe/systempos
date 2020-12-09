<style>
    .dataTables_length{max-width:170px;}
    .ui-datepicker{z-index:99 !important; background-color: #fff;}
    .ui-datepicker-next, .ui-datepicker-prev{display:none;}
    #fecha_inicio,#fecha_fin{max-width:130px;}
    .fields{background-color: #e9e9e9;padding: 10px;box-sizing: border-box;padding-top: 11px;}
    .fields label{font-weight:bold; margin-left:2rem;}
</style>

<div class="page-header">    
    <div class="icon">
        <img alt="Informes" class="iconimg" src="<?php echo $this->session->userdata('new_imagenes')['titulo_informes']['original'] ?>">        
    </div>
     <h1 class="sub-title"><?php echo custom_lang("Informes", "Informes");?></h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="col-md-2 col-md-offset-10 text-right">
            <a data-tooltip="Descargar Excel" id="ex">                        
                <img alt="Descargar" class="btnimagenes" src="<?php echo $this->session->userdata('new_imagenes')['exportar_excel_verde']['original'] ?>"> 
            </a> 
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="block">         
            <div class="head blue">
                <h2><?php echo custom_lang('ventas_por_tomapedido', "Informe de Ventas por toma pedido");?></h2>
            </div>
                <div class="data-fluid">
                    <table class="table aTable" cellpadding="0" cellspacing="0" width="100%" id="informesTable">
                        <thead>
                            <tr>
                                <th width="10%"><?php echo custom_lang('sima_sales', "Fecha");?></th>
                                <th width="10%"><?php echo custom_lang('sima_sales', "Almacen");?></th>
                                <th width="5%"><?php echo custom_lang('sima_sales_taxes', "No Factura");?></th>
                                <th width="5%"><?php echo custom_lang('sima_sales_taxes', "Zona");?></th>
                                <th width="5%"><?php echo custom_lang('sima_sales_taxes', "Mesa");?></th>
                                <th width="10%"><?php echo custom_lang('sima_sales_taxes', "Producto");?></th>
                                <th width="15%"><?php echo custom_lang('sima_sales_taxes', "Adiciones");?></th>
                                <th width="15%"><?php echo custom_lang('sima_sales_taxes', "Modificaciones");?></th>
                                <th width="10%"><?php echo custom_lang('sima_sales_taxes', "Cantidad");?></th>
                                <th width="10%"><?php echo custom_lang('sima_sales_taxes', "Total venta");?></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                         <tfoot>
                            <tr>
                                <th width="10%"><?php echo custom_lang('sima_sales', "Fecha");?></th>
                                <th width="10%"><?php echo custom_lang('sima_sales', "Almacen");?></th>
                                <th width="5%"><?php echo custom_lang('sima_sales_taxes', "No Factura");?></th>
                                <th width="5%"><?php echo custom_lang('sima_sales_taxes', "Zona");?></th>
                                <th width="5%"><?php echo custom_lang('sima_sales_taxes', "Mesa");?></th>
                                <th width="10%"><?php echo custom_lang('sima_sales_taxes', "Producto");?></th>
                                <th width="15%"><?php echo custom_lang('sima_sales_taxes', "Adiciones");?></th>
                                <th width="15%"><?php echo custom_lang('sima_sales_taxes', "Modificaciones");?></th>
                                <th width="10%"><?php echo custom_lang('sima_sales_taxes', "Cantidad");?></th>
                                <th width="10%"><?php echo custom_lang('sima_sales_taxes', "Total venta");?></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        oTable = $('#informesTable').dataTable( {
            "bProcessing": true,
            "sAjaxSource": "<?php echo site_url('informes/get_ajax_data_ventas_por_tomapedido');?>",
            "sPaginationType": "full_numbers",
            "iDisplayLength": 5, "aLengthMenu": [5,10,25,50,100],
            "aaSorting": [[ 0, "desc" ]]
        });
        
        $("<div id='informesTable_length1' data-tooltip='Selecciona fecha de inicio' class='dataTables_length'><label><input type='text' placeholder='Fecha inicial' id='fecha_inicio'/></label></div>").insertAfter('#informesTable_length');
        $("<div id='informesTable_length2' data-tooltip='Selecciona fecha final' class='dataTables_length'><label><input type='text' placeholder='Fecha final' id='fecha_fin'/></label></div>").insertAfter('#informesTable_length1');           
        $("<div id='informesTable_length3' class='dataTables_length'><label><select id='almacen'><?php echo $options_almacen;?></select></label></div>").insertAfter('#informesTable_length2');
        $("<div id='informesTable_length4' class='dataTables_length'><label><select id='zona'><?php echo $options_zonas;?></select></label></div>").insertAfter('#informesTable_length3');
        $("<div id='informesTable_length5' class='dataTables_length'><label><select id='mesa'><?php echo $options_mesas;?></select></label></div>").insertAfter('#informesTable_length4');
        $("<div id='informesTable_length6' class='dataTables_length'><label><button class='btn btn-success' name='filtrar' id='filtrar' value='Filtrar'><small class='ico-filter icon-white'></small>Filtrar</button></label></div>").insertAfter('#informesTable_length5');

        $( "#fecha_inicio" ).datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,           
            currentText: "Today:",
            maxDate: "0",           
            yearRange: "-2:+0",
            onClose: function( selectedDate ) {
                $( "#fecha_fin" ).datepicker( "option", "minDate", selectedDate );
            }
        });
       
        $( "#fecha_fin" ).datepicker({            
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,           
            currentText: "Today:",
            maxDate: "0",           
            yearRange: "-2:+0",
            onClose: function( selectedDate ) {
                $( "#fecha_inicio" ).datepicker( "option", "maxDate", selectedDate );
            }
        });
        
        $("#ex").click(function(){
            var fecha_inicio = $("#fecha_inicio").val();
            var fecha_fin = $("#fecha_fin").val();
            var almacen = $("#almacen").val();
            var zona = $("#zona").val();
            var mesa = $("#mesa").val();
            var url = '<?php echo site_url("informes/ex_ventas_por_tomapedido");?>'+'?fecha_inicio='+fecha_inicio+'&fecha_fin='+fecha_fin+'&almacen='+almacen+'&zona='+zona+'&mesa='+mesa;
            $(this).attr('href', url);    
            
        });
        
        $("#filtrar").click(function(){
         filtrar_ventas();   
        });
     
        function filtrar_ventas(){
            var fecha_inicio = $("#fecha_inicio").val();
            var fecha_fin = $("#fecha_fin").val();
            var almacen = $("#almacen").val();
            var zona = $("#zona").val();
            var mesa = $("#mesa").val();
            var url = '<?php echo site_url("informes/get_ajax_data_ventas_por_tomapedido");?>'+'?fecha_inicio='+fecha_inicio+'&fecha_fin='+fecha_fin+'&almacen='+almacen+'&zona='+zona+'&mesa='+mesa;
            
            $.get(url,function(data){
                var dates = oTable.fnReloadAjax(url);
            })
        }

        filtrar_ventas(); 

    });
</script>