<!DOCTYPE html>
<html lang="fr_FR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MonÉgliseCeev.net</title>

    <meta name="author" description="Micaël Lanoix">
    <meta name="description" content="">

</head>
<body>

    <div>
        <h1> Paiement </h1>
    </div>
    <div>
        <!-- Formulaire CB -->
        <form action="paiement.php" class="ui form" id="payment_form" method="post">
            <div class="form-row">
                <label for="card-element">
                    Carte bancaire
                </label>
                <div id="card-element">
                    <!-- Stripe va ajouter un formulaire de carte bancaire ici -->
                </div>
                <div id="card-errors" role="alert"></div>
            </div>

            <div class="form-row">
                <label>
                    <span>Montant</span>
                    <input type="text" size="6" name="montant">
                </label>
            </div>
            <button type="submit"> Donner un don </button>
        </form>
    </div>

    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script>
        <!-- Clé publique de Stripe -->
        var stripe = Stripe('pk_test_GzU8mEckQvhu2PZuARoSXYLU00DnBkEDDl');
        var elements = stripe.elements();

        var style = {
            base: {
                fontSize: '16px',
                color:"#32325d",
            }
        };

        var card = elements.create('card', {style:style});
        card.mount('#card-element');

        card.addEventListener('change',function (event) {
            var displayError = document.getElementById('card-errors');
            if(event.error) {
                displayError.textContent = event.error.message;
            }else{
                displayError.textContent = '';
            }
        });
        <!-- Récuperation du token -->
        var form = document.getElementById('payment_form');
        form.addEventListener('submit',function(event) {
            event.preventDefault();
            stripe.createToken(card).then(function (result) {
                if (result.error){
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                }else{
                    stripeTokenHandler(result.token);
                }
            });
        });
        <!-- Envoie du token -->
        function stripeTokenHandler(token) {
            var form = document.getElementById('payment_form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type','hidden');
            hiddenInput.setAttribute('name','stripeToken');
            hiddenInput.setAttribute('value',token.id);
            form.appendChild(hiddenInput);
            form.submit();
        }
    </script>

<footer></footer>
</body>



</html>


