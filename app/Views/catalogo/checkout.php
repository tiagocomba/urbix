<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<script src="https://www.paypal.com/sdk/js?client-id=AZQBCaHQ4lHq6OI-mMRoxPv8nHioysdo_lnwAWuXxHgD31c5-3Nvw-fs0_WTL_-ghOvt8WeoipePRltE"></script>
</head>
<body>

<div id="paypal-button-conteiner"></div>
    



<script>
    paypal.Buttons({
        style: {
            shape: 'pill',
            color: 'blue',
            layout: 'vertical',
            label: 'pay',   
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '50'
                    }
                }]
            });
        },
        onCancel : function(data){
            alert('Pago cancelado');
        },
        onApprove: function(data, actions) {
           actions.order.capture().then(function(details) {
               window.location.href = "<?=base_url('completado')?>";
            });
        }
    }).render('#paypal-button-conteiner');
</script>

</body>
</html>