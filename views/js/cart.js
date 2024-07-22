window.addEventListener("load", function() {
    $('body').on('click', '.js-webo-clear-cart',  () => {
        $.ajax({
            type: "POST",
            url: webo_delete_cart_link,
            success: (resp) => {
                if (typeof resp.success !== 'undefined' && resp.success === true) {
                    prestashop.emit('stUpdateCart', {
                        reason: {
                            linkAction: 'clear-cart',
                        }
                    });
                }
            }
        })
    })
});