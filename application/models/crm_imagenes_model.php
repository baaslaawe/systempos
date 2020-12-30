<?php

// Proyecto: Sistema Facturacion
// Version: 1.0
// Programador: Leonardo Molina
// Framework: Codeigniter
// Clase: crm

class Crm_imagenes_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function imagenes(){       
        
        //imágenes para los iconos de las acciones de las tablas

        //icono imprimir Verde
        //$imprimirverdeoriginal="https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/icono_verde-18.svg";
        $imprimirverdeoriginal  = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/icono_verde-18.svg";
        //icono imprimir
        $imprimiroriginal       = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-18.svg";
        $imprimircambio         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-18.svg";
        //icono imprimir productos
        $imprimiproductosroriginal = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Cierre caja por producto.svg";
        $imprimirproductoscambio   = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/iconos vendty_Cierre caja por producto.svg";
        //icono imprimir tirilla
        $imprimirtirillaoriginal   = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Cierre caja imprimir.svg";
        $imprimirtirillacambio     = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/iconos vendty_Cierre caja imprimir.svg";
        //icono editar
        $editaroriginal            = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-23.svg";
        $editarcambio              = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-23.svg";

        //Jeisson Rodriguez
        //icono activar
        $activaroiginal            = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-17.svg";
        $activarcambio             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-17.svg";

        //icono de tienda
        $activartiendaoriginal     ="https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-14.svg";
        $activartiendacambio       ="https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-14.svg";

         //icono eliminar
        $eliminaroriginal          ="https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/icono_verde-22.svg";
        $eliminarcambio            ="https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-22.svg";
        //icono envio por correo
        $envioxcorreooriginal      ="https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-19.svg";
        $envioxcorreocambio        ="https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-19.svg";
        //icono guia de  despacho
        $guiadespachooriginal      ="https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-20.svg";
        $guiadespachocambio        ="https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-20.svg";
        //icono codigo de barra
        $codigobarraoriginal       ="https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-29.svg";
        $codigobarracambio         ="https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-29.svg";
        //icono conciliar
        $conciliaroriginal         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/conciliar-gris.svg";
        $conciliarcambio           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/conciliar-blanco.svg";

        //icono codigo de barra gris-verde barra venta
        $codigobarraventasoriginal  = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-29.svg";
        $codigobarraventascambio    = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/icono_verde-29.svg";
        //icono buscador
        $buscadororiginal           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Buscar.svg";
        $buscadorcambio             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Buscar.svg";
        $buscadorverdeoriginal      = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Buscar.svg";
        //icono navegador
        $navegadororiginal          = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Navegador.svg";
        $navegadorcambio            = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Navegador.svg";
        //icono devolver
        $devolveroriginal           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-21.svg";
        $devolvercambio             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-21.svg";
        //icono devolucion Verde
        $devolververdeoriginal      = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/icono_verde-21.svg";
        //icono regresar Verde
        $regresarverdeoriginal      = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/icono_verde-21.svg";
        //icono notificaciones/timbrar
        $notificacionesoriginal     = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/novedades.svg";
        $notificacionescambio       = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/novedades.svg";


        //icono descargar
        $descargaroriginal          = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-04.svg";
        $descargarcambio            = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-04.svg";
        //icono cierre caja
        $cierrecajaoriginal         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Cerrar caja.svg";
        $cierrecajacambio           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/iconos vendty_Cerrar caja.svg";
        //icono cierre caja Verde
        $cierrecajaverdeoriginal    = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Cerrar caja.svg";
        //icono descargar
        $verpagosoriginal           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-26.svg";
        $verpagoscambio             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-26.svg";
        //icono facturar
        $facturaroriginal           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-24.svg";
        $facturarcambio             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-24.svg";
        //icono cliente
        $clienteblancooriginal      = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/iconos vendty_Clientes-41.svg";
        $clienteblancocambio        = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Clientes-41.svg";
        //icono cliente_verde
        $clienteverdeoriginal       = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Clientes-41.svg";
        //icono cliente_rapido_verde 
        $clienterapidoverdeoriginal = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Clientes-41.svg";
        //icono proveedor rapido Verde
        $proveedorrapidoverdeoriginal = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos_vendty_Proveedores.svg";
        //icono mas
        $masoriginal                    = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Nuevo.svg";
        $mascambio                      = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/iconos vendty_Nuevo.svg";   
        //icono mas Blanco
        $masblancooriginal              = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/iconos vendty_Nuevo.svg";
        //icono mas Verde
        $masverdeoriginal               = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Nuevo.svg";
        $masverdecambio                 = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Nuevo.svg";        
           
