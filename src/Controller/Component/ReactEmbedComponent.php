<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Http\Exception\NotFoundException;

/**
 * ReactEmbed component
 */
class ReactEmbedComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array<string, mixed>
     */
    protected $_defaultConfig = [];

    public function assets($appName) {
        $file = WWW_ROOT . $appName . DS . 'asset-manifest.json';

        if(!file_exists($file)) {
            throw new NotFoundException('Could not find asset-manifest in ' . $appName);
        }

        $contents = file_get_contents($file);

        $assetManifest = json_decode($contents);

        $assets = collection($assetManifest->entrypoints)
            ->reduce(function($accum, $entryPoint) use ($appName) {
                $extension = pathinfo($entryPoint, PATHINFO_EXTENSION);

                return array_merge(
                    [ 
                        $extension => DS . $appName . DS . $entryPoint
                    ],
                    $accum
                );
            }, []);

        $controller = $this->getController();

        $controller->set($assets);
    }
}
