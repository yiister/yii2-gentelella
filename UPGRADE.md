Upgrading Instructions for Yii2 Gentelella
==========================================

Upgrade from 1.2.5
------------------

- Modify your layout file. Change `<body class="nav-md">` to `<body class="nav-<?= Yii::$app->request->cookies->getValue('menuIsCollapsed', false) ? 'sm' : 'md' ?>" >`
