<?php

/*
 * Copyright (c) 2021 Juan Valero
 *
 * This file is licensed under MIT license.
 * Please refer to LICENSE for further details.
 */

namespace Macao\Pluto;

use Psr\Container\ContainerExceptionInterface;
use RuntimeException;

/**
 * Default {@link ContainerExceptionInterface} implementation.
 *
 * @author Juan Valero <choukaschups@gmail.com>
 */
class ContainerException extends RuntimeException implements ContainerExceptionInterface
{

}
