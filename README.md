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