{*
 * Classic theme doesn't use this subtemplate, feel free to do whatever you need here.
 * This template is generated at each ajax calls.
 * See ProductListingFrontController::getAjaxProductSearchVariables()
 *}

<div id="js-product-list-bottom"></div>
<div class="block-category-button">
    {if $category.description}
	<div id="category-description" class="text-muted">{$category.description nofilter}</div>
    {/if}
    {if $manufacturer.description}
    <div id="manufacturer-description">{$manufacturer.description nofilter}</div>
    {/if}
</div>
