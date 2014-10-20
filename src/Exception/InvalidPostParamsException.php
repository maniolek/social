<?php
/**
 * This file is part of Vegas package
 *
 * @author Tomasz Borodziuk <tomasz.borodziuk@amsterdam-standard.pl>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage http://vegas-cmf.github.io
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vegas\Social\Exception;

/**
 * Class InvalidPostParamsException
 * @package Vegas\Social\Exception
 */
class InvalidPostParamsException extends \Vegas\Social\Exception
{
    /**
     * @var string
     */
    protected $message = 'Param `%s` is not set';

    /**
     * @param string $param
     */
    public function __construct($param)
    {
        $this->message = sprintf($this->message, $param);
    }
} 