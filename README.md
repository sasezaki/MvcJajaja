ZF2 Mvcアプリケーションにてヴァリデーションを日本語にします

ZF 2.2向けモジュールです

##使い方
このモジュールをcomposerにて追加します
```
php composer.phar require sasezaki/mvc-jajaja dev-master
```

config/application.config.php にてこのモジュールを有効にします
```
<?php
return array(
    'modules' => array(
        'Application',
        'MvcJajaja',
    );
```

##Mvcアプリケーション以外での日本語使用手引き
http://qiita.com/sasezakit/items/1a998f6c673739bbdee3
