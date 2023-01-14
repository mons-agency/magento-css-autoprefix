<?php
/**
 * Copyright Mons Agency Ltd. Some rights reserved.
 * See copying.md for details.
 */

namespace Mons\CssAutoprefix\PreProcessor;

use Magento\Framework\View\Asset\PreProcessor\Chain;
use Magento\Framework\View\Asset\PreProcessorInterface;
use Mons\CssAutoprefix\PreProcessor\Adapter\Css\Autoprefix as AutoprefixAdapter;

class Autoprefix implements PreProcessorInterface
{
    /**
     * @param AutoprefixAdapter $adapter
     */
    public function __construct(
        protected AutoprefixAdapter $adapter
    )
    {}

    /**
     * {@inheritDoc}
     */
    public function process(Chain $chain)
    {
        $content = $this->adapter->compile($chain->getContent());

        $chain->setContent($content);
    }
}
