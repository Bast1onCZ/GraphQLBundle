<?php
declare(strict_types=1);

namespace BastSys\GraphQLBundle\Exception\Process;

use Exception;
use Throwable;

/**
 * Class GraphQLException
 * @package BastSys\GraphQLBundle\Exception\Process\GraphQL
 * @author  mirkl
 */
class GraphQLException extends Exception
{
    /**
     * GraphQLException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable $previous
     */
    public function __construct($message = "A graphQL exception occured", $code = 500, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
