<html>
    <head>
        <title> Devoir 1</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index_css.css">
    </head>
    <body>
    <?php  
            echo "<h3>Date du jour : ". date('d/M/Y H:m:s'). "</h3>";
            echo "<h3>Nom du fichier ex&#233;cut&#233;: ". $_SERVER['PHP_SELF']."&nbsp;&nbsp;&nbsp;<h3>";
        ?>
        <header>
            <div class="titre"><h2>Darstellung</h2></div>
        
        
            <div class="slider">

                <a href="#seigneur"><div class="slide">
                    <p>Le Seigneur seul</p>
                </div></a>
                <a href="#eclat"><div class="slide">
                    <p>Eclat de la saintete</p>
                </div></a>
                <a href="#expert"><div class="slide">
                    <p>Expert dans l'erreur</p>
                </div></a>
                <a href="#folie"><div class="slide">
                    <p>Folie et sagesse</p>
                </div></a>
                <a href="#reponse"><div class="slide">
                    <p>Reponse a Job</p>
                </div></a>
            </div>
        </header>
       
       <!-- Seigneur seul -->
     <?php require('dimanche.html');?>
        <!-- L'eclat de la saintete --> 
        <?php require('lundi.html');?>
        <!-- Experts dans l'erreur --> 
        <div class="container">
            <div id="expert">
                <h3>Experts dans l'erreur</h3>
                <p>
                    Nous savons que notre monde a plus que sa part d’art et de philosophie qui n’honore pas Dieu. Nombreux sont ceux qui soutiennent que les chrétiens ne devraient même pas entrer dans ces tentes proverbiales. Les chrétiens Adventistes du Septième Jour doivent considérer avec soin leurs propres affaires en servant certaines industries, en fréquentant certains établissements, en usant de certains médias.
                </p>
                <p>
                    <b>Dans</b> 1Timothée6, <b>Dieu nous donne des instructions claires sur les activités que nous devons éviter, suivies de nombreuses explications. Dans les versets 9 et 10, quelles sont les activités contre lesquelles Paul nous met en garde?</b>
                </p>
                <p>
                    <b>Lisez</b> le reste de 1Timothée6. <b>Quelles sont les principales activités que Paul approuve?</b>
                </p>
                <p>
                    Remarquez dans 1 Timothée 6.20 comment Paul met en garde contre « la fausse science » (LSG). Bien que ce soit dans un contexte différent, le principe est toujours applicable. C’est-à-dire qu’il faut penser à toutes les informations, à tous les enseignements, à toutes les croyances, non seulement maintenant mais aussi tout au long de l’histoire de l’humanité, qui étaient carrément erronées.
                </p>
                <p>
                    Pendant près de 2000 ans, les personnes les plus intelligentes du monde, les experts, ont cru que la terre était immobile au centre de l’univers alors que toutes les étoiles et les planètes tournaient autour d’elle en cercles parfaits. Des mathématiques et des sciences très compliquées ont été utilisées pour étayer cette croyance, même si elle s’est avérée erronée dans presque tous les cas. On peut donc dire que ces gens étaient des experts dans l’erreur, et que cet enseignement était certainement « de la fausse science. »
                </p>
                <p>
                    La biologie d’aujourd’hui, par exemple, est fondée sur l’hypothèse que la vie a commencé il y a des milliards d’années, par hasard, sans Dieu ni intention. En même temps, une quantité incroyable de documentation scientifique compliquée et détaillée a émergé sur la base de cet enseignement. Quelles leçons peut-on retirer de cela sur la manière dont les gens peuvent devenir des experts en erreurs ? En quoi cette prise de conscience devrait-elle affecter l’éducation chrétienne en général et l’enseignement de la science en particulier ?
                </p>
            </div>
        </div>
        
        <!-- Folie et sagesse--> 
        <?php require('mercredi.html');?>
        <!-- Reponse a Job --> 
        <div class="container">
            <div id="reponse">
                <h3>Le Seigneur a repondu a Job</h3>
                <p>
                   Lisez Job 38. Qu’est-ce que cela nous apprend sur Dieu, non seulement en tant que Créateur mais aussi en tant que Soutien de toute vie? Comment cette vérité importante devrait-elle influencer notre compréhension des arts et des sciences? 
                </p>
                <p>
                    « On enseigne communément que la matière possède un pouvoir vital, une énergie inhérente, des propriétés qui lui sont propres. De cette façon, les opérations de la nature se dérouleraient en harmonie avec des lois fixes que Dieu Lui-même ne peut violer. Cette fausse science n’est nullement approuvée par la Parole de Dieu. La nature est la servante de son Créateur… La nature révèle une intelligence, une présence, une énergie active qui opèrent au sein de ses lois et par elles, et témoignent de l’activité continue du Père et du Fils. Jésus dit: Mon Père travaille jusqu’à présent, et Je travaille, Moi aussi. Jean5.17. » – Ellen G. White, Patriarches et prophètes, p. 91.

                </p>
                <p>
                    Malheureusement, comme nous l’avons déjà dit, une grande partie de la science travaille sur des présupposés athées et matérialistes. Cela signifie donc qu’un scientifique pourrait fixer quelque chose de la plus grande beauté, de la plus grande complexité, et pourtant prétendre que cela est venu par hasard, sans aucune prévoyance ni intention. C’est d’ailleurs ce que la science ne cesse de prétendre. La vie sur terre, dans toute sa beauté et sa complexité, des papillons aux humains, est expliquée comme n’étant rien d’autre que le résultat de produits chimiques qui, il y a des milliards d’années, se sont transformés par hasard en une vie simple qui, par mutation aléatoire et sélection naturelle, a évolué en tout ce qui vit, bouge et respire aujourd’hui.
                </p>
                <p>
                    La science, telle qu’elle est aujourd’hui constituée, soutient que l’idée même d’un Créateur surnaturel est « non scientifique », car elle ne peut pas être testée scientifiquement, et c’est donc une notion que la science ne peut pas traiter. Cette présupposition n’est pas quelque chose que la science elle- même enseigne (en fait, la science semblerait enseigner le contraire: toute la beauté et la complexité du monde désignent en effet un Créateur), mais c’est, au contraire, une position philosophique imposée à la discipline par les scientifiques eux-mêmes.
                </p>
                <p>
                    Le problème, cependant, est que l’Écriture enseigne que Dieu n’a pas seulement créé tout, mais qu’Il soutient aussi tout. Cela signifie que toute véritable éducation chrétienne dans le domaine des sciences devrait fonctionner à partir d’hypothèses radicalement différentes de ce que la science en général prétend.
                </p>
                <p>
                    Inévitablement, des affrontements se produiront, surtout en ce qui concerne les origines.
                </p>
            </div>
        </div>
        
        <!-- Pour aller plus loin -->
        <?php require('vendredi.html');?>
        <!-- a mediter-->
        <div class="container">
            <div id="meditation">
                <h3>A mediter</h3>
                <p>
                    En classe, parlez de la question de la beauté. Qu’est-ce que la beauté ? Comment la définir ? Comment un chrétien pourrait-il définir et comprendre la beauté différemment d’un non-chrétien ?
                </p>
                <p>
                    Christ aurait pu venir sur terre sous les traits d’un scientifique brillant, qui aurait été richement récompensé pour ses recherches révolutionnaires. Il aurait pu récolter toute la gloire comme musicien. Mais à la place, il est venu se former en tant qu’humble artisan. Il était présent lors de la Création, mais il s’est forme comme un laïc et a accompli ses devoirs sans discuter. Quel encouragement cela nous offre-t-il, que ce soit pour notre parcours scolaire ou bien professionnel ?
                </p>
                <p>
                    Tous les chrétiens ne sont pas appelés à enseigner dans des écoles, mais les chrétiens peuvent enseigner d’autres personnes en paroles et en actes, délibérément ou à leur insu. Pour cette raison, quelles habitude le chrétien doit-il cultiver, aussi bien en tant qu’élève de Christ que professeur pour le monde ?
                </p>
            </div>
        </div>
        
    </body>
</html>