        //icono exportar
        $exportaroriginal               = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-25.svg";
        $exportarcambio                 = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-25.svg";
        //icono exportar excel
        $exportarexcelverdeoriginal     = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Exportar excel.svg";
        $importarexcelverdeoriginal     = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Importar excel.svg";
        //icono cerrar auditoria
        $cerrarauditoriaoriginal        = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-31.svg";
        $cerrarauditoriacambio          = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-31.svg";
        //icono importar
        $importaroriginal               = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-15.svg";
        $importarcambio                 = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-15.svg";
         //icono giftcards
        $giftcardsoriginal              = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Gift Cards.svg";
        $giftcardscambio                = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/iconos vendty_Gift Cards.svg";
         //icono giftcards pagas
        $giftcardspagaoriginal          = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Giftcard pagadas.svg";
        $giftcardspagacambio            = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/iconos vendty_Giftcard pagadas.svg";
         //icono giftcards canjeadas
        $giftcardscanjeadaoriginal      = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Giftcard Canjeadas.svg";
        $giftcardscanjeadacambio        = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/iconos vendty_Giftcard Canjeadas.svg";
         //icono giftcards activa
        $giftcardsactivaoriginal        = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Giftcard activas.svg";
        $giftcardsactivacambio          = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/iconos vendty_Giftcard activas.svg";
         //icono proveedor
        $proveedorblancooriginal        = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/iconos_vendty_Proveedores.svg";
        $proveedorblancocambio          = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos_vendty_Proveedores.svg";
         //icono ventas online anuladas
        $ventasonlineanuladasoriginal   = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Ventas anulada.svg";
         //icono ventas online Verde
        $ventasonlineverdeoriginal      = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Venta online.svg";
         //icono ventas anuladas
        $ventasanuladasoriginal         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Ventas anulada.svg";
        $ventasanuladascambio           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Ventas anulada.svg";        
         //icono gastos anulados
        $historicogastosoriginal        = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Gastos.svg";
        $gastosanuladoscambio           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Gastos.svg";        
         //icono gastos 
        $gastosanuladosoriginal         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Gastos.svg";
        $historicogastoscambio          = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Gastos.svg";        
        //icono ordenescompraafectadas
        $ordenescompraafectadasoriginal = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-27.svg";
        $ordenescompraafectadascambio   = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-27.svg";
        //icono ordenescompranoafectadas
        $ordenescompranoafectadasoriginal   = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-31.svg";
        $ordenescompranoafectadascambio     = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-31.svg";
        //icono ordenes_compra_pagadas
        $ordenescompranpagaoriginal         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-31.svg";
        $ordenescompranpagacambio           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-31.svg";
        //icono ordenes_compra_verde
        $ordenescompranverdeoriginal        = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/icono_verde-09.svg";
        

        //icono Plan separe anuladas Verde
        $plansepareanuladasoriginal         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Plan separe anulados.svg";
        //icono Plan separe Verde
        $plansepareverdeoriginal            = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Plan separe.svg";
        //icono credito pagado Verde
        $creditopagadoverdeoriginal         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Ventas a credito Pagadas.svg";
        //icono credito pendiente Verde
        $creditopendienteverdeoriginal      = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Ventas a credito pendiente.svg";
        //icono producto atributos
        $productoatributoverdeoriginal      = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Crear producto con atributos.svg";
        //icono actualizarpreciosxalmacenverdeoriginal
        $actualizarpreciosxalmacenverdeoriginal = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Actualizar precios por almacen.svg";
        //icono materialesverdeverdeoriginal
        $materialesverdeverdeoriginal       = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Materiales.svg";
        //icono ingredientesverdeoriginal
        $ingredientesverdeoriginal          = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Crear Ingredientes.svg";
         //icono buscar Verde original
        $buscarverdeoriginal                = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Buscar.svg";
         //icono buscar Verde cambio
        $buscarverdecambio                  = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Negro/iconos vendty_Buscar.svg";
        //icono buscar negro original
        $buscarnegrooriginal                = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Negro/iconos vendty_Buscar.svg";
         //icono buscar negro cambio
        $buscarnegrocambio                  = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Buscar.svg";
        
        
        /***iconos para el top de la pagina */
        //icono cliente Gris
        $clientegrisoriginal                = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-13.svg";
        //icono sincronizacion Verde*/
        $sincronizacionverdeoriginal        = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/icono_verde-01.svg";
        //icono ayuda Verde
        $ayudaverdeoriginal                 = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/info.svg";
        //icono ticket Verde
        //$ticketverdeoriginal="https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/icono_verde-02.svg";
        $ticketverdeoriginal                = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/correo.svg";
        //icono Salir Blanco
        $Salirblancooriginal                = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/icono_blanco-03.svg";
        //icono Primeros pasos Verde
        $primerospasosverdeoriginal         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/icono_verde-33.svg";
        //icono recomendaraunamigo Verde
        $recomendaraunamigoverdeoriginal    = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/icono_verde-34.svg";

        //icono vendedor Verde
        $vendedorverdeoriginal              = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Vendedores.svg";
        //icono vendedor Verde
        $vendedorblancooriginal             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Blanco/iconos vendty_Vendedores.svg";
        //icono promociones Verde
        $promocionesverdeoriginal           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Promociones.svg";
        
