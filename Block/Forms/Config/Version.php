<?php
declare(strict_types=1);

namespace TradeCentric\Version\Block\Forms\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;
use TradeCentric\Version\Model\ModuleVersion;
use Magento\Backend\Block\Template\Context;

/**
 * Class Version
 * @package Punchout2Go\Punchout\Block\Forms\Config
 */
class Version extends Field
{
    /**
     * @var ModuleVersion
     */
    protected $moduleVersion;

    /**
     * @var string
     */
    protected $moduleName;

    /**
     * @param Context $templateContext
     * @param ModuleVersion $moduleVersion
     * @param string $moduleName
     * @param array $data
     */
    public function __construct(
        Context $templateContext,
        ModuleVersion $moduleVersion,
        string $moduleName,
        array $data = []
    ) {
        $this->moduleVersion = $moduleVersion;
        $this->moduleName = $moduleName;
        parent::__construct($templateContext, $data);
    }

    /**
     * @param AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        return __(
            '<label class="label"><span>' . $this->moduleVersion->getModuleVersion($this->moduleName) . '</span></label>'
        );
    }
}
