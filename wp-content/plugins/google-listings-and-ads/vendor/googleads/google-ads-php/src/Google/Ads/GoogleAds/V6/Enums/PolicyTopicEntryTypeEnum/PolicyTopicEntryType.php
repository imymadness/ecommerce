<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/policy_topic_entry_type.proto

namespace Google\Ads\GoogleAds\V6\Enums\PolicyTopicEntryTypeEnum;

use UnexpectedValueException;

/**
 * The possible policy topic entry types.
 *
 * Protobuf type <code>google.ads.googleads.v6.enums.PolicyTopicEntryTypeEnum.PolicyTopicEntryType</code>
 */
class PolicyTopicEntryType
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The resource will not be served.
     *
     * Generated from protobuf enum <code>PROHIBITED = 2;</code>
     */
    const PROHIBITED = 2;
    /**
     * The resource will not be served under some circumstances.
     *
     * Generated from protobuf enum <code>LIMITED = 4;</code>
     */
    const LIMITED = 4;
    /**
     * The resource cannot serve at all because of the current targeting
     * criteria.
     *
     * Generated from protobuf enum <code>FULLY_LIMITED = 8;</code>
     */
    const FULLY_LIMITED = 8;
    /**
     * May be of interest, but does not limit how the resource is served.
     *
     * Generated from protobuf enum <code>DESCRIPTIVE = 5;</code>
     */
    const DESCRIPTIVE = 5;
    /**
     * Could increase coverage beyond normal.
     *
     * Generated from protobuf enum <code>BROADENING = 6;</code>
     */
    const BROADENING = 6;
    /**
     * Constrained for all targeted countries, but may serve in other countries
     * through area of interest.
     *
     * Generated from protobuf enum <code>AREA_OF_INTEREST_ONLY = 7;</code>
     */
    const AREA_OF_INTEREST_ONLY = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PROHIBITED => 'PROHIBITED',
        self::LIMITED => 'LIMITED',
        self::FULLY_LIMITED => 'FULLY_LIMITED',
        self::DESCRIPTIVE => 'DESCRIPTIVE',
        self::BROADENING => 'BROADENING',
        self::AREA_OF_INTEREST_ONLY => 'AREA_OF_INTEREST_ONLY',
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
class_alias(PolicyTopicEntryType::class, \Google\Ads\GoogleAds\V6\Enums\PolicyTopicEntryTypeEnum_PolicyTopicEntryType::class);

