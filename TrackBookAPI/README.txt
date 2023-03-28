
- création API : symfony new symfonyAPI

- installer composer : composer require symfony/maker-bundle --dev

- après : composer require doctrine/annotations


/////////////////création des users////////////////////////

- création des entity : symfony console make:entity

- pour crée les users : composer require security
- puis faire => symfony console make:user

///////////////création de la page Login/////////////////////

- installation : composer require twig

- crée une page login : symfony console make:auth

//////////////création du dashboard admin////////////////////

- composer require easycorp/easyadmin-bundle 

- symfony console make:admin:dashboard

- symfony console make:admin:crud


///////////////////Fonction API//////////////////////////////

- composer require symfony/serializer-pack



