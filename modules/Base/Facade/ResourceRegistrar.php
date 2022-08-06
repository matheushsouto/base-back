<?php

namespace Modules\Base\Facade;

use Illuminate\Routing\ResourceRegistrar as OriginalRegistrar;
use Illuminate\Routing\Route;

class ResourceRegistrar extends OriginalRegistrar
{
    /**
     * The default actions for a resourceful controller.
     *
     * @var array
     */
    protected $resourceDefaults = ['index', 'fetchPair', 'create', 'store', 'show', 'edit', 'update', 'bulkDelete', 'destroy', 'bulkUpdate'];

    /**
     * Add the bulkDelete method for a resourceful route.
     *
     * @param string $name
     * @param string $base
     * @param string $controller
     * @param array $options
     * @return Route
     */
    protected function addResourceBulkDelete($name, $base, $controller, $options)
    {
        $uri = $this->getResourceUri($name) . '/bulk';

        $action = $this->getResourceAction($name, $controller, 'bulkDelete', $options);

        return $this->router->delete($uri, $action);
    }

    /**
     * Add the bulkUpdate method for a resourceful route.
     *
     * @param string $name
     * @param string $base
     * @param string $controller
     * @param array $options
     * @return Route
     */
    protected function addResourceBulkUpdate($name, $base, $controller, $options)
    {
        $uri = $this->getResourceUri($name) . '/bulk';

        $action = $this->getResourceAction($name, $controller, 'bulkUpdate', $options);

        return $this->router->post($uri, $action);
    }

    /**
     * Add the fetchPair method for a resourceful route.
     *
     * @param string $name
     * @param string $base
     * @param string $controller
     * @param array $options
     * @return Route
     */
    protected function addResourceFetchPair($name, $base, $controller, $options)
    {
        $uri = $this->getResourceUri($name) . '/fetch-pair';

        $action = $this->getResourceAction($name, $controller, 'fetchPair', $options);

        return $this->router->get($uri, $action);
    }
}