        //icono imprimir comanda
        $imprimircomandaoriginal            = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/vender/Vender_imprimir_comanda.svg";
        //icono comanda
        $comandablancasoriginal             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/vender/Vender_comanda.svg";
        //icono venderplansepare
        $venderplansepare                   = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/vender/Vender_plansepare.svg";
        //icono mesas blanca
        $mesasblancasoriginal               = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/vender/Vender_mesas_blanco.svg";
        //icono nota blanca
        $notaverdeoriginal                  = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/vender/Vender_nota_blanco.svg";
        //icono venta en espera blanco
        $ventaenesperaverdeoriginal         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/vender/Vender_factura-pendiente_blanco.svg";
        //icono propina blanco
        $propinablancooriginal              = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/vender/Vender_propina_blanco.svg";
        //icono propina blanco
        $divisioncuentablancooriginal       = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/vender/Vender_dividir-factura_blanco.svg";
        //icono eliminar blanco
        $eliminarblancooriginal             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/vender/Vender_borrar_blanco.svg";
        //icono domicilio Verde
        $domicilioverdeoriginal             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/vender/Vender_domicilio_blanco.svg";        
        //icono venta Verde
        $ventaverdeoriginal                 = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Histotico de ventas.svg";
        //icono consolidado_movimiento Verde
        $consolidadomovimientoverdeoriginal = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Consolidado de inventario.svg";
        //icono auditoriasanuladas Verde
        $auditoriasanuladasverdeoriginal    = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Auditorias anuladas.svg";
        //icono auditorias_excel Verde
        $auditoriaexcelverdeoriginal        = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Auditoria desde excel.svg";
        //icono auditorias Verde
        $auditoriaverdeoriginal             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Auditoria.svg";
        //icono ordenescompraanulada Verde
        $ordenescompraanuladasverdeoriginal = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Ordenes compra anuladas.svg";
        //icono grupo_cliente Verde
        $grupoclienteverdeoriginal          = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Grupo de clientes.svg";
        //icono configuracionverdeoriginal
        $configuracionverdeoriginal         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Configuracion.svg";
        //icono valor_punto_verde
        $valorpuntoverdeoriginal            = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Valor del punto.svg";
        //icono clienteplanpuntoverdeoriginal
        $clienteplanpuntoverdeoriginal      = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Clientes con plan de puntos .svg";
        //icono compra_puntos_verde
        $comprapuntosverdeoriginal          = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/icono_verde-09.svg";
        //icono listadoplanpuntooriginal
        $listadoplanpuntooriginal           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Listado Planes de puntos.svg";
        //icono tiendavirtualverdeoriginal
        $tiendavirtualverdeoriginal         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Verde/iconos vendty_Tienda virtual.svg";

        /**ventas */
        //icono domicilio
        $tiendavirtualverdeoriginal         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/vender/Vender_domicilio_blanco.svg";
        
        


        /*****Imágenes para los Títulos de las páginas a mostrar en los page-header*/
       
