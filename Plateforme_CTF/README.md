Documentation 
 
 
1) Clonez le répertoire sur votre serveur ou en local. 
 
2) Ouvrez database/seeds/SudoUserTableSeeder.php et changez l’username, l’email et le mot de passe. 
 
3) Avoir d’installé : php , composer et npm. 
 
4) Pour ceux sur Ubuntu, lancez bash setup.sh 
 
Pour les autres distributions, il faut : 
 
Créez un fichier .env et copiez-collez ce qui suit, puis éditez les paramètres : 
 
 APP_ENV=production 
 
 
 APP_DEBUG=false 
 
 
 APP_TZ= Europe/Paris 
 
 

# Etape : 1 – Générez en utilisant

php  artisan key:generate -env=production 


 APP_KEY= 
 
# Étape : 2- Modifier les paramètres de connexion à la base de données ci-dessous  
 
 DB_HOST=CHANGE_DB_HOST 
 
 
 DB_DATABASE=CHANGE_DB_NAME 
 
 
 DB_USERNAME=CHANGE_DB_USER 
 
 
 DB_PASSWORD=CHANGE_DB_PASSWORD 
 
 

 CACHE_DRIVER=file 
 
 
 SESSION_DRIVER=file 
 
 
 QUEUE_DRIVER=sync 
 
 
 
# Étape 3 (facultative) - Définissez les paramètres REDIS ci-dessous  
 
REDIS_HOST=localhost 


REDIS_PASSWORD=null 


REDIS_PORT=6379 


 
# Étape 4 - Configuration des paramètres du serveur de messagerie SMTP ci-dessous 
 
MAIL_DRIVER=smtp 


MAIL_HOST=mailtrap.io 


MAIL_PORT=2525 


MAIL_USERNAME=null 


MAIL_PASSWORD=null 


MAIL_ENCRYPTION=null 


MAIL_FROM_ADDRESS=no-reply@example.com 


MAIL_FROM_NAME=no-reply 


 
# Étape 5 - Générer les clés de chiffrement pour le service de passeport 

  php artisan passport:keys 
 
 
Ensuite, il suffit de déployer l’application en tapant les commandes suivantes : 
 
  composer install --optimize-autoloader 
  
  
  npm install 
  
  
  php artisan passport:keys 
  
  
  php artisan key:generate 
  
  
  npm run prod 
  
  
  php artisan optimize 
  
  
  php artisan cache:clear 
  
  
  php artisan migrate --seed 
  
  
  php artisan serve 
