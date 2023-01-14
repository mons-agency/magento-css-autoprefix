<?php
/**
 * Copyright Mons Agency Ltd. Some rights reserved.
 * See copying.md for details.
 */

namespace Mons\CssAutoprefix\PreProcessor\Adapter\Css;

use Padaliyajay\PHPAutoprefixer\Autoprefixer;

class Autoprefix
{
    /**
     * @param array $vendors
     */
    public function __construct(
        protected array $vendors = []
    )
    {}

    /**
     * Add vendor prefixes to the CSS
     *
     * @param string $css
     * @return string
     */
    public function compile(string $css): string
    {
        $autoprefixer = new Autoprefixer($css);

        /** @see https://github.com/padaliyajay/php-autoprefixer#setvendors */
        if ($this->vendors) {
            $autoprefixer->setVendors($vendors);
        }

        return $autoprefixer->compile();
    }
}
