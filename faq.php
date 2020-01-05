<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preguntas Frecuentes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Bitter|Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/stylehome.css">



</head>

<body>

    <?php include 'php/header.php'; ?>


    <div class="jumbotron header-faq">
        <div class="row container col-md-12 h-100 justify-content-center m-0">

            <h2 class="text-white my-auto titulos-importantes">
                <strong>
                    PREGUNTAS FRECUENTES
                </strong>
            </h2>

        </div>
    </div>

    <div class="container mb-4">



        <div class="row card-faq">

            <div class="col">

                <div id="acordion" role="tablist" aria-multiselectable="true">

                    <div class="card">
                        <div class="card-header" role="tab" id="heading1">
                            <h5 class="mb-0 subtitulos">
                                <a href="#collapse1" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                    aria-controls="collapse1">
                                    ¿Cómo me puedo enterar de las nuevas ofertas?
                                </a>
                            </h5>
                        </div>
                        <!--fin div card-header -->

                        <div id="collapse1" class="collapse  texto-parrafo" role="tabpanel" aria-labelledby="heading1">
                            <div class="card-block">
                                A través de la pagina web o visitándonos en la tienda.
                            </div>

                        </div>
                    </div>
                    <!--fin div card -->

                    <div class="card">
                        <div class="card-header" role="tab" id="heading2">
                            <h5 class="mb-0 subtitulos">
                                <a href="#collapse2" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                    aria-controls="collapse2">
                                    ¿Cómo puedo financiar mis compras?
                                </a>
                            </h5>
                        </div>
                        <!--fin div card-header -->

                        <div id="collapse2" class="collapse texto-parrafo " role="tabpanel" aria-labelledby="heading2">
                            <div class="card-block">
                                Con el objetivo de adecuarnos a las necesidades de cada cliente, tenemos diferentes
                                planes de financiación. Las condiciones de cada financiación varían dependiendo de los
                                términos en los que se tramita.
                            </div>

                        </div>
                    </div>
                    <!--fin div card -->

                    <div class="card">
                        <div class="card-header" role="tab" id="heading3">
                            <h5 class="mb-0 subtitulos">
                                <a href="#collapse3" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                    aria-controls="collapse3">
                                    ¿Qué formas de pago puedo elegir?
                                </a>
                            </h5>
                        </div>
                        <!--fin div card-header -->

                        <div id="collapse3" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading3">
                            <div class="card-block">
                                En efectivo, con tarjeta o con financiación.
                            </div>

                        </div>
                    </div>
                    <!--fin div card -->

                    <div class="card">
                        <div class="card-header" role="tab" id="heading4">
                            <h5 class="mb-0 subtitulos">
                                <a href="#collapse4" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                    aria-controls="collapse4">
                                    ¿Puedo ser medido para determinar la talla correcta de cuadro para mí?
                                </a>
                            </h5>
                        </div>
                        <!--fin div card-header -->

                        <div id="collapse4" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading4">
                            <div class="card-block">
                                Si. Medimos tu altura, así como la distancia de la entrepierna hasta el suelo. De esta
                                manera somos capaces de calcular y determinar que talla de cuadro es la mejor para ti,
                                dependiendo del modelo seleccionado.
                            </div>

                        </div>
                    </div>
                    <!--fin div card -->

                    <div class="card">
                        <div class="card-header" role="tab" id="heading5">
                            <h5 class="mb-0 subtitulos">
                                <a href="#collapse5" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                    aria-controls="collapse5">
                                    ¿Puedo probar las bicicletas en la tienda?
                                </a>
                            </h5>
                        </div>
                        <!--fin div card-header -->

                        <div id="collapse5" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading5">
                            <div class="card-block">
                                Si. Disponemos de un espacio en frente de la tienda donde podrás probarla
                                tranquilamente.
                            </div>

                        </div>
                    </div>
                    <!--fin div card -->

                    <div class="card">
                        <div class="card-header" role="tab" id="heading6">
                            <h5 class="mb-0 subtitulos">
                                <a href="#collapse6" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                    aria-controls="collapse6">
                                    ¿El uso de casco es obligatorio?
                                </a>
                            </h5>
                        </div>
                        <!--fin div card-header -->

                        <div id="collapse6" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading6">
                            <div class="card-block">
                                La Ley de Tránsito en su Artículo 80 señala que: “Todo conductor de motocicletas,
                                motonetas, bicimotos y su acompañante deberán usar casco protector reglamentario. El uso
                                de casco protector, en el caso de las bicicletas, será exigible sólo en las zonas
                                urbanas”.
                            </div>

                        </div>
                    </div>
                    <!--fin div card -->

                    <div class="card">
                        <div class="card-header" role="tab" id="heading7">
                            <h5 class="mb-0 subtitulos">
                                <a href="#collapse7" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                    aria-controls="collapse7">
                                    ¿En las calles que son paseos peatonales se podrá andar en bicicleta?
                                </a>
                            </h5>
                        </div>
                        <!--fin div card-header -->

                        <div id="collapse7" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading7">
                            <div class="card-block">
                                No. Los paseos peatonales son de uso exclusivo de los peatones, por lo tanto, en caso de
                                circular por uno de ellos debes descender de la bicicleta y transitar junto a ella.
                            </div>

                        </div>
                    </div>
                    <!--fin div card -->

                    <div class="card">
                        <div class="card-header" role="tab" id="heading8">
                            <h5 class="mb-0 subtitulos">
                                <a href="#collapse8" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                    aria-controls="collapse8">
                                    ¿Qué hago cuando descubro una fisura o algún problema con mi bici?
                                </a>
                            </h5>
                        </div>
                        <!--fin div card-header -->

                        <div id="collapse8" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading8">
                            <div class="card-block">
                                Ven a la tienda con la bicicleta y te tramitamos la garantía, en caso de seguir sujeto
                                al periodo de la misma, siempre y cuando nos sea por una caída o mal uso. Si es un fallo
                                que podamos arreglar, trataremos de solucionarlo de inmediato.
                            </div>

                        </div>
                    </div>
                    <!--fin div card -->

                    <div class="card">
                        <div class="card-header" role="tab" id="heading9">
                            <h5 class="mb-0 subtitulos">
                                <a href="#collapse9" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                                    aria-controls="collapse9">
                                    ¿Qué garantías ofrece NOE?
                                </a>
                            </h5>
                        </div>
                        <!--fin div card-header -->

                        <div id="collapse9" class="collapse texto-parrafo" role="tabpanel" aria-labelledby="heading9">
                            <div class="card-block">
                                Las garantías que ofrecemos en NOE van determinadas por nuestros proveedores y marcas
                                con las que trabajamos. A nivel de taller, si algo que hemos arreglado falla por un
                                error nuestro y vienes en un plazo lógico te lo solucionamos sin ningún coste.
                            </div>

                        </div>
                    </div>
                    <!--fin div card -->




                </div>

            </div>
            <!--fin div col -->

        </div>
        <!--fin div row -->

    </div>
    <!--fin div container -->

    <?php include 'php/footer.php'; ?>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
