<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="https://static.wixstatic.com/media/a37883_362d1ccd92b44fc5ac6e8bcc44e6f4f2~mv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/a37883_362d1ccd92b44fc5ac6e8bcc44e6f4f2~mv2.png">

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <!-- SDK MercadoPago.js V2 -->
         <script src="https://sdk.mercadopago.com/js/v2"></script>

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}?=8" defer></script>
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">        
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia















        <script>
            // Agrega credenciales de SDK
     
            const mp = new MercadoPago(env('MP_PUBLIC_KEY')); {
                locale: "es-AR",
            });
            console.log('MP',mp)
            // Inicializa el checkout
            mp.checkout({
                preference: {
                id: "YOUR_PREFERENCE_ID",
                },
                render: {
                container: ".cho-container", // Indica el nombre de la clase donde se mostrará el botón de pago
                label: "Pagar", // Cambia el texto del botón de pago (opcional)
                },
            });
            </script>
        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
 
 
    </body>
</html>
