# Root Shop

_Dans le cadre du Projet E-Shop 2020 UF Technologies WEB & Base de données, nous avons réalisé un e-shop avec Laravel._


_Réalisé par CEBERIO Pierre **[@PierreYnov](https://github.com/PierreYnov)** et DIAS Steven **[@StevenDias33](https://github.com/StevenDias33)** ._


![img](https://github.com/PierreYnov/CTF-Sites/tree/master/Root-Shop/slides/images/rootshop.png)

## Description du site

Un E-Shop fait par des pentesters, pour les pentesters.

Retrouvez tous les outils nécessaires pour les professionnels et passionnés du hacking éthique : reverse, cryptanalyse, pentest Web/Serv, physique, …


## Documentation d'installation

### 0. Prérequis

Le projet demande d'avoir deux prérequis, il faut avoir [Laravel](https://laravel.com/docs/4.2) ainsi que [Wamp](https://sourceforge.net/projects/wampserver/).

### I. Git clone

Cloner le repository avec la commande: `git clone https://github.com/PierreYnov/CTF-Sites.git`

### II. Déploiement

Tapez 
`composer install`

puis configurer le `.env `

ensuite
`php artisan migrate -seed`

et enfin `php artisan serve`
