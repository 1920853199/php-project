$(document).ready(function()
{
    /* Show notice when auto create customer. */
    $('#newCustomer').change(function()
    {
        if($(this).prop('checked')) 
        {
            $(this).parents('.input-group').find('select').hide();
            $('#customer_chosen').hide();
            $(this).parents('.input-group').find('input[type=text][id=name]').show().focus();
            $('.customerInfo').show();
        }
        else
        {
            $('#customer_chosen').show();
            $(this).parents('.input-group').find('input[type=text][id=name]').hide();
            $('.customerInfo').hide();
        }
    })
})