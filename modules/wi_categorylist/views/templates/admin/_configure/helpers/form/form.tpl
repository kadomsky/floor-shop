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
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2018 PrestaShop SA
* @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
* International Registered Trademark & Property of PrestaShop SA
*}

{extends file="helpers/form/form.tpl"}
{block name="field"}
    {if $input.type == 'category_list'}
        <div class="row">
            <div class="col-lg-6">
                <select id="category_id" class=" fixed-width-xl" name ="category_id">
                    {$options_image}
                </select>
            </div>
        </div>
    {/if}
    {if $input.type == 'imagethumb' }
        <div class="row">
            <div class="col-lg-6">
                {if isset($fields[0]['form']['imagethumb'])}
                    <img src="{$image_baseurl}{$fields[0]['form']['imagethumb']}" class="img-thumbnail" />
                {/if}
                <input id="{$input.name}" type="file" name="{$input.name}" class="hide" />
                <div class="dummyfile input-group">
                    <span class="input-group-addon"><i class="icon-file"></i></span>
                    <input id="{$input.name}-name" type="text" class="disabled" name="filename" readonly />
                    <span class="input-group-btn">
                        <button id="selectbutton" type="button" name="submitAddAttachments1" class="btn btn-default">
                            <i class="icon-folder-open"></i> {l s='Choose thumb image' mod='ctcategorylist'}
                        </button>
                    </span>
                </div>
            </div>
        </div>
    {/if}
	{$smarty.block.parent}
{/block}