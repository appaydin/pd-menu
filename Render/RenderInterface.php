<?php

/**
 * This file is part of the pd-admin pd-menu package.
 *
 * @package     pd-menu
 * @license     LICENSE
 * @author      Ramazan APAYDIN <apaydin541@gmail.com>
 * @link        https://github.com/appaydin/pd-menu
 */

namespace Pd\MenuBundle\Render;

use Pd\MenuBundle\Builder\ItemInterface;

/**
 * Render Interface.
 *
 * @author Ramazan APAYDIN <apaydin541@gmail.com>
 */
interface RenderInterface
{
    /**
     * Render Menu.
     *
     * @param ItemInterface $item
     * @param array $options
     *
     * @return string
     */
    public function render(ItemInterface $item, array $options = []): string;
}
