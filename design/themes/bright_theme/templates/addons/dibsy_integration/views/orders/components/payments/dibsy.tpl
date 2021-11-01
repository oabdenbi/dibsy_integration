<script src="https://cdn.dibsy.one/js/dibsy-1.0.0.js" async></script>
<script defer>
    $(document).ready(function() {
        async function start() {
            const dibsy = await Dibsy("pk_test_NxnsLUPLd3NFUiIek1WcmCFRp2q5o9LKxosg");
            const cardNumber = dibsy.createComponent('cardNumber');
            cardNumber.mount('#card-number');
            cardNumber.errorMessage('#card-number-error');

            const cardHolder = dibsy.createComponent('cardHolder');
            cardHolder.mount('#card-holder');
            cardHolder.errorMessage('#card-holder-error');

            const expiryDate = dibsy.createComponent('expiryDate');
            expiryDate.mount('#expiry-date');
            expiryDate.errorMessage('#expiry-date-error');

            const cardCode = dibsy.createComponent('cardCode');
            cardCode.mount('#card-code');
            cardCode.errorMessage('#card-code-error');

            const form = document.querySelector("#litecheckout_payments_form");
            const payBtn = document.querySelector("#litecheckout_place_order");

            payBtn.addEventListener("click", async (e) => {
                e.preventDefault();
                //Retrieve the Payment Token from your Backend
                const paymentToken = await fetch(fn_url('checkout.dibsy_create_order'), {
                    method: "POST",
                }).then((res) => res.text());
                dibsy.submit({
                    paymentToken: paymentToken,
                    onClose: () => {
                        alert("Your 3DS Authentication failed. Please try again.");
                    },
                    callback: (payment, error) => {
                        if (error) {
                            alert("Payment has failed, reason : " + error.message);
                        } else {
                            alert("Your payment has been successful.");
                            //Redirect to your success page.
                            form.submit()
                        }
                    },
                    options: {
                        disableCloseButton: true,
                    }
                });
            });
        }
        start();
    });

</script>

<form>
    <div id="card-number"></div>
    <div id="card-number-error"></div>

    <div id="card-holder"></div>
    <div id="card-holder-error"></div>

    <div id="expiry-date"></div>
    <div id="expiry-date-error"></div>

    <div id="card-code"></div>
    <div id="card-code-error"></div>

</form>