<?php
/**
 * restifydb - expose your databases as REST web services in minutes
 *
 * @copyright (C) 2015 Daniel CHIRITA
 * @version 1.1
 * @author Daniel CHIRITA <daniel.chirita at gmail dot com>
 * @link https://restifydb.com/
 *
 * This file is part of restifydb framework.
 *
 * @license https://restifydb.com/#license
 *
 */


namespace restify\services;


use restify\exceptions\RestifyException;

abstract class BaseService
{

    public function execute()
    {
        try {
            $this->_execute();
        } catch (RestifyException $re) {
            $re->handle();
        } catch (\Exception $e) {
            RestifyException::fromException($e)->handle();
        }

    }

    protected abstract function _execute();

} 