        //icono título contactos
        $titulocontactosoriginal        = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-10.svg";       
        //icono título mesas
        $titulomesaoriginal             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-18.svg";       
        //icono título impresoras
        $tituloimpresoraoriginal        = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-18.svg";
        //icono título Ventas
        $tituloventaoriginal            = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-06.svg";
        //icono título Ventas online
        $tituloventaonlineoriginal      = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Venta online.svg";
        //icono título caja
        $titulocajaoriginal             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Cerrar caja.svg";
        //icono título Plan separe
        $tituloplansepare               = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Plan separe.svg";
        //icono título devoluciones
        $titulodevoluciones             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-21.svg";
        //icono título titulopresupuesto
        $titulopresupuesto              = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Cotizacion.svg";
        //icono título titulocredito
        $titulocredito                  = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Credito.svg";
        //icono título tituloPagos
        $tituloPagos                    = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-26.svg";
        //icono título productos
        $tituloproductos                = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Productos.svg";
        //icono título ingredientes
        $tituloingredientes             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Crear Ingredientes.svg";
        //icono título titulocategorias
        $titulocategorias               = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Categorias.svg";
        //icono título titulomovimiento
        $titulomovimiento               = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Movimientos inventario.svg";
        //icono título titulo_libro_precio
        $titulolibroprecio              = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Libro de precios.svg";
        //icono título tituloproduccion
        $tituloproduccion               = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Produccion.svg";
        //icono título tituloauditoria
        $tituloauditoria                = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Auditoria.svg";
        //icono título titulogiftcards
        $titulogiftcards                = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Gift Cards.svg";
        //icono título cliente
        $titulocliente                  = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Clientes-41.svg";
        //icono título titulopuntos
        $titulopuntos                   = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Puntos.svg";
        //icono título titulopuntos
        $titulopromociones              = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Promociones.svg";
        //icono título titulo_gastos
        $titulogastos                   = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Gastos.svg";
        //icono título titulo_ordenes_compras
        $tituloordenescompras           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-27.svg";
        //icono titulovendedor
        $titulovendedor                 = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Vendedores.svg";
        //icono tituloproveedores
        $tituloproveedores              = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos_vendty_Proveedores.svg";
        //icono tituloImpuestos
        $tituloimpuestos                = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Impuestos.svg";
        //icono tituloformasdepagos
        $tituloformasdepagos            = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Formas de pago.svg";
        //icono titulo_usuarios
        $titulousuarios                 = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-13.svg";
        //icono titulo_roles
        $tituloroles                    = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Roles.svg";
        //icono tituloalmacen
        $tituloalmacen                  = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-14.svg";
        //icono titulo_bodegas
        $titulobodegas                  = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/icono_gris-14.svg";
        //icono titulo_informes
        $tituloinformes                 = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Informes.svg";
        //icono tituloinformesventas
        $tituloinformesventas           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Informes-ventas.svg";
        //icono tituloinformesproductos
        $tituloinformesproductos        = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Informes-productos.svg";
        //icono tituloinformescaja
        $tituloinformescaja             = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Informes-caja.svg";
        //icono tituloinformesdevoluciones
        $tituloinformesdevoluciones     = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Informes-devoluciones.svg";
        //icono tituloinformespropina
        $tituloinformespropina          = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Informes-propinas.svg";
        //icono tituloinformesarchivoserp
        $tituloinformesarchivoserp      = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Exportar-erp.svg";
        //icono tituloinformesimpuesto
        $tituloinformesimpuesto         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Informes-impuestos.svg";
        //icono tituloinformesinventario
        $tituloinformesinventario       = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Informes-inventario.svg";
        //icono tituloinformescredito
        $tituloinformescredito          = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Informes-credito.svg";
        //icono tituloinformescomisiones
        $tituloinformescomisiones       = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Informes-comosiones.svg";
        //icono tituloinformesgastos
        $tituloinformesgastos           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Informes-gastos.svg";
        //icono tituloinformesutilidad
        $tituloinformesutilidad         = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Informes-gastos.svg";
        //icono titulotiendaviertual
        $titulotiendaviertual           = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Gris/iconos vendty_Tienda virtual.svg";

    


        //IMAGENES mesas gris restaurant
        //$mesasgris = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/mesa-gris.svg";
        $mesasgris = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/mesas_mesa_a_gris.svg";
        //IMAGENES mesas verde restaurant
        //$mesasverde = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/mesa-verde.svg";
        $mesasverde = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/mesas_mesa_a_verde.svg";
        //IMAGENES RESTAURANT
        $image_btn_cero = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Teclado 0.svg";
        $image_btn_cero_presionado = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Oprimido_Teclado 0.svg";

        $image_btn_uno = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Teclado 1.svg";
        $image_btn_uno_presionado = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Oprimido_Teclado 1.svg";

        $image_btn_dos= "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Teclado 2.svg";
        $image_btn_dos_presionado = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Oprimido_Teclado 2.svg";

        $image_btn_tres = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Teclado 3.svg";
        $image_btn_tres_presionado = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Oprimido_Teclado 3.svg";

        $image_btn_cuatro = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Teclado 4.svg";
        $image_btn_cuatro_presionado = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Oprimido_Teclado 4.svg";

        $image_btn_cinco = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Teclado 5.svg";
        $image_btn_cinco_presionado = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Oprimido_Teclado 5.svg";

        $image_btn_seis = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Teclado 6.svg";
        $image_btn_seis_presionado = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Oprimido_Teclado 6.svg";

        $image_btn_siete = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Teclado 7.svg";
        $image_btn_siete_presionado = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Oprimido_Teclado 7.svg";

        $image_btn_ocho = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Teclado 8.svg";
        $image_btn_ocho_presionado = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Oprimido_Teclado 8.svg";

        $image_btn_nueve = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Teclado 9.svg";
        $image_btn_nueve_presionado = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Oprimido_Teclado 9.svg";

        $image_btn_borrar = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Teclado borrar.svg";
        $image_btn_borrar_presionado = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Oprimido_Teclado borrar.svg";

        $image_btn_entrar = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Teclado entrar.svg";
        $image_btn_entrar_presionado = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Oprimido_Teclado entrar.svg";

        $image_codigo_on = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Codigo on.svg";
        $image_codigo_off = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Teclado_Codigo off.svg";

        
        //backgrounds image estacion de servicio
        $image_back_uno = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/backs/back_1.jpg";
        $image_back_dos = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/backs/back_2.jpg";
        $image_back_tres = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/backs/back_3.jpg";
        $image_back_cuatro = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/backs/back_4.jpg";

        // Logo vendty restaurant
        $image_logo_rest_vendty = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/vendty-logo-teclado.svg";
        $image_circle_white_rest = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/logo-para-teclado.png";
        $image_logo_vendty_color = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/vendty-logo-blanco-fondo-transparente.svg";

        // Logo vendty restaurant
        $image_barra = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Interfaz-Mesa-Barra.svg";
        $image_mesa = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Interfaz-Mesa-Mesa.svg";

