<?php namespace Lime\LiveAssets;

use App;
use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase {
  public function pluginDetails() {
    return [
      'name'        => 'lime.live-assets::lang.plugin_name',
      'description' => 'lime.live-assets::lang.plugin_description',
      'author'      => 'lime',
      'icon'        => 'icon-leaf'
    ];
  }

  public function register() {
  }

  public function boot() {
  }

  public function registerComponents() {
    return [];
  }

  public function registerPermissions() {
    return [];
  }

  public function registerNavigation() {
    return [];
  }

  public function registerMarkupTags() {
    return [
      'filters' => [
        'live' => [$this, 'live']
      ],
    ];
  }

  public function live($input) {
    if (App::environment() === 'live') {
      $input = str_replace('8000', '4200', $input);
    }
    return $input;
  }
}
