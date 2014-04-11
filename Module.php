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
        $translator->addTranslationFile('phparray', $file, 'default', 'ja_JP');
    
        // please view https://packages.zendframework.com/docs/latest/manual/en/modules/zend.validator.messages.html
        \Zend\Validator\AbstractValidator::setDefaultTranslator($translator); 
    }
}
