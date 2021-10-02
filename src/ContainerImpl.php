<?php

/*
 * Copyright (c) 2021 Juan Valero
 *
 * This file is licensed under MIT license.
 * Please refer to LICENSE for further details.
 */

namespace Macao\Pluto;

use JetBrains\PhpStorm\Pure;
use Psr\Container\ContainerInterface as PSRContainer;

/**
 * Default {@link Container} and {@link PSRContainer} implementation.
 *
 * @author Juan Valero <choukaschups@gmail.com>
 */
class ContainerImpl implements Container, PSRContainer
{
    /**
     * @inheritDoc
     */
    public function get(string $id): mixed
    {
        if ($this->has($id)) {
            throw new NotFoundException($id);
        }

        return null;
    }

    /**
     * @inheritDoc
     */
    #[Pure] public function has(string $id): bool
    {
        return false;
    }
}
