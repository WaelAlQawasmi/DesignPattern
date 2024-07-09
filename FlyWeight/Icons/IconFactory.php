<?php

namespace Icons;

class IconFactory
{
    private static $icons = [];

    public static function getIcon(string $iconName): IconImp
    {
        if (!isset(static::$icons[$iconName])) {
            switch ($iconName) {
                case "Square":
                    static::$icons[$iconName] = new Square();
                    break;
                case "Circle":
                    static::$icons[$iconName] = new Circle();
                    break;
                default:
                    throw new \InvalidArgumentException("Invalid icon name: " . $iconName);
            }
        }
        return static::$icons[$iconName];
    }
}
