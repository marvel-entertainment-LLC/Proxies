<?php

namespace Proxies;

/**
 * MethodProxy interface
 *
 * Defines class interface of objects that behave as a method proxy.
 * This type of behavior in PHP is faciliated via __call magic method.
 * A robust implementation should provide feedback to detect
 * method availability and method invocation.
 *
 * @package    Proxies
 * @subpackage MethodProxy
 * @author     Eddy Nunez <enunez@marvel.com>
 */
interface MethodProxy
{
    // Look up just by method name
    public function hasMethod($methodName);

    // Look up by method and validate argument minimum requirements
    public function hasMethodAndArguments($methodName, array $arguments);

    // Where the magic happens
    public function __call($name, $args);
}