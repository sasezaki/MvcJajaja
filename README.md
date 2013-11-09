ZF2 Mvcアプリケーションにてヴァリデーションを日本語にします

ZF 2.2向けモジュールです

##使い方
このモジュールをcomposerにて追加します
```
php composer.phar require sasezaki/mvc-jajaja dev-master
```

config/application.config.php にてこのモジュールを有効にします

```php
<?php
return array(
    'modules' => array(
        'Application',
        'MvcJajaja',
    );
```

##動作確認
コントローラからは以下の通りです

```
    public function indexAction()
    {
        $validatorManager = $this->getServiceLocator()->get('ValidatorManager');
        $digits = $validatorManager->get('digits');
        $digits->isValid("string");
        var_dump($digits->getMessages());
    }
```

##ロケールの考慮
このモジュールは強制的にメッセージを日本語にするものですので、
ロケールを考慮して英語/日本語の変更を行う場合はSlmLocaleなどを使って下さい
https://github.com/juriansluiman/SlmLocale

##Mvcアプリケーション以外での日本語使用手引き
http://qiita.com/sasezakit/items/1a998f6c673739bbdee3
