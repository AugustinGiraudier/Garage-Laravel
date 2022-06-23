# Projet Garage

Réalisé par Augustin Giraudier

# Résumé

Ce projet est un site internet codé sous Laravel.

Il permet une gestion simple d'éléments et de tâches associées.

Ici, l'exemple constitue une gestion de garage automobile.

## Liste des fonctionnalités

On peut donc :
 - Ajouter un véhicule
 - Visionner les vehicules du garage
 - Les supprimer
 - consulter les taches de chaque vehicule
 - En ajouter
 - En supprimer (les déclarer comme faites)

## Déploiement

Une fois le repository cloné, respectez ces étapes :

 - Executez les commandes :
 ```
    cd garage
    composer install
    npm install
    cp .env.example .env
```

 - Modifiez le fichier .env ainsi créé comme suit :
 ```
    DB_DATABASE=garage
    DB_USERNAME=usergarage
    DB_PASSWORD="C1Secret !"
```

    Ces informations sont sont données à des fins de tests et peuvent etre modifiées par vous même au moment de la création de la base de données.

 - Executez en local le script `setupDatabase.sql` (c'est ici que sont créés la base et l'utilisateur associé)

 - Executez les commandes : (préférez les outils de Vs Code)
    * Artisan migrate install
    * Artisan Migrate

 - Executez en local le script `fillDatabase.sql` (Facultatif - Ici nous ajoutons des données de test)

 - Exécutez les commandes :
 ```
    sudo chown -R $user :www-data storage
    sudo chown -R $user :www-data bootstrap/cache
    sudo chmod -R 775 storage
    sudo chmod -R 775 bootstrap/cache
```

 - Générez une nouvelle clé avec :
 ```
    php artisan key:generate
```

 - Rendez vous sur : http://localhost/.../projetisi2/garage/public/

 - Les informations de connexion au site que nous avons insérées sont :
    * email : `Garage@gmail.com`
    * mot de passe : `GarageAdmin`

Si besoin, la page de création de compte n'est pas bloquée (rendez vous à l'url : `.../public/register`)