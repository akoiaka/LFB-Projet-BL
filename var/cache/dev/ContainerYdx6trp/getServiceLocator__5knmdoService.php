<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator..5knmdo' shared service.

return $this->services['service_locator..5knmdo'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('authUtils' => function () {
    return ${($_ = isset($this->services['security.authentication_utils']) ? $this->services['security.authentication_utils'] : $this->load(__DIR__.'/getSecurity_AuthenticationUtilsService.php')) && false ?: '_'};
}));