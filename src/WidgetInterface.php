<?php
/**
 * PHP Strict.
 * 
 * @copyright   Copyright (C) 2018 - 2019 Enikeishik <enikeishik@gmail.com>. All rights reserved.
 * @author      Enikeishik <enikeishik@gmail.com>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

declare(strict_types=1);

namespace PhpStrict\WidgetsProducer;

/**
 * Describes the interface of a widget.
 */
interface WidgetInterface
{
    /**
     * @return string
     */
    public function getTitle(): string;
    
    /**
     * @return string
     */
    public function getContent(): string;
}
