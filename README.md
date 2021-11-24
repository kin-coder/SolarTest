# SolarTest
Mini projet sur l'insertion d'un utilisateur et affichage sous forme de galerie photo. Framework employé: Laravel

#### Nom Base de donnée: solartest

#### Model: students
* les attributs: 
* name
* age
* avatar

#### Controller:
* Studentcontroller

`* avec les fonctions suivantes:`

`* listStudents() : pour lister tous les students`

`* createForm() : pour la creation du formulaire`

`* insertStudent() : pour l’insertion des données dans la base de données.`


#### Views:
* layout.blade.php : un nouveau page pour l’accueil Students

* studentlists.blade.php : affichage du liste des élèves inscrits

* student.blade.php : affichage du formualire pour l’inscription 


#### Routes:

* Route::get('/', 'StudentController@listStudents'); // route vers l’accueil STUDENT

* Route::get('home', 'StudentController@listStudents'); // route vers l’accueil Home pour afficher les résultats

* Route::get('newstudent', 'StudentController@createForm'); //route pour affichage formulaire

* Route::post('home', 'StudentController@insertStudent'); // route pour l’insertion des données
 
#### Les éléments nécessaires :
* Version php : 7.2 ou supérieur
* Version framework laravel : 8

Installer le composer pour php. La dernière version est souhaitable 

On emploi un serveur local (xamp ou mamp
) 

#### Pour lancer l'application :
* Copier le dossier dans le dossier htdocs du xampp ou mampp. 

* Mettre en marche le mampp ou xamp
* Créer la base de données : solartest dans phpmyadmin
* Ouvrir le dossier de l'application dans htdocs sous terminal

* Créer la base de données : 
php artisan make:database solartest

* Migrer  la database avec la commande :
php artisan migrate

* Mettre en marche le serveur php  avec la commande:
php artisan serve

* Url: http ://127.0.0.1
