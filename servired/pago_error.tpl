{capture name=path}{l s='Pago no completado'}{/capture}
{include file=$tpl_dir./breadcrumb.tpl}
<h2>{l s='Pago no completado'}</h2>

<table width="100%" border="0">
	<tr><td><img src="{$this_path}modules/servired/pago_error.gif" width="301" height="197" alt="Pago pago no completado" longdesc="Pago no completado" /></td>
    <td>{l s='Lo sentimos. Su pago no se ha completado. Puede intentarlo de nuevo o escoger otro medio de pago. Recuerde que puede usar tarjetas adheridas al sistema de pago seguro de Visa, denominado "Verified by Visa", o de MasterCard, denominado "MasterCard SecureCode".'}</td></tr>
</table>
<ul class="footer_links">
	<li><a href="{$base_dir_ssl}my-account.php"><img src="{$img_dir}icon/my-account.gif" alt="" class="icon" /></a><a href="{$base_dir_ssl}my-account.php">{l s='Volver a su cuenta'}</a></li>
	<li><a href="{$base_dir_ssl}order.php?step=3" title="{l s='Pagos'}"><img src="{$img_dir}icon/cart.gif" alt="{l s='Pagos'}" class="icon" /></a><a href="{$base_dir_ssl}order.php?step=3" title="{l s='Pagos'}">{l s='Volver a elegir medio de pago'}</a></li>
	<li><a href="{$base_dir}"><img src="{$img_dir}icon/home.gif" alt="" class="icon" /></a><a href="{$base_dir}">{l s='Inicio'}</a></li>
</ul>