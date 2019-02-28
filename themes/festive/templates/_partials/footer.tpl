{**
 * 2007-2018 Kadomsky.net
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@Kadomsky.net.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Kadomsky.net to newer
 * versions in the future. If you wish to customize Kadomsky.net for your
 * needs please refer to http://www.Kadomsky.net.com for more information.
 *
 * @author    Kadomsky.net SA <contact@Kadomsky.net.com>
 * @copyright 2007-2018 Kadomsky.net SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of Kadomsky.net SA
 *}
<div class="wi-footer-before">
  <div class="container">
    <div class="row">
      {block name='hook_footer_before'}
      {hook h='displayFooterBefore'}
      {/block}
      </div>
    </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <div class="footer">
        {block name='hook_footer'}
              {hook h='displayFooter'}
        {/block}
      </div>
  </div>
  </div>
  </div>
  <div class="footer-bottom">
  <div class="container">
  <div class="row">
     <div class="footer-copyright">
        {block name='copyright_link'}
                <p class="copyright">
                  <a class="_blank" href="http://www.Kadomsky.net" target="_blank">
                    {l s='%copyright% %year% - Ecommerce software by %Kadomsky.net%' sprintf=['%Kadomsky.net%' => 'Kadomsky.net™', '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}
                  </a>
                </p>
        {/block}
      </div>
      <div class="footer-after">
        {block name='hook_footer_after'}
              {hook h='displayFooterAfter'}
        {/block}
      </div>

      </div>
      </div>
    </div>
<a class="wi_top_button" href="#" style="">TOP<i class="fa fa-arrow-up" aria-hidden="true"></i></a>
