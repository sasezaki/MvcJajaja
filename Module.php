<?php
namespace MvcJajaja;

use Zend\Mvc\MvcEvent;

class Module 
{
    public function onBootstrap(MvcEvent $e)
    {
        $file = __DIR__ . '/resources/languages/ja/Zend_Validate.php';

        $sm = $e->getApplication()->getServiceManager();
        $translator = $sm->get('MvcTranslator');
        $translator->setLocale('ja_JP');
        $translator->addTranslationFile('phparray', $file, 'default', 'ja_JP');
    }
}
