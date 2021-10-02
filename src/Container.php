<?php

/*
 * Copyright (c) 2021 Juan Valero
 *
 * This file is licensed under MIT license.
 * Please refer to LICENSE for further details.
 */

namespace Macao\Pluto;

use JetBrains\PhpStorm\Pure;

/**
 * Represents a container in which dependencies are stored.
 * It exposes methods to get the dependencies in it.
 *
 * It is <strong>strongly</strong> recommended using this interface as
 * little as possible, and rather let Pluto take care of automatically injecting
 * dependencies into your classes.
 *
 * @author Juan Valero <choukaschups@gmail.com>
 */
interface Container
{
    /**
     * Returns the entry associated to the specified id.
     *
     * @template T The entry type, if the id is a class name.
     *
     * @param string|class-string<T> $id The entry id.
     *
     * @return mixed|T The entry.
     * @throws NotFoundException If no entry with the specified id has been
     * found.
     * @throws ContainerException If an exception occurred while resolving
     * the entry.
     */
    public function get(string $id): mixed;

    /**
     * Checks whether the container has an entry associated to the specified
     * id.
     *
     * @param string $id The entry id.
     *
     * @return bool <code>true</code> if the container has an entry
     * associated to the specified id, <code>false</code> otherwise.
     */
    #[Pure] public function has(string $id): bool;
}
