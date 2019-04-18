<?php
ini_set('display_errors', 'On'); // сообщения с ошибками будут показываться
error_reporting(E_ALL); // E_ALL - отображаем ВСЕ ошибки
// https://sign85.ru/module/blockoneclick/ajax?action=OneClick&pID=199
class BlockoneclickajaxModuleFrontController extends ModuleFrontController {
	public $product = false;
	public $qty = 0;
	public $errors = [];
/*
	public function init() {
		parent::init();
	}
*/
	public function initContent() {
		parent::initContent();
		if (!$action = Tools::getValue('action')) die('bed method');
		$metod = 'ajaxProcess'.$action;
		if (!method_exists($this, $metod)) die('not method');
		$this->{$metod}();
		die();
	}

	public function ajaxProcessOneClick() {
		if (!$id_product = (int)Tools::getValue('pID')) die('no poduct');
		if ($this->product = new Product($id_product, false, $this->module->lang_id)) {
			if (!$this->qty = (int)Tools::getValue('qty')) $this->qty = 1;
			$cover = Image::getCover($id_product);
		} else die('no poduct '.$id_product);
		$email = Tools::safeOutput(Tools::getValue('from',
			((isset($this->context->cookie) && isset($this->context->cookie->email) && Validate::isEmail($this->context->cookie->email)) ? $this->context->cookie->email : '')));
		$this->context->smarty->assign([
			'eMailTo' => Configuration::get('PS_SHOP_EMAIL'),
			'product' => $this->product,
			'qty' => $this->qty,
			'cover' => $cover,
			'request_uri' => "/contact-us",
			'email' => $email,
			'phone' => '',
			'modulepath' => $this->module->modulepath
		]);
		echo $this->context->smarty->fetch($this->module->modulepath.'/views/templates/front/ajax.tpl');
		die();
	}

	public function ajaxProcessSubmitOneClick() {
		$out = $this->OneClickpostProcess();
		die(Tools::jsonEncode($out));
	}
	public function OneClickpostProcess() {
//		die(Tools::jsonEncode($_POST));
		$message = nl2br(strip_tags(trim(Tools::getValue('OneClickmessage')))); // Html entities is not usefull, iscleanHtml check there is no bad html tags.
		$from = trim(Tools::getValue('OneClickfrom'));
		$id_contact = (int)Tools::getValue('OneClickid_contact');
		$id_product = (int)Tools::getValue('OneClickid_product');
		$phone = trim(Tools::getValue('OneClickphone'));
		$attr = trim(Tools::getValue('OneClickattr'));
		$attrText = trim(Tools::getValue('OneClickattrText'));
		$qty = (int)Tools::getValue('OneClickqty');
		$customer = $this->context->customer;

		if (!count($this->errors)) {
			$var_list = [
				'{order_name}' => '-',
				'{message}' => $message,
				'{email}' => $from,
				'{phone}' => $phone,
				'{attr}' => $attr,
				'{attrText}' => $attrText,
				'{product_name}' => ''
			];

			if ($product = new Product($id_product, false, $this->module->lang_id)) {
				$cover = Image::getCover($id_product);
				$ilink = new Link();
				$im_link = $ilink->getImageLink($product->link_rewrite, $cover['id_image'], 'home_default');

				$var_list['{img_link}'] = 'https:/'.__PS_BASE_URI__.$im_link;
				$var_list['{qty}'] = $qty;
				$var_list['{product_name}'] = $product->name;
				$manufacturer_name = Manufacturer::getNameById((int)$product->id_manufacturer);
				$var_list['{manufacturer_name}'] = $manufacturer_name;
				$var_list['{supplier_name}'] = $product->supplier_name;
				$var_list['{reference}'] = $product->reference;
				$var_list['{supplier_reference}'] = $product->supplier_reference;
				$var_list['{product_price}'] = (int)$product->price;
			}
			$mailList = [Configuration::get('PS_SHOP_EMAIL'), $from, 'badelins@gmail.com'];
//			die(Tools::jsonEncode($_POST));
			foreach ($mailList as $mail)
				Mail::Send($this->module->lang_id, 'contact_form_oneclick', Mail::l('НОВЫЙ ЗАКАЗ В ОДИН КЛИК'), $var_list, $mail, null, null, null, NULL);
			return ['message' => 'Сообщение отправлено. Заказ принят в работу. Менеджер свяжется с Вами в течении ближайшего времени!. Предлагаем продолжить покупки и сэкономить на доставке...'];
		}
	}
}
