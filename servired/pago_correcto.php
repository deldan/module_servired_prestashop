<?php


include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../header.php');
include(dirname(__FILE__).'/servired.php');
$smarty->assign(array('this_path' => __PS_BASE_URI__));
$smarty->display(_PS_MODULE_DIR_.'servired/pago_correcto.tpl');
include(dirname(__FILE__).'/../../footer.php');


      $id_cart = $cart->id;
      //var_dump($cart);
      //list($name, $paymentMethod) = explode('_', Tools::getValue('payment'));
      $name="tarjeta";
      $moneda_tienda = 1; // Euros
      //$currency = new Currency(intval($cookie->id_currency));
      //$cart = new Cart($id_cart);
      $amountPaid = floatval(number_format($cart->getOrderTotal(true, 3), 2, '.', ''));
      $servired = new servired();
      
      //var_dump($currency->id);
      //echo $servired->name;
      	$servired->validateOrder($id_cart, 'tarjeta', $amountPaid, $servired->displayName, NULL, array(), $currency->id);
      	
      	
     	/*$servired->validateOrder(
        $id_cart,
        $this->getOrderState($name),
        $amountPaid,
        $paymentMethod,
        $this->l('Order auto-generate'),
        array(),
        $currency->id
      );*/
      





?>
