Add this line to your app
```
     ......
     'modules' => [
         'admin' => [
             'class' => 'app\modules\admin\Module',
         ],
     ],
     ......
```

run migrations
 ```
yii migrate --migrationPath=@app/modules/admin/migrations
```

add the web.php config file
```
// Elfinder file manager
'controllerMap' => [
    'elfinder' => [
        'class' => 'mihaildev\elfinder\Controller',
        'access' => ['@', '?'], //глобальный доступ к фаил менеджеру @ - для авторизорованных , ? - для гостей , чтоб открыть всем ['@', '?']
        'disabledCommands' => ['netmount'], //отключение ненужных команд https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#commands
        'roots' => [
            [
                'baseUrl'=>'@web',
                'basePath'=>'@webroot',
                'path' => 'files/img',
                'name' => 'Global'
            ]
        ]
    ]
],
// Kartik date picker
 'assetManager' => [
    'bundles' => [
        'kartik\form\ActiveFormAsset' => [
            'bsDependencyEnabled' => false // do not load bootstrap assets for a specific asset bundle
        ],
    ],
],
```