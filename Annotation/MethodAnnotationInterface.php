<?php

/**
 * Part of earth project.
 *
 * @copyright  Copyright (C) 2020 .
 * @license    LGPL-2.0-or-later
 */

namespace Windwalker\DI\Annotation;

use Windwalker\DI\Container;

/**
 * Interface MethodAnnotationInterface
 *
 * @since  3.5.19
 */
interface MethodAnnotationInterface
{
    /**
     * handle
     *
     * @param Container         $container
     * @param \Closure          $closure
     * @param \ReflectionMethod $method
     *
     * @return  \Closure
     *
     * @since  3.5.19
     */
    public function __invoke(Container $container, \Closure $closure, \ReflectionMethod $method);
}
