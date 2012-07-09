<?php
/*-----------------------------------------------------------------------------
Autor: Javier Barredo
Autor E-Mail: naveto@gmail.com
Fecha: Noviembre 2008
Version : 0.7
Agradecimientos: Yago Ferrer por su m�dulo de pago  que se utiliz� como base de este m�dulo.
Alberto Fern�ndez por su ayuda con los testeos y las im�genes.
Released under the GNU General Public License
-----------------------------------------------------------------------------*/

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../header.php');
include(dirname(__FILE__).'/servired.php');

if (!empty($_POST)){

	// Recoger datos de respuesta
	$total     = $_POST["Ds_Amount"];
	$pedido    = $_POST["Ds_Order"];
	$codigo    = $_POST["Ds_MerchantCode"];
	$moneda    = $_POST["Ds_Currency"];
	$respuesta = $_POST["Ds_Response"];
	$firma_remota = $_POST["Ds_Signature"];
	
	
	// Creamos objeto
	$servired = new servired();
	//Verificamos opciones
	$error_pago = Configuration::get('SERVIRED_ERROR_PAGO');
	// Contrase�a secreta
	$clave = Configuration::get('SERVIRED_CLAVE');

	// C�lculo del SHA1
	$mensaje = $total . $pedido . $codigo . $moneda . $respuesta . $clave;
	$firma_local = strtoupper(sha1($mensaje));
 		
	if ($firma_local == $firma_remota){
		// Formatear variables
		// NINO - eliminar el punto de los miles para evitar error en pago		 
		// ORIGINAL - $total  = number_format($total / 100,4);		
		$total  = number_format($total / 100,4,'.', '');
		$pedido = substr($pedido,0,8);
		$pedido = intval($pedido);
		$respuesta = intval($respuesta);
		$moneda_tienda = 1; // Euros		
		if ($respuesta < 101){				
			// Compra v�lida
			$mailvars=array();
			$servired->validateOrder($pedido, _PS_OS_PAYMENT_, $total, $servired->displayName, NULL, $mailvars, $moneda_tienda);
		}else{				
			// Compra no v�lida
			if ($error_pago=="no"){
				//se anota el pedido como no pagado
				$servired->validateOrder($pedido, _PS_OS_ERROR_, 0, $servired->displayName, 'errores:'.$respuesta);
				}
			elseif ($error_pago=="si"){
				//Se permite al cliente intentar otra vez el pago
			}
			
		}
				
	}
}
?>
