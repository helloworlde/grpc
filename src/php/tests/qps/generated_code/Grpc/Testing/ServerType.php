<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/control.proto

namespace Grpc\Testing;

use UnexpectedValueException;

/**
 * Protobuf type <code>grpc.testing.ServerType</code>
 */
class ServerType
{
    /**
     * Generated from protobuf enum <code>SYNC_SERVER = 0;</code>
     */
    const SYNC_SERVER = 0;
    /**
     * Generated from protobuf enum <code>ASYNC_SERVER = 1;</code>
     */
    const ASYNC_SERVER = 1;
    /**
     * Generated from protobuf enum <code>ASYNC_GENERIC_SERVER = 2;</code>
     */
    const ASYNC_GENERIC_SERVER = 2;
    /**
     * used for some language-specific variants
     *
     * Generated from protobuf enum <code>OTHER_SERVER = 3;</code>
     */
    const OTHER_SERVER = 3;
    /**
     * Generated from protobuf enum <code>CALLBACK_SERVER = 4;</code>
     */
    const CALLBACK_SERVER = 4;

    private static $valueToName = [
        self::SYNC_SERVER => 'SYNC_SERVER',
        self::ASYNC_SERVER => 'ASYNC_SERVER',
        self::ASYNC_GENERIC_SERVER => 'ASYNC_GENERIC_SERVER',
        self::OTHER_SERVER => 'OTHER_SERVER',
        self::CALLBACK_SERVER => 'CALLBACK_SERVER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