        // Btn pagar editar
        $image_btn_editar = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Interfaz Mesas y Pedidos_Editar.svg";
        $image_btn_pagar = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/Interfaz Mesas y Pedidos_Pagar.svg";

        // Btn ORDENES DE COMPRA
        $image_equis_roja = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/orden/Interfaz Mesas y Pedidos-EquisRoja.svg";
        $image_arrow_left = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/orden/Interfaz Mesas y Pedidos-ArrowLeftGreen.svg";

        $image_orden_pedido = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/orden/Interfaz Mesas y Pedidos-Pedido.svg";

        $image_cambio_mesa = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/orden/Interfaz Cambio Mesa.svg";

        $image_orden_mesa = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/orden/Interfaz Mesas y Pedidos-Mesa.svg";
        $image_orden_factura = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/orden/Interfaz Mesas y Pedidos-Factura.svg";
        $image_orden_comensales = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/orden/Interfaz Mesas y Pedidos-Comensales.svg";

        $image_orden_minus = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/orden/Interfaz Mesas y Pedidos-Minus.svg";
        $image_orden_plus = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/orden/Interfaz Mesas y Pedidos-Plus.svg";
        $image_orden_plus = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/Restaurant/orden/Interfaz Mesas y Pedidos-Plus.svg";
        $puntoslealoriginal = "https://vendty-img.s3-us-west-2.amazonaws.com/iconos/vender/puntos_leal.png";

        //arreglo de imagenes
        $imagenes['imprimir_verde']['original']=$imprimirverdeoriginal;
        $imagenes['imprimir']['original']=$imprimiroriginal;
        $imagenes['imprimir']['cambio']=$imprimircambio;
        $imagenes['imprimir_productos']['original']=$imprimiproductosroriginal;
        $imagenes['imprimir_productos']['cambio']=$imprimirproductoscambio;
        $imagenes['imprimir_tirilla']['original']=$imprimirtirillaoriginal;
        $imagenes['imprimir_tirilla']['cambio']=$imprimirtirillacambio;
        $imagenes['editar']['original']=$editaroriginal;
        $imagenes['editar']['cambio']=$editarcambio;
        
        //Jeisson Rodriguez
        $imagenes['activar']['original']=$activaroiginal;
        $imagenes['activar']['cambio']=$activarcambio;

        $imagenes['tiendaStatus']['original']=$activartiendaoriginal;
        $imagenes['tiendaStatus']['cambio']=$activartiendacambio;

