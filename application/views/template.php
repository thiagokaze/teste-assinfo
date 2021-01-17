<?php

setlocale(LC_ALL, 'pt_BR');
date_default_timezone_set('America/Sao_Paulo');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Sistema Corpo de Bombeiros do Estado do Rio de Janeiro</title>
        <meta name="description" content="Sistema Corpo de Bombeiros do Estado do Rio de Janeiro">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php print base_url(); ?>assets/css/cbmerj.css">
    </head>
    <body>
        <header>
        <div class="container">
            <div class="row">
            Sistema do Corpo de Bombeiros do Estado do Rio de Janeiro
        </div>
    </header>
       
    <div class="container">
    <?php print $contents; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
