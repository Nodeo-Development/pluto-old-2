<?php

/*
 * Copyright (c) 2021 Juan Valero
 *
 * This file is licensed under MIT license.
 * Please refer to LICENSE for further details.
 */

namespace Macao\Pluto\Definition;

use JetBrains\PhpStorm\ArrayShape;

/**
 * A definition is an entry from the container that can be resolved using
 * {@link \Macao\Pluto\Definition\AbstractDefinition::resolve()}.
 *
 * @author Juan Valero <choukaschups@gmail.com>
 */
abstract class AbstractDefinition
{
    /**
     * Resolves the definition in the specified context.
     *
     * @param AbstractDefinition[] $bindings   The bound definitions.
     * @param array                $options    The options.
     * @param array                $breadcrumb The dependencies breadcrumb.
     *
     * @return mixed The resolved definition value.
     * @throws \Macao\Pluto\Definition\DefinitionException If an error occurred
     * during the definition resolution.
     */
    abstract public function resolve(
        array $bindings,
        #[ArrayShape([
            'autoWiring' => 'bool'
        ])] array $options,
        array $breadcrumb = []
    ): mixed;
}
