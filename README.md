# Symfony-Pagination

Un projet Symfony de suivi des articles avec pagination, construit en utilisant Symfony, PHP, et Bootstrap. Cette application vous permet de visualiser une liste d'articles paginée et stylisée.

## Fonctionnalités

- Affichage en temps réel des articles paginés.
- Pagination pour gérer un grand nombre d'articles.
- Possibilité de personnaliser le projet en fonction de vos besoins.

## Captures d'écran

![Capture d'écran de la liste d'articles paginée](Symfony-Pagination.png)

## Comment utiliser le projet

1. Clonez ce dépôt sur votre machine locale en utilisant la commande suivante :
```shell
git clone git@github.com:Malcom-Yeoman/Symfony-Pagination.git
```
2. Installez les dépendances en utilisant Composer :
```shell
composer install
```
3. Configurez la base de données dans le fichier `.env` :
```shell
DATABASE_URL="mysql://db_user:db_mdp@127.0.0.1:8889/db_name?serverVersion=5.7"
```
Vous pouvez également utiliser un autre système de gestion de base de données si vous le souhaitez.

4. Créez la base de données et effectuez les migrations :
```shell
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```
1. Chargez des données de test :
```shell
php bin/console doctrine:fixtures:load
```
1. Lancez le serveur Symfony :
```shell
symfony serve:start
```
1. Ouvrez votre navigateur web et accédez à l'application à l'adresse `http://127.0.0.1:8000`.

2. Explorez la liste d'articles paginée.

## Personnalisation

Vous pouvez personnaliser ce projet en modifiant le code Symfony pour ajouter de nouvelles fonctionnalités, personnaliser la mise en page, ou ajouter des filtres et des fonctionnalités de tri aux articles.

## Contribution

Les contributions sont les bienvenues ! Si vous souhaitez améliorer ce projet, corriger des bogues ou ajouter de nouvelles fonctionnalités, n'hésitez pas à soumettre une demande de tirage (pull request).
