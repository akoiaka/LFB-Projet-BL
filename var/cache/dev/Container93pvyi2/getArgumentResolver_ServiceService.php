<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('AppBundle\\Controller\\SecurityController:loginAction' => function () {
    return ${($_ = isset($this->services['service_locator..5knmdo']) ? $this->services['service_locator..5knmdo'] : $this->load(__DIR__.'/getServiceLocator__5knmdoService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\SecurityController::loginAction' => function () {
    return ${($_ = isset($this->services['service_locator..5knmdo']) ? $this->services['service_locator..5knmdo'] : $this->load(__DIR__.'/getServiceLocator__5knmdoService.php')) && false ?: '_'};
})));