        $imagenes['puntos_leal']['original']=$puntoslealoriginal;
        $imagenes['eliminar']['original']=$eliminaroriginal;
        $imagenes['eliminar']['cambio']=$eliminarcambio;
        $imagenes['conciliar']['original']=$conciliaroriginal;
        $imagenes['conciliar']['cambio']=$conciliarcambio;
        $imagenes['envioxcorreo']['original']=$envioxcorreooriginal;
        $imagenes['envioxcorreo']['cambio']=$envioxcorreocambio;
        $imagenes['guiadespacho']['original']=$guiadespachooriginal;
        $imagenes['guiadespacho']['cambio']=$guiadespachocambio;        
        $imagenes['codigobarra']['original']=$codigobarraoriginal;
        $imagenes['codigobarra']['cambio']=$codigobarracambio;
        $imagenes['buscador']['original']=$buscadororiginal;
        $imagenes['buscador']['cambio']=$buscadorcambio;
        $imagenes['buscador_verde']['original']=$buscadorverdeoriginal;
        $imagenes['codigobarraventas']['original']=$codigobarraventasoriginal;
        $imagenes['codigobarraventas']['cambio']=$codigobarraventascambio;
        $imagenes['navegador']['original']=$navegadororiginal;
        $imagenes['navegador']['cambio']=$navegadorcambio;
        $imagenes['devolver']['original']=$devolveroriginal;
        $imagenes['devolver']['cambio']=$devolvercambio;
        $imagenes['devolver_verde']['original']=$devolververdeoriginal;
        $imagenes['regresar_verde']['original']=$regresarverdeoriginal;
        $imagenes['notificaciones']['original']=$notificacionesoriginal;
        $imagenes['notificaciones']['cambio']=$notificacionescambio;
        $imagenes['descargar']['original']=$descargaroriginal;
        $imagenes['descargar']['cambio']=$descargarcambio;
        $imagenes['cierre_caja_verde']['original']=$cierrecajaverdeoriginal;
        $imagenes['cierre_caja']['original']=$cierrecajaoriginal;
        $imagenes['cierre_caja']['cambio']=$cierrecajacambio;
        $imagenes['verpagos']['original']=$verpagosoriginal;
        $imagenes['verpagos']['cambio']=$verpagoscambio;
        $imagenes['facturar']['original']=$facturaroriginal;
        $imagenes['facturar']['cambio']=$facturarcambio;
        $imagenes['cliente_blanco']['original']=$clienteblancooriginal;
        $imagenes['cliente_blanco']['cambio']=$clienteblancocambio;
        $imagenes['mas_blanco']['original']=$masblancooriginal;
        $imagenes['mas']['original']=$masoriginal;
        $imagenes['mas']['cambio']=$mascambio;
        $imagenes['mas_verde']['original']=$masverdeoriginal;
        $imagenes['mas_verde']['cambio']=$masverdecambio;
        $imagenes['exportar']['original']=$exportaroriginal;
        $imagenes['exportar']['cambio']=$exportarcambio;
        $imagenes['afectar_cerrar']['original']=$cerrarauditoriaoriginal;
        $imagenes['afectar_cerrar']['cambio']=$cerrarauditoriacambio;
        $imagenes['importar']['original']=$importaroriginal;
        $imagenes['importar']['cambio']=$importarcambio;
        $imagenes['giftcards']['original']=$giftcardsoriginal;
        $imagenes['giftcards']['cambio']=$giftcardscambio;
        $imagenes['giftcards_paga']['original']=$giftcardspagaoriginal;
        $imagenes['giftcards_paga']['cambio']=$giftcardspagacambio;
        $imagenes['giftcards_canjeada']['original']=$giftcardscanjeadaoriginal;
        $imagenes['giftcards_canjeada']['cambio']=$giftcardscanjeadacambio;
        $imagenes['giftcards_activa']['original']=$giftcardsactivaoriginal;
        $imagenes['giftcards_activa']['cambio']=$giftcardsactivacambio;
        $imagenes['proveedor_blanco']['original']=$proveedorblancooriginal;
        $imagenes['proveedor_blanco']['cambio']=$proveedorblancocambio;
        $imagenes['ventas_online_verde']['original']=$ventasonlineverdeoriginal;
        $imagenes['ventas_online_anuladas']['original']=$ventasonlineanuladasoriginal;
        $imagenes['ventas_anuladas']['original']=$ventasanuladasoriginal;
        $imagenes['ventas_anuladas']['cambio']=$ventasanuladascambio;
        $imagenes['gastos_anulados']['original']=$gastosanuladosoriginal;
        $imagenes['gastos_anulados']['cambio']=$gastosanuladoscambio;
        $imagenes['historico_gastos']['original']=$historicogastosoriginal;
        $imagenes['historico_gastos']['cambio']=$historicogastoscambio;
        $imagenes['cliente_verde']['original']=$clienteverdeoriginal;
        $imagenes['vender_comanda']['original']=$comandablancasoriginal;
        $imagenes['vender_orden_comanda']['original']=$imprimircomandaoriginal;
        $imagenes['vender_plan_separe']['original']=$venderplansepare;
        $imagenes['mesas_blanca']['original']=$mesasblancasoriginal;
        $imagenes['nota_verde']['original']=$notaverdeoriginal;
        $imagenes['venta_espera_verde']['original']=$ventaenesperaverdeoriginal;
        $imagenes['venta_propina']['original']=$propinablancooriginal;
        $imagenes['division_cuenta']['original']=$divisioncuentablancooriginal;
        $imagenes['venta_eliminar']['original']=$eliminarblancooriginal;
        $imagenes['domicilio_verde']['original']=$domicilioverdeoriginal;
        $imagenes['venta_verde']['original']=$ventaverdeoriginal;
        $imagenes['exportar_excel_verde']['original']=$exportarexcelverdeoriginal;
        $imagenes['importar_excel_verde']['original']=$importarexcelverdeoriginal;
        $imagenes['ps_anuladas_verde']['original']=$plansepareanuladasoriginal;
        $imagenes['plan_separe_verde']['original']=$plansepareverdeoriginal;
        $imagenes['credito_pagado_verde']['original']=$creditopagadoverdeoriginal;
        $imagenes['credito_pendiente_verde']['original']=$creditopendienteverdeoriginal;
        $imagenes['producto_atributos_verde']['original']=$productoatributoverdeoriginal;
        $imagenes['actualizar_preciosxalmacen']['original']=$actualizarpreciosxalmacenverdeoriginal;
        $imagenes['materiales_verde']['original']=$materialesverdeverdeoriginal;
        $imagenes['ingredientes_verde']['original']=$ingredientesverdeoriginal;
        $imagenes['consolidado_movimiento_verde']['original']=$consolidadomovimientoverdeoriginal;
        $imagenes['auditorias_anuladas']['original']=$auditoriasanuladasverdeoriginal;
        $imagenes['auditoria_excel']['original']=$auditoriaexcelverdeoriginal;
        $imagenes['auditoria_verde']['original']=$auditoriaverdeoriginal;
        $imagenes['ordenes_compra_anuladas']['original']=$ordenescompraanuladasverdeoriginal;
        $imagenes['ordenes_compra_verde']['original']=$ordenescompranverdeoriginal;
        $imagenes['ordenafectada']['original']=$ordenescompraafectadasoriginal;
        $imagenes['ordenafectada']['cambio']=$ordenescompraafectadascambio;
        $imagenes['ordenanofectada']['original']=$ordenescompranoafectadasoriginal;
        $imagenes['ordenanofectada']['cambio']=$ordenescompranoafectadascambio;
        $imagenes['ordencomprapaga']['original']=$ordenescompranpagaoriginal;
        $imagenes['ordencomprapaga']['cambio']=$ordenescompranpagacambio;
        $imagenes['grupo_cliente_verde']['original']=$grupoclienteverdeoriginal;
        $imagenes['cliente_rapido_verde']['original']=$clienterapidoverdeoriginal;
        $imagenes['proveedor_rapido_verde']['original']=$proveedorrapidoverdeoriginal;
        $imagenes['buscar_verde']['original']=$buscarverdeoriginal;
        $imagenes['buscar_verde']['cambio']=$buscarverdecambio;
        
