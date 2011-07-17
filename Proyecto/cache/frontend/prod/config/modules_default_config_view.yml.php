<?php
// auto-generated by sfViewConfigHandler
// date: 2011/07/17 04:13:53
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'indexLoginSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'indexError404Success')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'indexLoginSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == 'loginLayout' ? false : 'loginLayout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Sistema de Expediente académico', false, false);
  $response->addMeta('language', 'es', false, false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('menu_principal.css', '', array ());
  $response->addStylesheet('menu_secundario.css', '', array ());
  $response->addStylesheet('login.css', '', array ());
  $response->addStylesheet('flash.css', '', array ());
  $response->addJavascript('utiles.js', '', array ());
}
else if ($templateName.$this->viewName == 'indexError404Success')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == 'loginLayout' ? false : 'loginLayout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Sistema de Expediente académico', false, false);
  $response->addMeta('language', 'es', false, false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('menu_principal.css', '', array ());
  $response->addStylesheet('menu_secundario.css', '', array ());
  $response->addJavascript('utiles.js', '', array ());
}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('menu_principal.css', '', array ());
  $response->addStylesheet('menu_secundario.css', '', array ());
  $response->addJavascript('utiles.js', '', array ());
}

