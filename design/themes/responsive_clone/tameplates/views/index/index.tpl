{include file="common/header.tpl"}
<div class="custom-homepage">
    <h1>Welcome to My Custom Store</h1>
    {if $products}
        <div class="products-list">
            {foreach from=$products item="product"}
                {include file="views/products/components/product_item.tpl" product=$product}
            {/foreach}
        </div>
    {/if}
</div>
{include file="common/footer.tpl"}