<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/keyword_match_type.proto

namespace Google\Ads\GoogleAds\V0\Enums\KeywordMatchTypeEnum;

/**
 * Possible Keyword match types.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.KeywordMatchTypeEnum.KeywordMatchType</code>
 */
class KeywordMatchType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Exact match.
     *
     * Generated from protobuf enum <code>EXACT = 2;</code>
     */
    const EXACT = 2;
    /**
     * Phrase match.
     *
     * Generated from protobuf enum <code>PHRASE = 3;</code>
     */
    const PHRASE = 3;
    /**
     * Broad match.
     *
     * Generated from protobuf enum <code>BROAD = 4;</code>
     */
    const BROAD = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeywordMatchType::class, \Google\Ads\GoogleAds\V0\Enums\KeywordMatchTypeEnum_KeywordMatchType::class);

