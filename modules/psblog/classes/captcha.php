<?php
/**
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registred Trademark & Property of PrestaShop SA
*/

if (!class_exists('PsCaptcha')) {

    class PsCaptcha
    {
        protected $code;
        protected $width = 35;
        protected $height = 150;

        public function __construct()
        {
            $this->code = Tools::substr(sha1(mt_rand()), 17, 6);
        }

        public function getCode()
        {
            return $this->code;
        }

        public function showImage()
        {
            $image = imagecreatetruecolor($this->height, $this->width);

            $width = imagesx($image);
            $height = imagesy($image);

            $black = imagecolorallocate($image, 0, 0, 0);
            $white = imagecolorallocate($image, 255, 255, 255);
            $red = imagecolorallocatealpha($image, 255, 033, 0, 75);
            $green = imagecolorallocatealpha($image, 33, 255, 0, 75);
            $blue = imagecolorallocatealpha($image, 0, 22, 255, 75);

            imagefilledrectangle($image, 0, 0, $width, $height, $white);

            imagefilledellipse($image, ceil(rand(5, 145)), ceil(rand(0, 35)), 30, 30, $red);
            imagefilledellipse($image, ceil(rand(5, 145)), ceil(rand(0, 35)), 30, 30, $green);
            imagefilledellipse($image, ceil(rand(5, 145)), ceil(rand(0, 35)), 30, 30, $blue);

            imagefilledrectangle($image, 0, 0, $width, 0, $black);
            imagefilledrectangle($image, $width - 1, 0, $width - 1, $height - 1, $black);
            imagefilledrectangle($image, 0, 0, 0, $height - 1, $black);
            imagefilledrectangle($image, 0, $height - 1, $width, $height - 1, $black);

            imagestring($image, 10, (($width - (Tools::strlen($this->code) * 9)) / 2), (($height - 15) / 2), $this->code, $black); # validate module

            header('Content-type: image/jpeg');

            imagejpeg($image);

            imagedestroy($image);
        }
    }
}