        $imagenes['buscar_negro']['original']=$buscarnegrooriginal;
        $imagenes['buscar_negro']['cambio']=$buscarnegrocambio;


        /**cabecera */
        /*$imagenes['cliente_gris']['original']=$clientegrisoriginal;*/
        $imagenes['sincronizacion_verde']['original']=$sincronizacionverdeoriginal;
        $imagenes['ayuda_verde']['original']=$ayudaverdeoriginal;        
        $imagenes['ticket_verde']['original']=$ticketverdeoriginal;        
        $imagenes['salir_blanco']['original']=$Salirblancooriginal;
        $imagenes['primerospasos_verde']['original']=$primerospasosverdeoriginal;
        $imagenes['recomendar_verde']['original']=$recomendaraunamigoverdeoriginal;
        $imagenes['vendedor_verde']['original']=$vendedorverdeoriginal;
        $imagenes['vendedor_blanco']['original']=$vendedorblancooriginal;
        $imagenes['promociones_verde']['original']=$promocionesverdeoriginal;
        $imagenes['configuracion_verde']['original']=$configuracionverdeoriginal;
        $imagenes['valor_punto_verde']['original']=$valorpuntoverdeoriginal;
        $imagenes['cliente_plan_punto']['original']=$clienteplanpuntoverdeoriginal;
        $imagenes['compra_puntos_verde']['original']=$comprapuntosverdeoriginal;
        $imagenes['listado_plan_punto_verde']['original']=$listadoplanpuntooriginal;
        $imagenes['tienda_virtual_verde']['original']=$tiendavirtualverdeoriginal;

        $imagenes['titulo_impresora']['original']=$tituloimpresoraoriginal;
        $imagenes['titulo_contactos']['original']=$titulocontactosoriginal;
        $imagenes['titulo_mesas']['original']=$titulomesaoriginal;
        $imagenes['titulo_venta']['original']=$tituloventaoriginal;
        $imagenes['titulo_venta_online']['original']=$tituloventaonlineoriginal;
        $imagenes['titulo_caja']['original']=$titulocajaoriginal;
        $imagenes['titulo_plan_separe']['original']=$tituloplansepare;
        $imagenes['titulo_devoluciones']['original']=$titulodevoluciones;
        $imagenes['titulo_presupuesto']['original']=$titulopresupuesto;
        $imagenes['titulo_credito']['original']=$titulocredito;
        $imagenes['titulo_pagos']['original']=$tituloPagos;
        $imagenes['titulo_productos']['original']=$tituloproductos;
        $imagenes['titulo_ingredientes']['original']=$tituloingredientes;
        $imagenes['titulo_categorias']['original']=$titulocategorias;
        $imagenes['titulo_movimientos']['original']=$titulomovimiento;
        $imagenes['titulo_libro_precio']['original']=$titulolibroprecio;
        $imagenes['titulo_produccion']['original']=$tituloproduccion;
        $imagenes['titulo_auditoria']['original']=$tituloauditoria;
        $imagenes['titulo_giftcards']['original']=$titulogiftcards;
        $imagenes['titulo_cliente']['original']=$titulocliente;
        $imagenes['titulo_puntos']['original']=$titulopuntos;
        $imagenes['titulo_promociones']['original']=$titulopromociones;
        $imagenes['titulo_gastos']['original']=$titulogastos;
        $imagenes['titulo_ordenes_compras']['original']=$tituloordenescompras;
        $imagenes['titulo_vendedor']['original']=$titulovendedor;
        $imagenes['titulo_proveedores']['original']=$tituloproveedores;
        $imagenes['titulo_impuestos']['original']=$tituloimpuestos;
        $imagenes['titulo_formasdepagos']['original']=$tituloformasdepagos;
        $imagenes['titulo_usuarios']['original']=$titulousuarios;
        $imagenes['titulo_roles']['original']=$tituloroles;
        $imagenes['titulo_almacen']['original']=$tituloalmacen;
        $imagenes['titulo_bodegas']['original']=$titulobodegas;        
        $imagenes['titulo_informes']['original']=$tituloinformes;
        $imagenes['titulo_informes_ventas']['original']=$tituloinformesventas;
        $imagenes['titulo_informes_productos']['original']=$tituloinformesproductos;
        $imagenes['titulo_informes_caja']['original']=$tituloinformescaja;
        $imagenes['titulo_informes_devoluciones']['original']=$tituloinformesdevoluciones;
        $imagenes['titulo_informes_propina']['original']=$tituloinformespropina;
        $imagenes['titulo_informes_archivo_erp']['original']=$tituloinformesarchivoserp;
        $imagenes['titulo_informes_impuesto']['original']=$tituloinformesimpuesto;
        $imagenes['titulo_informes_inventario']['original']=$tituloinformesinventario;
        $imagenes['titulo_informes_credito']['original']=$tituloinformescredito;
        $imagenes['titulo_informes_comisiones']['original']=$tituloinformescomisiones;
        $imagenes['titulo_informes_gastos']['original']=$tituloinformesgastos;
        $imagenes['titulo_informes_utilidad']['original']=$tituloinformesutilidad;
        $imagenes['titulo_tienda_virtual']['original']=$titulotiendaviertual;

