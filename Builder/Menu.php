<?php

/**
 * This file is part of the pd-admin pd-menu package.
 *
 * @package     pd-menu
 * @license     LICENSE
 * @author      Ramazan APAYDIN <apaydin541@gmail.com>
 * @link        https://github.com/appaydin/pd-menu
 */

namespace Pd\MenuBundle\Builder;

/**
 * Menu Builder.
 *
 * @author Ramazan APAYDIN <apaydin541@gmail.com>
 */
class Menu implements MenuInterface
{
    /**
     * Creating Menu.
     *
     * @param array $options
     *
     * @return ItemInterface
     */
    public function createMenu(array $options = []): ItemInterface
    {
        return $this->createRoot('pd_menu');
    }

    /**
     * Create Menu Item.
     *
     * @param string $name
     * @param bool $event
     *
     * @return ItemInterface
     */
    final public function createRoot(string $name, $event = true): ItemInterface
    {
        return new Item($name, $event);
    }
}
