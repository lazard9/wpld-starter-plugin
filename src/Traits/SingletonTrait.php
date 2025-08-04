<?php

namespace WPLDStarterPlugin\Traits;

/**
 * Trait SingletonTrait
 * Implements singleton pattern for the class using this trait.
 *
 * @package WPLDStarterPlugin\Traits
 */
trait SingletonTrait
{
    /**
     * Class instance
     *
     * @var static|null
     */
    private static $instance = null;

    /**
     * Returns the class instance.
     *
     * @return static
     */
    public static function getInstance(): self
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