        /*IMAGENES RESTAURANT*/
        $imagenes['mesas-verde']['original']=$mesasverde;
        $imagenes['mesas-gris']['original']=$mesasgris;
        $imagenes['btn_cero']['original']=$image_btn_cero;
        $imagenes['btn_cero']['cambio']=$image_btn_cero_presionado;

        $imagenes['btn_uno']['original']=$image_btn_uno;
        $imagenes['btn_uno']['cambio']=$image_btn_uno_presionado;

        $imagenes['btn_dos']['original']=$image_btn_dos;
        $imagenes['btn_dos']['cambio']=$image_btn_dos_presionado;

        $imagenes['btn_tres']['original']=$image_btn_tres;
        $imagenes['btn_tres']['cambio']=$image_btn_tres_presionado;

        $imagenes['btn_cuatro']['original']=$image_btn_cuatro;
        $imagenes['btn_cuatro']['cambio']=$image_btn_cuatro_presionado;

        $imagenes['btn_cinco']['original']=$image_btn_cinco;
        $imagenes['btn_cinco']['cambio']=$image_btn_cinco_presionado;

        $imagenes['btn_seis']['original']=$image_btn_seis;
        $imagenes['btn_seis']['cambio']=$image_btn_seis_presionado;

        $imagenes['btn_siete']['original']=$image_btn_siete;
        $imagenes['btn_siete']['cambio']=$image_btn_siete_presionado;

        $imagenes['btn_ocho']['original']=$image_btn_ocho;
        $imagenes['btn_ocho']['cambio']=$image_btn_ocho_presionado;

        $imagenes['btn_nueve']['original']=$image_btn_nueve;
        $imagenes['btn_nueve']['cambio']=$image_btn_nueve_presionado;

        $imagenes['btn_borrar']['original']=$image_btn_borrar;
        $imagenes['btn_borrar']['cambio']=$image_btn_borrar_presionado;

        $imagenes['btn_entrar']['original']=$image_btn_entrar;
        $imagenes['btn_entrar']['cambio']=$image_btn_entrar_presionado;

        $imagenes['btn_codigo_on']['original']=$image_codigo_on;
        $imagenes['btn_codigo_off']['original']=$image_codigo_off;

  

        /// backs restaurant
        $imagenes['back_uno']['original']=$image_back_uno;
        $imagenes['back_dos']['original']=$image_back_dos;
        $imagenes['back_tres']['original']=$image_back_tres;
        $imagenes['back_cuatro']['original']=$image_back_cuatro;

        //Logo vendty restaurant
        $imagenes['logo_rest_vendty']['original']=$image_logo_rest_vendty;
        $imagenes['circle_white_rest']['original']=$image_circle_white_rest;

        $imagenes['logo_vendty_color']['original']=$image_logo_vendty_color;
        $imagenes['rest_barra']['original']=$image_barra;
        $imagenes['rest_mesa']['original']=$image_mesa;

        $imagenes['btn_editar_mesa']['original']=$image_btn_editar;
        $imagenes['btn_pagar_mesa']['original']=$image_btn_pagar;

        // ORDENES
        $imagenes['equis_roja']['original']=$image_equis_roja;
        $imagenes['arrow_left']['original']=$image_arrow_left;

        $imagenes['orden_comensales']['original']=$image_orden_comensales;
        $imagenes['orden_factura']['original']=$image_orden_factura;
        $imagenes['orden_mesa']['original']=$image_orden_mesa;
        $imagenes['orden_pedido']['original']=$image_orden_pedido;

        $imagenes['orden_mesa_minus']['original']=$image_orden_minus;
        $imagenes['orden_mesa_plus']['original']=$image_orden_plus;

        $imagenes['cambio_mesa']['original']=$image_cambio_mesa;

        //jose
        return $imagenes;
    }

}

?>