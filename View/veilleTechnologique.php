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
                <li id="contact"><a href="../View/synthèse.php">Synthèse</a></li>
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
                        <p class='aligncenter'> L'inteligence artificielle est née dans les années 50 suite au recherche d'Alan Turing, un <br>
                            mathématicien, cryptologue et auteur des travaux qui fondent l'informatique, portant sur l'intelligence des machines.<br>
                            Se demandant ainsi si les machines pouvaient penser d'elles-mêmes. Suite à cela, il créa le test Turing.
                        </p>
                        <p class='aligncenter'>
                            Cette expérience met en avant l'hypothèse qu'une machine pourra être consciente. Cela insinue que les réponses <br>
                            fournies par un ordinateur ou par un homme n'ont pas de distinctions, quel que soit le sujet évoqué.
                        </p>
                        <p class='aligncenter'>
                            Plusieurs avancées technologiques ont vu le jour.<br>
                            Tout d'abord le machine learning ou apprentissage automatique est basé sur une approche mathématique,<br>
                            ainsi la machine apprendra par elle-même en analysant les différentes données qui lui sont données. 
                        </p>
                        <p class='aligncenter'>
                            Puis le deep learning ou apprentissage profond, qui fait son apparation dans les années 2000 grâce à <br>
                            l'émergence du big data et l'évolution des puissances de calculs. Cette technologie est une intelligence<br>
                            artificielle qui reprend les bases du machine learning en utilisant des algorithmes plus complexes.
                        <p>
                        <p class='aligncenter'>
                            Deux pays sont importants pour l'évolution de l'intelligence artificielle, les Etats-unis sont le principal pays<br>
                            et le second est la Chine qui fond des progrès impressionant.<br>
                            <br>
                            <img src="../CSS/iaShema.png" />
                        </p>
                        <p class='aligncenter'>
                            Ce schéma montre l'évolution des termes et des technologies algorithmes sur l'intelligence artificielle. Chaque<br>
                            bulle est une évolution de l'intelligence artificielle. Ainsi nous apercevons que le deep learning est une évolution du<br>
                            machine learning couplé au réseau neurones.
                        </p>
                  </div>
                    <!-- end .grid -->
                </div>
                <!-- end .wrap -->
            </section>

            <section class="bg-white" id="machineLearning">
            <h2 class="aligncenter">Machine learning</h2>
            <br>
            <div class="grid">
                <p class='aligncenter'>
                    Comme évoqué plus haut, la machine learning est un terme anglophone pouvant être traduit de deux facons différentes : <br>
                    apprentissage automatique et apprentissage statistique.<br>
                    Cette intelligence artificielle se base sur des fondements mathématiques et statistiques, qui permet aux ordinateur<br>
                    de pouvoir apprendre à partir d'une analyse donnée.
                </p>
                <p class='aligncenter'>
                    Le terme de machine learning a été donné par un informaticien américain travaillant chez IBM en 1959. Arthur Samuel<br>
                    avait créé en 1952 un programme pour jouer aux dames et apprendre à y jouer en même temps. Ce  programme a pu faire ses<br>
                    preuve en battant le quatrième meilleur joueur de dames des Etats-unis.
                </p>
                <p class='aligncenter'>
                    Le machine learning utilise alors des algorithmes donnant la possibilité à un système piloté par un ordinateur<br>
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
                    L'apprentissage par renforcement, lui, se fera en fonction des expériences rencontrées par l'intelligence artificielle.<br>
                    Il va explorer les possibilités afin de trouver celle qui lui convient au mieux.
                </p>
                <p class='aligncenter'>
                    Ces intelligences artificielles bénéficient de plusieurs utilités. Elles peuvent permettre d'user de capacités de traitement<br>
                    probaliste des données, d'analyser des données issues de capteurs, ou encore permettre la reconnaissance qu'importe le type <br>
                    qu'elle soit vocale, faciale, selon les formes, les écritures...
                <p>
                <p class='aligncenter'>
                    En 1997, il a été possible de constater une avancée majeure en ce qui concerne cette technologie. En effet, cette<br>
                    avancée a été constatée lorsque l'ordinateur deep blue, le nom donné au superordinateur d'IBM spécialisé dans le <br>
                    jeu d'échecs, a réussi à battre le champion du monde d'échecs.
                </p>
                <p class='aligncenter'>
                    C'est en 2012 que google a développé au réseau neuronal, qui a pour objectif de reconnaitre des visages humains<br>
                    sur la plateforme youtube. C'est alors le 7 juin 2014, qu'un nouveau pas a été fait en ce qui concerne l'intelligence<br>
                    artificielle. En cette date, "Eugene Goostman" (intelligence artificielle russe) à reussi le test de Turing.<br>
                    Pour développer ce à quoi correspond cette IA, elle simule un jeune garcon ukrainien de 13 ans, bénéficiant de personnalité<br>
                    et également de connaissances dites crédibles pour les interlocuteurs.
                </p>
                <p class='aligncenter'>
                    Alors aidé par les jeux de plateaux et le deep learning, que nous développerons ensuite, l'intelligence artificielle de Google "AlphaGo"<br>
                    parvint à battre l'un des meilleurs joueurs de GO en 2015. Ce jeu, étant alors considéré comme le jeu de plateau le plus complexe au monde.<br>
                </p>
                <p class='aligncenter'>
                    Cette étape marque alors une nouvelle avancée de l'intelligence artificielle, de par le fait que la taille approximative de l'arbre<br>
                    des probabilités de ce jeu avoisine les 10^600.
                </p>
                <p class='aligncenter'>
                    Pour terminer, les algorithmes de machine learning permettraient alors de pouvoir apprendre à un robot à se déplacer, à marcher, alors<br>
                    qu'il ne possède aucune connaissance.<br>
                    Le robot utiliserait alors des mouvements aléatoires qui seraient inclus dans une base de données. Il sélectionnerait uniquement les mouvements<br>
                    qui peuvent lui permettre d'avancer. C'est un cas concret pour illustrer le machine learning.
                </p>
            </div>
            </section>

            <section id="deepLearning">
            <h2 class="aligncenter">Deep learning</h2>
            <br>
            <div class="grid">
                <p class='aligncenter'>
                    Le deep learning, ou traduction francaise d'apprentissage profond, est alors constitué d'un ensemble de procédés de machine learning qui est<br>
                    fondé sur l'apprentissage de modèle de données.
                </p>
                <p class='aligncenter'>
                    Ces expériences ont pu aider aux secteurs d'analyse de signal visuel ou sonore. Par exemple, nous pouvons citer la reconnaissance<br>
                    faciale ou encore le traitement automatisé du langage. En effet, plusieurs outils ont été développés à l'aide de deep learning permettant de <br>
                    traduire les paroles d'une personne et de les traduire dans une autre langue et cela sans forme de texte, ou encore traduire un texte pris en photo.
                </p>
                <p class='aligncenter'>
                    Toutes ces techniques ont alors vu le jour dans les années 90. Mais c'est réellement au début des années 2010 que les algorithmes<br>
                    de deep learning montrent leurs éfficacités.<br>
                    Pour que cela soit plus parlant, nous allons illustrer ce qu'est le deep learning de la facon suivante : <br>
                    Il se compose d'un réseau de neurones s'inspirant de celui de l'humain. Ce réseau neuronal est alors composé de plusieurs dizaines,<br>
                    voires de centaines de couches. Ces couches sont des couches d'entrées, de sortiesmais il peut s'agir de couches cachées.
                </p>
                <p class='aligncenter'>
                    Chacune de ces couches reçoit et traite les informations de la couche précédente.<br>
                    A chaque passage d'une couche à une autre, les réponses considérées comme fausses sont renvoyées dans les niveaux en amont afin d'ajuster<br>
                    le modèle mathématique. Ainsi, plus le programme avance, plus les données sont concentrées en un bloc complexe.
                </p>
                <p class='aligncenter'>
                    Nous utilisons tous à ce jour, ou presque, une intelligence artificielle de type deep learning. Effectivement il suffit de se référer au nombre<br>
                    d'utilisateurs de plateformes telles que youtube, 1.9 milliards en 2018, Spotify ou même Netflix, 5 000 000 d'utilisateurs rien qu'en France pour <br>
                    ce dernier en 2019. Mais comment ces applications arrivent-elles à proposer des suggestions en fonction de ce que l'on peut écouter ou regarder? <br>
                    Ces applications ont recours au machine learning ainsi qu'à un algorithme. Cette combinaison permet d'étudier ce que l'utilisateur a visionné pour<br>
                    pouvoir lui proposer un contenu similaire qu'il n'a pas encore regardé.
                </p>
                <p class='aligncenter'>
                    Et tout cela peut se jouer uniquement sur un visuel, qui pourrait nous attirer plus qu'un autre.<br>
                    En effet, le but étant de collecter un maximum de données pour trouver des éléments présents sur l'illustration, qui nous correspondrait plus qu'une illustration<br>
                    proposée à un autre abonné de la plateforme.
                </p>
                <p class='aligncenter'>
                    Le programme de deep learning prendra en couche d'entrée les séries et films que l'utilisateur a pu visionner et apprécier, afin de pouvoir sortir d'autres films ou séries<br> 
                    qui peuvent être susceptibles de convenir a l'utilisateur. Cela ressortira alors en suggestion, en fonction de ce qui a été visionné à la base, puis par traitement<br>
                    en fonction du genre, de type, de réalisateur, etc... Cela rend alors les décisions correctes sur presque toutes les occasions.
                </p>
                <p class='aligncenter'>
                    Nous avons alors tourné l'explication du deep learning autour des applications telles que Netflix, Youtube, toutefois il subsiste d'autres exemples tels que la <br>
                    reconnaissance vocale(Google Home, Alexa) ou la conduite autonome de niveau 4.<br>
                    L'intelligence artificielle a considérablement évolué ces dernières années. Et nous pouvons voir également que le concept d'intelligence artificielle<br>
                    sont arrivés dès le début de l'informatique grâce à Alan Turing. Avec l'évolution des technologies hardware, les algorithmes et intelligence artificielle<br>
                    sont en constante évolution. Cela a commencé avec le machine learning et a continué avec son "évolution": le deep learning.
                </p>
            </div>
            </section>

            <section class="bg-white" id="IaAutomobile">
            <h2 class="aligncenter">L'intelligence artificielle et l'automobile</h2>
            <br>
            <div class="grid">
                <p class='aligncenter'>
                    Avec le temps et les différentes évolutions technologiques, nous pouvons affirmer que les intelligences artificielle font partie de notre quotidien;<br>
                    qu'elles soient dans nos téléphones, nos maisons, notre travail et même plus encore : nos moyens de locomotions.
                </p>
                <p class='aligncenter'>
                    Depuis quelques années nous entendons parler de la fameuse voiture autonome, celle que tous les constructeurs automobiles souhaiteraient mettre en place<br>
                    et commercialiser. Les intelligences artificielles utilisées pour ce type de véhicules sont des algorithmes de deep learning, qui est un programe utilisant le machine <br>
                    learning possédant plusieurs couches de neurones et utilisant des algorithmes plus complexes.
                </p>
                <p class='aligncenter'>
                    Dans le milieu de l'automobile, l'intelligence artificielle commence à s'imposer et s'invite alors dans notre quotidien, dans notre voiture. Les utilisateurs<br>
                    rêvent tous de véhicules robotisés, sans qu'il y ait la nécessité qu'un humain soit présent à bord de celui-ci.<br>
                    En 2025, le taux des équipements fondés sur l'IA au sein de véhicules neufs devrait alors croître de facon considérable; de 8% en 2015 à 109% à l'avenir.
                </p>
                <p class='aligncenter'>
                    Afin de savoir de quoi l'on parle, il faut d'abord prendre en compte qu'il existe 5 niveaux d'intelligence pour une voiture, allant de la simple aide à la conduite<br>
                    à un véhicule 100% autonome. Ci-dessous, l'illustration explique et représente les différents types d'intelligence, ainsi que leur utilité.<br>
                    A titre d'exemple, la première version de la fonctionnalité Autopilot de Tesla, apparu en 2014, est situé entre le niveau 2 et 3 d'après le département national des <br>
                    transports nord-américains. Elon Musk, (Chief executive officer) Directeur de Tesla, a récemment annoncé que cette fonctionnalité atteindra le niveau 5 au courant de l'année 2020.
                </p>
                <p class='aligncenter'>
                    L'intelligence artificielle d'une voiture va se nourrir de données fournies par des capteurs sur ladite voiture mais la voiture subira également un "entrainement".<br>
                    La voiture dotée d'algorithmes d'apprentissage (machine learning) et aura pour but de collecter un maximum de données. C'est un processus très long étant donné 
                    que selon les spécialistes il faudra parcourir l'équivalent de 10 milliards de kilomètres afin d'avoir le maximum de scénarios possibles.
                </p>
                <p class='aligncenter'>
                    Les voitures autonomes sont équipées de beaucoup de capteurs qui auront pour but de nourrir le programme en données.<br>
                    Ces capteurs peuvent être de différents types : <br>
                    <li class='aligncenter'>
                        Scanners lasers appelés LIDAR (Light detection and ranging), qui permet de mesurer les distances grâce à la réflexion du rayon laser,
                    </li>
                    <li class='aligncenter'>
                        Sonars à ultrasons, qui possèdent une portée plus limitée que les lasers mais qui auront pour but de valider les données envoyées par les lasers,
                    </li>
                    <li class='aligncenter'>
                        Plusieurs caméras, qui auront pour but de fournir une vision 360° au programme, de veiller au respect au code de la route et de détecter les lignes<br>
                        et bande sur la route afin de maintenir la voiture dans la voie.
                    </li>
                </p>
                <p class='aligncenter'>
                    Par le biais des différentes caméras sur le véhicule, il s'appropriera son environnement : cycliste, piétons, animaux par exemple. Grâce aux capteurs frontaux<br>
                    la vitesse du véhicule sera calculée en fonction des autres véhicules mais aussi permettra d'intervenir en cas d'apparition soudaine d'un évènement.
                </p>
                <p class='aligncenter'>
                    Puis pour finir, la voiture aura besoin de connaitre sa géolocalisation afin de se diriger et d'établir son itinéraire. Pour cela, les technologies de positionnement<br>
                    par satellite que nous connaissons seront utilisées : GPS, GLONAS, ou encore GALILEO.
                </p>
                <p class='aligncenter'>
                    L'intégralité de ces données sera envoyé et traité à l'aide du deep learning. En effet, ne serait-ce que les images envoyées par les caméras captures 30 images<br>
                    par secondes. Ces images contiennent elle-même de milliers de pixels. C'est pour cela que la puissance de calculs requise est incroyable. Cela doit permettre à <br>
                    l'intelligence artificielle de prendre des décisions en une fraction de secondes afin d'agir.
                </p>
                <p class='aligncenter'>
                    Plusieurs grandes entreprises sont sur le sujet de développer et commercialiser une voiture totalement autonome. Pour reprendre l'exemple de Tesla, qui est très actif<br>
                    sur ce sujet, la grande firme américaine promet des taxis sans chauffeur totalement autonomes.
                </p>
                <p class='aligncenter'>
                    Une autre firme américaine, Uber, a testé son dispositif sur la route. Pour ces tests sur route avec circulation, un chauffeur de sécurité devait être présent dans <br>
                    le véhicule afin de pouvoir agir en cas de problème.<br>
                    Cependant, un accident mortel eu lieu en mars 2018 dans une ville en Arizona. Une femme poussant son vélo était en train de traverser hors d'un passage piéton <br>
                    s'est fait tuer à cause du choc avec la voiture. En effet la voiture avait des réglages biaisés concernant les faux positifs. Les faux positifs sont des résultats <br>
                    envoyés à l'intelligence artificielle qui ne représentent aucun danger. Dans ce cas, il peut s'agir de sac ou bouteilles plastiques. Le logiciel a donc décidé de continuer <br>
                    sa route alors qu'un réel danger était sur la chaussée puisqu'il s'agissait de la dame poussant son vélo. Le drame aurait pu être évité par la présence du chauffeur <br>
                    de sécurité mais celui-ci n'est pas intervenu à temps. Suite a cet incident, les essais sur route avec circulation ont été suspendus. <br>
                    Pour les plus optimistes, les premières voitures autonomes pourraient être sur le marché et sur nos routes début de la décennie 2020 et pour les plus pessimiste cela<br>
                    interviendrait au début de la prochaine décennie soit 2030.
                </p>
            </div>
            </section>

            <!-- <section class="aligncenter">
                <div class="wrap">
                    <h2><strong>Conclusion</strong> </h2>
                    <p class="text-intro">Paragraphe1</p>
                    <p>Paragraphe2</p>
                </div>
            </section> -->

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