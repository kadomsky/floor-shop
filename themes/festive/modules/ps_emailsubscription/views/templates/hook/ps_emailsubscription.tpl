{**
 * 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
*  @author PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="block_newsletter col-lg-12 col-md-12 col-sm-12 links block links">
    <h3 class="h3 hidden-md-down">{l s='Newsletter' d='Shop.Theme.Global'}</h3>
      <div class="title h3 block_title hidden-lg-up" data-target="#block_newsletter" data-toggle="collapse">
        <span class="h3">{l s='Newsletter' d='Shop.Theme.Global'}</span>
        <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
      </div>
    <div class="col-md-7 col-xs-12 form collapse" id="block_newsletter">
      <form action="{$urls.pages.index}#footer" method="post">
        <div class="row">
          {if $conditions}
            <span class="subtitle">{$conditions}</span>
          {/if}
          <div class="col-xs-12 inputbox">
            <div class="input-wrapper">
              <input
                name="email"
                type="text"
                value="{$value}"
                placeholder="{l s='Enter Your Email' d='Shop.Theme.Global'}"
              aria-labelledby="block-newsletter-label"
              >
            </div>
              <input
              class="btn btn-primary float-xs-right hidden-xs-down"
              name="submitNewsletter"
              type="submit"
              value="{l s='Submit' d='Shop.Theme.Actions'}"
            >
            <input
              class="btn btn-primary float-xs-right hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="{l s='Submit' d='Shop.Theme.Actions'}"
            >
            
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
            {if $msg}
                <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
                  {$msg}
                </p>
              {/if}
            {if isset($id_module)}
                {hook h='displayGDPRConsent' id_module=$id_module}
              {/if}
          </div>
        </div>
      </form>
  </div>
</div>
