# Template d'un plugin

Un simple moyen via un `git clone` de démarrer le développement d'un plugin

## Pour commencer

A l'aide d'un terminal, déplacez-vous dans le dossier `app/Plugin` de MineWeb, puis tapez cette commande.

```
git clone git@github.com:MineWeb/Template-Plugin.git Empty
```

Cela va vous créer la structure de base du plugin.

Vous pouvez voir le résultat depuis `votresiteweb.fr/empty` (Notez que la vue de cette page se situe dans `app/Plugin/Empty/View/Empty/index.ctp`)

Et depuis `votresiteweb.fr/admin/empty` pour la partie admin. (Notez que la vue de cette page se situe dans `app/Plugin/Empty/View/Empty/admin_index.ctp`)

##Renommer le plugin

Le plugin ici nommé Empty, c'est bien mais je doute que votre plugin se nomme ainsi en production.

Vous pouvez recherchez toutes les références au mot : `empty` avec un édtieur de texte.

Ou bien, il suffit donc de modifier ceci :

- `Empty` dans `app/Plugin`
- `empty`  présent trois fois dans `app/Plugin/Empty/Config/routes.php`
- Renommer `EmptyController` en par exemple `ForumController` dans `app/Plugin/Empty/Controller`
- `EmptyController` avec le même nom utilisé à la ligne ci-dessus dans le fichier `app/Plugin/Empty/Controller/EmptyController.php`
- Renommer `EmptyAppModel` en par exemple `ForumAppModel` dans `app/Plugin/Empty/Model`
- `EmptyAppModel` avec le même nom utilisé à la ligne ci-dessus dans le fichier `app/Plugin/Empty/Model/EmptyAppModel.php`
- `empty__` (c'est le nom de votre préfix de notre plugin dans la base de données. ex : `forum__`)
- `EmptyAppSchema` dans le fichier `app/Plugin/Empty/SQL/EmptyAppSchema.php`
- Renommer le dossier `Empty` dans `app/Plugin/Empty/View`
- Modifier `name`, `author`, version` dans le fichier `app/Plugin/Empty/config.json`

Notez que ces étapes précédentes respectent des conventions utilisés en programmation. Vérifiez `app/tmp/logs/error.log` en cas d'erreur 500 du CMS durant la phrase de développement.

## Références 

Créer un plugin : [lien](http://docs.mineweb.org/#cr-er-un-plugin)

Tutoriel de la création d'un plugin : [lien](http://docs.mineweb.org/#exemple-d-39-un-plugin)