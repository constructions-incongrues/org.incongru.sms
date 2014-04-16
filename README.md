# Installation

```
git clone git@github.com:constructions-incongrues/org.incongru.sms.git
composer install --prefer-dist
ant configure build
```

# Déploiement

```
ant deploy -Dprofile=jeroboam
```

http://sms.incongru.org/s/

# Créer un service

Créer un dossier ```src/services/<nom du service>```

Dans ce dossier, deux fichier :

* ```index.php``` : obligatoire. Le texte écrit sur la sortie standard est envoyé comme réponse à l'appel au service
* ```help.php``` : optionnel. Le texte écrit sur la sortie standard est utilisé comme réponse lorsqu'on appelle le service ```help <nom du service>```

Ces deux fichiers ont accès aux variables suivantes :

* ```$service``` : le nom du service
* ```$parameters``` : le contenu de $_GET['parameters'], filtré avec [FILTER_SANITIZE_STRING](http://fr2.php.net/manual/en/filter.filters.sanitize.php)
