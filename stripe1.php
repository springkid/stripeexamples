<!DOCTYPE html>
<html lang="en">
<?php require_once('./config.php'); ?>    
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Stripe examples</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

            
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      
    <!-- Stripe -->
    <script src="https://checkout.stripe.com/checkout.js"></script>
      
  </head>
  <body>
      

    <!-- simple checkout form example -->  
    <div class="container">
        <h2>Simple form example</h2>
        <p>Purchase a sample of <i>Tyrannosaurus Rex</i> found in an ember-enclosed mosquitoe.</p>
    </div>
      
    <form action="/charge" method="POST">
      <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_3reGcjMM7uhF5E4Ksio02ME8"
        data-image="/img/documentation/checkout/marketplace.png"
        data-name="Demo Site"
        data-description="2 widgets"
        data-amount="2000">
      </script>
    </form>      

    <!-- custom button example -->  
    <div class="container">
        <h2>Custom button example</h2>
        <p>Purchase a sample of <i>Tyrannosaurus Rex</i> found in an ember-enclosed mosquitoe.</p>
    </div>
      
    <button id="customButton">Purchase</button>
    <script>
      var handler = StripeCheckout.configure({
        key: 'pk_test_3reGcjMM7uhF5E4Ksio02ME8',
        image: '/img/documentation/checkout/marketplace.png',
        token: function(token) {
          // Use the token to create the charge with a server-side script.
          // You can access the token ID with `token.id`
        }
      });

      $('#customButton').on('click', function(e) {
        // Open Checkout with further options
        handler.open({
          name: 'Demo Site',
          description: '2 widgets',
          amount: 2000
        });
        e.preventDefault();
      });

      // Close Checkout on page navigation
      $(window).on('popstate', function() {
        handler.close();
      });
    </script>
      
  </body>
</html>