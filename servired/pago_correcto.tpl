{capture name=path}{l s='Pago realizado correctamente'}{/capture}
{include file=$tpl_dir./breadcrumb.tpl}
<h2>{l s='Pago realizado correctamente'}</h2>

<table width="100%" border="0">
	<tr><td><img src="{$this_path}modules/servired/pago_correcto.gif" width="300" height="196" alt="Pago correcto" longdesc="Pago correcto" /></td>
    <td>{l s='Gracias por confiar en nosotros. Su compra se ha formalizado correctamente y en breve procesaremos su pedido.'}</td></tr>
</table>
<ul class="footer_links">
	<li><a href="{$base_dir_ssl}my-account.php"><img src="{$img_dir}icon/my-account.gif" alt="" class="icon" /></a><a href="{$base_dir_ssl}my-account.php">{l s='Volver a su cuenta'}</a></li>
	<li><a href="{$base_dir_ssl}history.php" title="{l s='Pedidos'}"><img src="{$img_dir}icon/order.gif" alt="{l s='Orders'}" class="icon" /></a><a href="{$base_dir_ssl}history.php" title="{l s='Orders'}">{l s='Historial y Detalles de sus Pedidos'}</a></li>
	<li><a href="{$base_dir}"><img src="{$img_dir}icon/home.gif" alt="" class="icon" /></a><a href="{$base_dir}">{l s='Inicio'}</a></li>
</ul>