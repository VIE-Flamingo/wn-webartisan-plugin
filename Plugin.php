<?php

namespace Winter\WebArtisan;

use Backend;
use System\Classes\PluginBase;

/**
 * Artisan Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'winter.webartisan::lang.plugin.name',
            'description' => 'winter.webartisan::lang.plugin.label',
            'author' => 'Vojta Svoboda',
            'icon' => 'icon-forward',
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'category' => 'system::lang.system.categories.system',
                'label' => 'winter.webartisan::lang.settings.label',
                'description' => 'winter.webartisan::lang.settings.description',
                'icon' => 'icon-forward',
                'class' => 'Winter\WebArtisan\Models\Settings',
                'order' => 600,
                'permissions' => [
                    'winter.webartisan.access_settings',
                ],
            ],
        ];
    }

    public function registerPermissions()
    {
        return [
            'winter.webartisan.access_settings' => [
                'tab' => 'winter.webartisan::lang.plugin.name',
                'label' => 'winter.webartisan::lang.permissions.settings'
            ],
        ];
    }
}
