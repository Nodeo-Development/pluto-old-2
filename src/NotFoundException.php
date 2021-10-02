<?php

/*
 * Copyright (c) 2021 Juan Valero
 *
 * This file is licensed under MIT license.
 * Please refer to LICENSE for further details.
 */

namespace Macao\Pluto;

use Exception;
use JetBrains\PhpStorm\Pure;
use Psr\Container\NotFoundExceptionInterface;
use RuntimeException;

/**
 * Default {@link NotFoundExceptionInterface} implementation.
 *
 * @author Juan Valero <choukaschups@gmail.com>
 */
class NotFoundException extends RuntimeException implements NotFoundExceptionInterface
{
    /**
     * NotFoundException constructor.
     *
     * @param string $id The entry id that was not found.
     */
    #[Pure] public function __construct(string $id)
    {
        parent::__construct(
            sprintf("Entry with id %s was not found in the container", $id)
        );
    }
}
