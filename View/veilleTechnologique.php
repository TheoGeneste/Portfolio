<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CLEAN MARKUP = GOOD KARMA.
      Hi source code lover,

      you're a curious person and a fast learner ;)
      Let's make something beautiful together. Contribute on Github:
      https://github.com/webslides/webslides

      Thanks,
      @jlantunez.
    -->

    <!-- SEO -->
    <title>Veille Technologique</title>
    <meta name="description" content="Beautiful HTML presentations and websites made with WebSlides.">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,700,700i%7CMaitree:200,300,400,600,700&amp;subset=latin-ext"
        rel="stylesheet">

    <!-- CSS Base -->
    <link rel="stylesheet" type='text/css' media='all' href="../CSS/webslides.css">


    <!-- Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#333333">
</head>

<body>
    <header role="banner">
        <nav id="nav" class="aligncenter">
            <ul>
                <li id="accueil"><a href="../View/index.php">Accueil</a></li>
                <li id="cv"><a href="../View/PageTheo.php">CV</a></li>
                <li id="veilleTechnologique"><a href="../View/veilleTechnologique.php">Veille Technologique</a></li>
                <li id="contact"><a href="../View/contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main role="main">
        <article>
            <section>
                <span class="background-right"
                    style="background-image: url('../CSS/ia.jpg'); 
                    background-size: cover;"></span>
                <!--.wrap = container (width: 90%) -->
                <div class="wrap" style="color : white">
                    <h1><strong>Veille Technologique</strong></h1>
                    <p><h6>Sujet : L'inteligence artificielle et l'automobile</h6></p>
                </div>
                <!-- .end .wrap -->
            </section>
            <section class="bg-white">
                <!-- .wrap = container (width: 90%) -->
                <div class="wrap">
                    <h1 class="aligncenter"><strong>Sommaire</strong></h1>
                    <table style='border-style: none'>
                        <thead>
                            <tr>
                                <th class="aligncenter" colspan="2">
                                L'intelligence artificielle
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class='aligncenter'>
                                <a href="#hisoireIA">L'histoire del'intelligence artificielle </a>
                            </td>
                        </tr>
                        <tr>
                            <td class='aligncenter'>
                                <a href="#machineLearning"> Machine Learning </a>
                            </td>
                        </tr>
                        <tr>
                            <td class='aligncenter'>
                            <a href="#deepLearning"> Deep Learning </a>
                            </td>
                        </tr>
                        <tr>
                            <td class='aligncenter'>
                            <a href="#IaAutomobile">L'intelligence artificielle et l'automobile </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- .end .wrap -->
            </section>
            <section id="hisoireIA">
                <!--.wrap = container (width: 90%) with fadein animation -->
                <div class="wrap" id="test">
                    <h2 class="aligncenter">L'histoire de l'intelligence artificielle</h2>
                    <br>
                    <div class="grid">
                        <p class='aligncenter'> L'inteligence artificielle est née dans les années 50 suite au recherche d'Alan Turing, qui été un <br>
                            mathématicien, cryptologue et auteur des travaux qui fondent l'informatique, portant sur l'intelligence des machines.<br>
                            Se demandant ainsi si les machines pouvaient penser d'elle même. Suite a cela il créa le test Turing.
                        </p>
                        <p class='aligncenter'>
                            Cette expérience met en avant l'hypothese qu'une machine pourra être consciente. Cela insinue que les reponses <br>
                            fournie par un ordinateur ou par un homme n'as pas de distinctions, quel que soit le sujet évoqué.
                        </p>
                        <p class='aligncenter'>
                            Plusieurs avancées technologiques ont vu le jour.<br>
                            Tout d'abord le machine learning ou apprentissage automatique, cette étude est basé sur une approche mathématique<br>
                            Ainsi la machine apprendrais par elle même en analysant les différentes données qui lui son données. 
                        </p>
                        <p class='aligncenter'>
                            Puis le deep learning ou apprentissage profond, fait son apparation dans les années 2000 grâce à <br>
                            l'émeregence du big data et l'évolution des puissances de calculs. Cette technologie est une intelligence<br>
                            artificielle qui reprend les bases du machine learning en utilisant des algorithme plus complexes.
                        <p>
                        <p class='aligncenter'>
                            Deux pays sont important pour l'evolution de l'intelligence artificielle les Etats-unis qui sont le principal pays<br>
                            et le second est la Chine qui fond des progrès impressionant.<br>
                            <br>
                            <img src="../CSS/iaShema.png" />
                        </p>
                        <p class='aligncenter'>
                            Ce schema montre l'évolution des termes et des technologies.algorithmes sur l'intelligence artificielle. Chaque<br>
                            bulle est une évolution de l'intelligence artificielle. Ainsi nous appercevons que le deep learning et une evolution du<br>
                            machine learning couplé au réseau neurones.
                        </p>
                  </div>
                    <!-- end .grid -->
                </div>
                <!-- end .wrap -->
            </section>

            <section class="bg-white" id="machineLearning">
            <h2 class="aligncenter">L'histoire de l'intelligence artificielle</h2>
            <br>
            <div class="grid">
                <p class='aligncenter'>
                    Comme évoqué plus haut, la machine learning est un terme anglophone pouvant être traduit de deux facons différentes<br>
                    apprentissage automatique et apprentissage statistique.<br>
                    Cette intelligence artificielle se base sur des fondements mathématiques et statistiques, qui permet aux ordinateur<br>
                    de pouvoir apprendre à partir d'une analyse données.
                </p>
                <p class='aligncenter'>
                    Le terme de machine learning à été donnée par un informaticien américain travaillant chez IBM en 1959. Arthur Samuel<br>
                    avait créé en 1952 un programme pour jouer aux dames et apprendre à y jouer en même temps. Ce  programme à pu faire ses<br>
                    preuve en battant le quatrième meilleur joueur de dames des Etats-unis.
                </p>
                <p class='aligncenter'>
                    Le machine learning utilise alors des algorithmes donnant la possibilité à un systeme piloté par un ordinateur<br>
                    de pouvoir adapter ses analyses et ses comportements en fonction de l'analyse des données empiriques provenant <br>
                    d'une base de données ou de capteurs.
                </p>
                <p class='aligncenter'>
                    Il existe plusieurs types de machines learning : <br>
                    L'apprentissage supervisé, l'apprentissage non supervisé et l'apprentissage par renforcement.
                </p>
                <p class='aligncenter'>
                    Avec l'apprentissage supervisé les données seront annotées. Chaque donnée appartiendra à une catégorie et cela<br>
                    permettra d'annoter de nouvelles données dans une catégorie.
                </p>
                <p class='aligncenter'>
                    A l'inverse de l'apprentissage supervisé, l'apprentissage non supervisé recevra des données non-annotées.<br>
                    L'algorithme regroupera les données par similiraté.
                </p>
                <p class='aligncenter'>
                    L'apprentissage par renforcement lui se fera en fonction des expériences rencontrées par l'intelligence artificielle.<br>
                    Il va explorer les possibilités afin de trouver celle qui lui convient au mieux.
                </p>
                <p class='aligncenter'>
                    Ces intelligences artuficielles bénéficient de plusieurs utilités. Elles peuvent permettre d'user de capacités de traitement<br>
                    probaliste des données, d'analyser des données issues de capteurs, ou encore permettre la reconnaissance qu'importe le type <br>
                    qu'elle soit vocale, faciale, selon les formes, les écritures...
                <p>
                <p class='aligncenter'>
                    En 1997, il a été possible de constater une avancé majeure en ce qui concerne cette technologie. En effet, cette<br>
                    avancée a été constatée lorsque l'ordinateur deep blue, le nom donné au superordinateur d'IBM spécialisé dans le <br>
                    jeu d'échecs, a réussi à battre le champion du monde d'échecs.
                </p>
                <p class='aligncenter'>
                    C'est en 2012 que google a développé au réseau neuronal, qui a pour objectif de reconnaitre des visages humains<br>
                    sur la plateforme youtube. c'est alors le 7 juin 2014, qu'un nouveau pas a été fait en ce qui concerne l'intelligence<br>
                    artificielle. En cette date, "Eugene Goostman" (intelligence artificielle russe) à reussi le test de Turing.<br>
                    Pour développer a quoi correspond cette ia, elle simule un jeune garcon ukrainien de 13 ans, bénéficiant de personnalité<br>
                    et également de connaissances dites crédibles pour les interlocuteurs.
                </p>
            </div>
            </section>

            <section id="deepLearning">
            </section>

            <section class="bg-white" id="IaAutomobile">
            </section>

            <section class="aligncenter">
                <!-- .wrap = container (width: 90%) -->
                <div class="wrap">
                    <h2><strong>Conclusion</strong> </h2>
                    <p class="text-intro">Paragraphe1</p>
                    <p>Paragraphe2</p>
                </div>
                <!-- .end .wrap -->
            </section>

        </article>
    </main>
    <!-- end main -->

    <!-- Required -->
    <script src="../css/js/webslides.js"></script>
    <script>
        window.ws = new WebSlides();
    </script>
</body>

</html>