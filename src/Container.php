<?php

/*
 * Copyright (c) 2021 Juan Valero
 *
 * This file is licensed under MIT license.
 * Please refer to LICENSE for further details.
 */

namespace Macao\Pluto;

use Psr\Container\ContainerInterface;

/**
 * Default {@link ContainerInterface} implementation.
 *
 * @author Juan Valero <choukaschups@gmail.com>
 */
class Container implements ContainerInterface
{
    /**
     * @inheritDoc
     */
    public function get(string $id)
    {
        if ($this->has($id)) {
            throw new NotFoundException($id);
        }

        return null;
    }

    /**
     * @inheritDoc
     */
    public function has(string $id): bool
    {
        return false;
    }
}
