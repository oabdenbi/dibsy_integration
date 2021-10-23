{if $addons.dibsy_integration.status == "D"}
    <div class="alert alert-block">
        <p>{__("dibsy_integration.addon_is_disabled_notice")}</p>
    </div>
{else}
    {$suffix = $payment_id|default:0}
    <div class="control-group">
        <label class="control-label" for="order_prefix{$suffix}">{__("order_prefix")}:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][order_prefix]" id="order_prefix{$suffix}" size="36" value="{$processor_params.order_prefix}" >
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="order_prefix{$suffix}">{__("authorization_url")}:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][authorization_url]" id="authorization_url{$suffix}" size="36" value="{$processor_params.authorization_url}" >
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="secret_key{$suffix}">{__("secret_key")}:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][secret_key]" id="secret_key{$suffix}" size="36" value="{$processor_params.secret_key}" >
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="public_key{$suffix}">{__("public_key")}:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][public_key]" id="public_key{$suffix}" size="36" value="{$processor_params.public_key}" >
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="merchant_id{$suffix}">{__("merchant_id")}:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][merchant_id]" id="merchant_id{$suffix}" size="36" value="{$processor_params.merchant_id}" >
        </div>
    </div>


    <script>
        (function(_, $) {
            $(document).on('change', '#elm_in_context{$suffix}', function() {
                $('#lbl_merchant_id{$suffix}').toggleClass('cm-required', $(this).is(':checked'));
            });
        })(Tygh, Tygh.$);
    </script>
{/if}
