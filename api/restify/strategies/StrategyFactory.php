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

namespace restify\strategies;


class StrategyFactory
{

    public static function getStrategy($type)
    {
        switch ($type) {
            case 'json':
                return new JSONExportStrategy();
            case 'xml':
                return new XMLExportStrategy();
            default:
                return new JSONExportStrategy();
        }
    }
} 