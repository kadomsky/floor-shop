<div id="OneClickfancyBlock">
<form action="{$request_uri}" method="post" class="oneClickSendMessage" name="OneClickoneClickSendMessage" enctype="multipart/form-data">

<fieldset>
<div id="leftBlockOneClick">
<h2 class="page-heading bottom-indent">Заказ в ОДИН клик</h2>
<input type="hidden" id="OneClickid_contact" class="form-control" name="OneClickid_contact" value="1">
<input type="hidden" id="OneClickaction" class="form-action" name="action" value="submitOneClick">
<label for="OneClickemail">Укажите e-mail (очень желательно)</label>
<input class="form-control grey validate" type="text" id="OneClickemail" name="OneClickfrom" data-validate="isEmail" value="{$email|escape:'html':'UTF-8'}" size="30" />

<label for="OneClickphone">Укажите Телефон <b style='color:red' id="BOCmessagePhone">(обязательно)</b></label>
<input class="form-control grey" type="text" id="OneClickphone" name="OneClickphone" value="{$phone|escape:'html':'UTF-8'}" size="30" placeholder="+7(___)___-__-__" />
<label for="OneClickqty">Укажите Количество (желательно)</label><br>
<input type="text" id="OneClickqty" name="OneClickqty" value="{$qty|intval}" size="3" style="width:30px" /> x <b id="OneClickcurrent-price-clone">{$product->price|intval}р.</b>
<input type="hidden" name="OneClickid_product" value="{$product->id|intval}">
<label for="OneClickmessage">Комментарий по связи и доставке (не обязателен)</label>
<textarea class="form-control" id="OneClickmessage" name="OneClickmessage">{if isset($message)}{$message|escape:'html':'UTF-8'|stripslashes}{/if}</textarea>
<div class="submit">
<button type="submit" name="OneClicksubmitMessage" id="OneClicksubmitMessage" class="btn btn-default btn-md">
<span>{l s='Send'}<i class="fa fa-chevron-right right"></i></span>
</button>
</div>
</div>
<div id="rightBlockOneClick">
<img itemprop="image" src="{$link->getImageLink($product->link_rewrite, $cover.id_image, 'home_default')|escape:'html':'UTF-8'}" title="{if !empty($cover.legend)}{$cover.legend|escape:'html':'UTF-8'}{else}{$product->name|escape:'html':'UTF-8'}{/if}" alt="{if !empty($cover.legend)}{$cover.legend|escape:'html':'UTF-8'}{else}{$product->name|escape:'html':'UTF-8'}{/if}"/>
<div id="OneClickproduct_variants_attributes"></div>

<h4>{$product->name|escape:'html':'UTF-8'}</h4>
</div>
</fieldset>
</form>
</div>
