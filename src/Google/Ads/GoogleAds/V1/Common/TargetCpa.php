<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/bidding.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An automated bid strategy that sets bids to help get as many conversions as
 * possible at the target cost-per-acquisition (CPA) you set.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.TargetCpa</code>
 */
class TargetCpa extends \Google\Protobuf\Internal\Message
{
    /**
     * Average CPA target.
     * This target should be greater than or equal to minimum billable unit based
     * on the currency for the account.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_cpa_micros = 1;</code>
     */
    private $target_cpa_micros = null;
    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 2;</code>
     */
    private $cpc_bid_ceiling_micros = null;
    /**
     * Minimum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_floor_micros = 3;</code>
     */
    private $cpc_bid_floor_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $target_cpa_micros
     *           Average CPA target.
     *           This target should be greater than or equal to minimum billable unit based
     *           on the currency for the account.
     *     @type \Google\Protobuf\Int64Value $cpc_bid_ceiling_micros
     *           Maximum bid limit that can be set by the bid strategy.
     *           The limit applies to all keywords managed by the strategy.
     *     @type \Google\Protobuf\Int64Value $cpc_bid_floor_micros
     *           Minimum bid limit that can be set by the bid strategy.
     *           The limit applies to all keywords managed by the strategy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Average CPA target.
     * This target should be greater than or equal to minimum billable unit based
     * on the currency for the account.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_cpa_micros = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getTargetCpaMicros()
    {
        return $this->target_cpa_micros;
    }

    /**
     * Average CPA target.
     * This target should be greater than or equal to minimum billable unit based
     * on the currency for the account.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_cpa_micros = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setTargetCpaMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->target_cpa_micros = $var;

        return $this;
    }

    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCpcBidCeilingMicros()
    {
        return $this->cpc_bid_ceiling_micros;
    }

    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCpcBidCeilingMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->cpc_bid_ceiling_micros = $var;

        return $this;
    }

    /**
     * Minimum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_floor_micros = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCpcBidFloorMicros()
    {
        return $this->cpc_bid_floor_micros;
    }

    /**
     * Minimum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_floor_micros = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCpcBidFloorMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->cpc_bid_floor_micros = $var;

        return $this;
    }

}

