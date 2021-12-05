<?php namespace Dimti\Elvenar;

use Backend;
use Dimti\Elvenar\Classes\Registration\BootExtensions;
use System\Classes\PluginBase;

/**
 * elvenar Plugin Information File
 */
class Plugin extends PluginBase
{
    use BootExtensions;

    public $require = ['Octobro.API', 'RainLab.User'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'elvenar',
            'description' => 'No description provided yet...',
            'author'      => 'dimti',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        $this->registerExtensions();
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Dimti\Elvenar\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'dimti.elvenar.some_permission' => [
                'tab' => 'elvenar',
                'label' => 'Some permission'
            ],
        ];
    }
}
