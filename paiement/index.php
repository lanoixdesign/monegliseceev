
<div class="box_cb">


    <div>
        <h1> Paiement Sécurisé </h1>
    </div>
    <div>
        <!-- Formulaire CB -->
        <form action="paiement/paiement.php" class="ui form " id="payment_form" method="post">
            <div class="form-row ">
                <label for="card-element">
                    Entrez un numéro de carte valide
                </label>

                <div id="card-element" class="nbrCard">
                    <!-- Stripe va ajouter un formulaire de carte bancaire ici -->
                </div>
                <div id="card-errors" role="alert"></div>
            </div>

            <div class="form-row">
                <label>
                    <span>Montant</span>
                    <input class="montant" type="text" size="" name="montant">
                </label>
            </div>
            <button class="btnCb" type="submit"> VALIDER </button>
        </form>
    </div>

    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script>
        <!-- Clé publique de Stripe -->
        var stripe = Stripe('pk_live_ZPyV2aShvhIIGRki1Zfgq9tz006PQE4ihK');
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


</div>
