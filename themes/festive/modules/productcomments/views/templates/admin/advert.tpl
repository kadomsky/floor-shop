{if isset(Module::getInstanceByName('reviewsreply')->active)}
    {if Module::getInstanceByName('reviewsreply')->active == true}
        {if Tools::getValue('action') == 'addreply'}
            <div class="alert alert-success">
                {if reviewsreply::updateoradd() == 1}
                    {l s='Reply for review added properly' mod='productcomments'}
                {/if}
            </div>
        {/if}
    {/if}
{/if}
