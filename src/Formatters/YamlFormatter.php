<?php namespace FreedomCore\Swagger\Formatters;

use FreedomCore\Swagger\Exceptions\ExtensionNotLoaded;

/**
 * Class YamlFormatter
 * @package FreedomCore\Swagger\Formatters
 */
class YamlFormatter extends AbstractFormatter {

    /**
     * @inheritDoc
     * @return string
     * @throws ExtensionNotLoaded
     */
    public function format(): string {
        if (!extension_loaded('yaml')) {
            throw new ExtensionNotLoaded('YAML extends must be loaded to use the `yaml` output format');
        }
        return yaml_emit($this->documentation);
    }

}
