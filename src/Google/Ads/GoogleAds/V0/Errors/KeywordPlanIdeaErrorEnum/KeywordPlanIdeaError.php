<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/keyword_plan_idea_error.proto

namespace Google\Ads\GoogleAds\V0\Errors\KeywordPlanIdeaErrorEnum;

/**
 * Enum describing possible errors from KeywordPlanIdeaService.
 *
 * Protobuf type <code>google.ads.googleads.v0.errors.KeywordPlanIdeaErrorEnum.KeywordPlanIdeaError</code>
 */
class KeywordPlanIdeaError
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
     * Error when crawling the input URL.
     *
     * Generated from protobuf enum <code>URL_CRAWL_ERROR = 2;</code>
     */
    const URL_CRAWL_ERROR = 2;
    /**
     * The input has an invalid value.
     *
     * Generated from protobuf enum <code>INVALID_VALUE = 3;</code>
     */
    const INVALID_VALUE = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeywordPlanIdeaError::class, \Google\Ads\GoogleAds\V0\Errors\KeywordPlanIdeaErrorEnum_KeywordPlanIdeaError::class);

