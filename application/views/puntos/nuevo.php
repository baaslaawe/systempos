<style>
    .item-form-point{font-size: 14px;color: #6a6c6f;font-weight:bold;}
    .ml-0{margin-left:0px !important;}
    .mr-0{margin-right:0px !important;}
    #ui-datepicker-div{z-index:99; background-color:#fff;}
    .help-header{border: solid 1px lightgrey;padding: 7px;box-sizing: border-box;border-left-width: 6px;border-left-color: green;}
    .pl-0{padding-left:0px !important;} 
    .pr-0{padding-right:0px !important;}
    .mb-0{margin-bottom:0px;}
    .danger{color: #721c24;font-size: 12px;font-family: sans-serif;font-style: italic;}
    .help-form{color: gray;font-size: 11.5px;font-style: italic;}
    input[type='text']:focus, input[type='password']:focus, textarea:focus, select:focus{border: solid 1px green !important;}
    .btn-cancel:hover{background-color:#fff !important;}
    .items-container{border: solid 1px #bbb;border-radius: 5px;margin-top: 5px; margin-bottom: 15px;clear:both;padding:5px; box-sizing:border-box;}

</style>

<div class="page-header">    
    <div class="icon">
        <img alt="Puntos" class="iconimg" src="<?php echo $this->session->userdata('new_imagenes')['titulo_puntos']['original'] ?>">        
    </div>
     <h1 class="sub-title"><?php echo custom_lang("Nuevo plan de puntos", "Nuevo plan de puntos");?></h1>
</div>


<form id="form-new-points" class="col-md-9" action="<?php echo site_url('puntos/nuevo');?>" method="POST" >
    <input type="hidden"  name="id_puntos" id="id_puntos"  />
    <div class="col-md-12">
        <div class="form-group">
            <span class="danger">(*) Todos los campos son obligatorios</span>
        </div>
        <div class="form-group col-md-12 pl-0 pr-0">
            <label for="nombre">
                <span class="item-form-point">Nombre del plan</span>
            </label>
            <input type="text" class="form-control ml-0" name="nombre" id="nombre" placeholder="Ingrese nombre del plan"  required>
        </div>

        <span>Configuración de puntos</span>
        <div class="row items-container ml-0 mr-0">
            <div class="form-group col-md-6">
                <label for="valor">
                    <span class="item-form-point">Valor a comprar</span>
                </label>
                <!--<span class="glyphicon glyphicon-question-sign icon-help-config" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="right" data-content="Este es el valor de compra para obsequiar puntos. " data-trigger="hover"></span>-->
                <input type="text" class="form-control ml-0" name="valor" id="valor" placeholder="Ej (10.000)"  required>
                <span id="helpBlock" class="help-block help-form">Valor de compra para obsequiar puntos</span>
            </div>
            <div class="form-group col-md-6">
                <label for="no_puntos">
                    <span class="item-form-point">Puntos obsequiados por compra</span>
                </label>
                <!--<span class="glyphicon glyphicon-question-sign icon-help-config" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="right" data-content="Este es el total de puntos obsequiados por cada compra. (Ejemplo: 1 punto por cada $10.000 en compras) " data-trigger="hover"></span>-->
                <input type="text" class="form-control ml-0" name="no_puntos" id="no_puntos" value="1" readonly  required>
                <span id="helpBlock" class="help-block help-form">Este es el total de puntos obsequiados por cada compra. (Ej: 1 punto por cada $10.000 en compras) </span>
            </div>

              <div class="form-group col-md-6 mb-0">
                <label for="punto_redimir">
                    <span class="item-form-point">Valor por punto al momento de redimir</span>
                </label>
                <!--<span class="glyphicon glyphicon-question-sign icon-help-config" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="right" data-content="Este es valor equivalente a un punto acumulado al momento de redimir. Ejemplo(Si un cliente tiene 8 puntos y el valor por punto es 500, podrá redimir $4.000 en compras) " data-trigger="hover"></span>-->
                <input type="text" class="form-control ml-0" name="punto_redimir" id="punto_redimir" placeholder="Ej (150)"  required>
                <span id="helpBlock" class="help-block help-form">Este es valor equivalente a un punto acumulado al momento de redimir. </span>           
            </div>

            <div class="form-group col-md-6 mb-0">
                <label for="compras">
                    <span class="item-form-point">Compra minima para acumular puntos</span>
                </label>
                <input type="text" class="form-control ml-0" name="compras" id="compras" placeholder="Ej (15000)"  required>
                <span id="helpBlock" class="help-block help-form">Aplica solo para clientes nuevos </span>           
            </div>
        </div>
        
        <span>Opciones generales</span>
        <div class="row items-container ml-0 mr-0">
            <div class="form-group col-md-6 mb-0">
                <label for="impuesto">
                    <span class="item-form-point">Impuesto</span>
                </label>
                <select name="impuesto" id="impuesto" class="form-control ml-0">
                    <option value="SI">si</option>
                    <option value="NO">no</option>
                </select>
                <span id="helpBlock" class="help-block help-form">Aplicar puntos con o sin impuesto</span>
            </div>
            <div class="form-group col-md-6 mb-0">
                <label for="tiempo_caducidad">
                    <span class="item-form-point">Tiempo de caducidad</span>
                </label>
                <!--<span class="glyphicon glyphicon-question-sign icon-help-config" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="right" data-content="Este es el tiempo limite para redimir los puntos." data-trigger="hover"></span>-->
                <select name="tiempo_caducidad" id="tiempo_caducidad" class="form-control ml-0">
                    <?php for($i=1;$i<=12;$i++){ ?>
                        <option value="<?= $i; ?>"> <?= $i; ?> <?= ($i > 1)? 'meses' : 'mes' ?> </option>
                    <?php } ?>
                </select>
                <span id="helpBlock" class="help-block help-form">Este es el tiempo limite para redimir los puntos. </span>           
            </div>
            <div class="col-md-12"><hr></div>
            <div class="form-group col-md-6 mb-0 pl-0 form-item">
                <div class="pl-0">
                    <div class="checkbox pl-0">
                        <label>
                            <input type="checkbox" id="agregar_clientes" name="agregar_clientes" checked="checked">
                            Agregar todos los clientes a este plan de puntos
                        </label>
                    </div>
                </div>      
            </div>

             <div class="form-group col-md-6 mb-0 pl-0 form-item">
                <div class="pl-0">
                    <div class="checkbox pl-0">
                        <label>
                            <input type="checkbox" id="correo_bienvenida" name="correo_bienvenida" checked="checked">
                            Enviar correo de bienvenida a clientes nuevos
                        </label>
                    </div>
                </div>      
            </div>
        </div>

        <div class="form-group">
            <a href="<?= site_url('puntos')?>" class="btn btn-default"><?php echo custom_lang('sima_cancel', "Cancelar");?></a>
            <button class="btn btn-success mr-0" type="submit" id="btn-new-points"><?php echo custom_lang("sima_submit", "Guardar"); ?></button>
        </div>
    </div>
</form>



<script>
    $(document).ready(function(){
        $("#nombre").focus();   
    })

    $("#btn-new-points").click(function (e) {  
            $("#btn-new-points").prop('disabled',true);
            //verificar que no existe el codigo
            /*$.ajax({
                url: "<?php echo site_url("bancos/validateNombreyCodigo"); ?>",
                type: "POST",
                dataType: "json",
                data: {campo:'numero_cuenta', id: $("#numero_cuenta").val()},
                success: function (data) {
                    if (data != 0) {
                        document.getElementById('mensagge_warning').style.display = 'inline-block';                        
                        $("#numero_cuenta").focus();
                        $("#guardar").prop('disabled',false);
                    } else {
                        document.getElementById('mensagge_warning').style.display = 'none';
                        $("#validate").submit();  //Para enviar el formulario                                    
                    }
                }
            });  */  
            $("#form-new-points").submit();
        });

</script>