<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/errors/field_error.proto

namespace Google\Ads\GoogleAds\V6\Errors\FieldErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible field errors.
 *
 * Protobuf type <code>google.ads.googleads.v6.errors.FieldErrorEnum.FieldError</code>
 */
class FieldError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The required field was not present.
     *
     * Generated from protobuf enum <code>REQUIRED = 2;</code>
     */
    const REQUIRED = 2;
    /**
     * The field attempted to be mutated is immutable.
     *
     * Generated from protobuf enum <code>IMMUTABLE_FIELD = 3;</code>
     */
    const IMMUTABLE_FIELD = 3;
    /**
     * The field's value is invalid.
     *
     * Generated from protobuf enum <code>INVALID_VALUE = 4;</code>
     */
    const INVALID_VALUE = 4;
    /**
     * The field cannot be set.
     *
     * Generated from protobuf enum <code>VALUE_MUST_BE_UNSET = 5;</code>
     */
    const VALUE_MUST_BE_UNSET = 5;
    /**
     * The required repeated field was empty.
     *
     * Generated from protobuf enum <code>REQUIRED_NONEMPTY_LIST = 6;</code>
     */
    const REQUIRED_NONEMPTY_LIST = 6;
    /**
     * The field cannot be cleared.
     *
     * Generated from protobuf enum <code>FIELD_CANNOT_BE_CLEARED = 7;</code>
     */
    const FIELD_CANNOT_BE_CLEARED = 7;
    /**
     * The field's value is on a deny-list for this field.
     *
     * Generated from protobuf enum <code>BLOCKED_VALUE = 9;</code>
     */
    const BLOCKED_VALUE = 9;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::REQUIRED => 'REQUIRED',
        self::IMMUTABLE_FIELD => 'IMMUTABLE_FIELD',
        self::INVALID_VALUE => 'INVALID_VALUE',
        self::VALUE_MUST_BE_UNSET => 'VALUE_MUST_BE_UNSET',
        self::REQUIRED_NONEMPTY_LIST => 'REQUIRED_NONEMPTY_LIST',
        self::FIELD_CANNOT_BE_CLEARED => 'FIELD_CANNOT_BE_CLEARED',
        self::BLOCKED_VALUE => 'BLOCKED_VALUE',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldError::class, \Google\Ads\GoogleAds\V6\Errors\FieldErrorEnum_FieldError::class);

