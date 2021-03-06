<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/account_budget.proto

namespace Google\Ads\GoogleAds\V0\Resources\AccountBudget;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A pending proposal associated with the enclosing account-level budget,
 * if applicable.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.AccountBudget.PendingAccountBudgetProposal</code>
 */
class PendingAccountBudgetProposal extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_proposal = 1;</code>
     */
    private $account_budget_proposal = null;
    /**
     * The type of this proposal, e.g. END to end the budget associated
     * with this proposal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalType proposal_type = 2;</code>
     */
    private $proposal_type = 0;
    /**
     * The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     */
    private $name = null;
    /**
     * The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4;</code>
     */
    private $start_date_time = null;
    /**
     * A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 9;</code>
     */
    private $purchase_order_number = null;
    /**
     * Notes associated with this budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue notes = 10;</code>
     */
    private $notes = null;
    /**
     * The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 11;</code>
     */
    private $creation_date_time = null;
    protected $end_time;
    protected $spending_limit;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $account_budget_proposal
     *           The resource name of the proposal.
     *           AccountBudgetProposal resource names have the form:
     *           `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *     @type int $proposal_type
     *           The type of this proposal, e.g. END to end the budget associated
     *           with this proposal.
     *     @type \Google\Protobuf\StringValue $name
     *           The name to assign to the account-level budget.
     *     @type \Google\Protobuf\StringValue $start_date_time
     *           The start time in yyyy-MM-dd HH:mm:ss format.
     *     @type \Google\Protobuf\StringValue $purchase_order_number
     *           A purchase order number is a value that helps users reference this budget
     *           in their monthly invoices.
     *     @type \Google\Protobuf\StringValue $notes
     *           Notes associated with this budget.
     *     @type \Google\Protobuf\StringValue $creation_date_time
     *           The time when this account-level budget proposal was created.
     *           Formatted as yyyy-MM-dd HH:mm:ss.
     *     @type \Google\Protobuf\StringValue $end_date_time
     *           The end time in yyyy-MM-dd HH:mm:ss format.
     *     @type int $end_time_type
     *           The end time as a well-defined type, e.g. FOREVER.
     *     @type \Google\Protobuf\Int64Value $spending_limit_micros
     *           The spending limit in micros.  One million is equivalent to
     *           one unit.
     *     @type int $spending_limit_type
     *           The spending limit as a well-defined type, e.g. INFINITE.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\AccountBudget::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_proposal = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAccountBudgetProposal()
    {
        return $this->account_budget_proposal;
    }

    /**
     * The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_proposal = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAccountBudgetProposal($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->account_budget_proposal = $var;

        return $this;
    }

    /**
     * The type of this proposal, e.g. END to end the budget associated
     * with this proposal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalType proposal_type = 2;</code>
     * @return int
     */
    public function getProposalType()
    {
        return $this->proposal_type;
    }

    /**
     * The type of this proposal, e.g. END to end the budget associated
     * with this proposal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalType proposal_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setProposalType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\AccountBudgetProposalTypeEnum_AccountBudgetProposalType::class);
        $this->proposal_type = $var;

        return $this;
    }

    /**
     * The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStartDateTime()
    {
        return $this->start_date_time;
    }

    /**
     * The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStartDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->start_date_time = $var;

        return $this;
    }

    /**
     * A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPurchaseOrderNumber()
    {
        return $this->purchase_order_number;
    }

    /**
     * A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPurchaseOrderNumber($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->purchase_order_number = $var;

        return $this;
    }

    /**
     * Notes associated with this budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue notes = 10;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Notes associated with this budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue notes = 10;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setNotes($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->notes = $var;

        return $this;
    }

    /**
     * The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 11;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCreationDateTime()
    {
        return $this->creation_date_time;
    }

    /**
     * The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 11;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCreationDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->creation_date_time = $var;

        return $this;
    }

    /**
     * The end time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getEndDateTime()
    {
        return $this->readOneof(5);
    }

    /**
     * The end time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setEndDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The end time as a well-defined type, e.g. FOREVER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.TimeTypeEnum.TimeType end_time_type = 6;</code>
     * @return int
     */
    public function getEndTimeType()
    {
        return $this->readOneof(6);
    }

    /**
     * The end time as a well-defined type, e.g. FOREVER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.TimeTypeEnum.TimeType end_time_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setEndTimeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\TimeTypeEnum_TimeType::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * The spending limit in micros.  One million is equivalent to
     * one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value spending_limit_micros = 7;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getSpendingLimitMicros()
    {
        return $this->readOneof(7);
    }

    /**
     * The spending limit in micros.  One million is equivalent to
     * one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value spending_limit_micros = 7;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setSpendingLimitMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * The spending limit as a well-defined type, e.g. INFINITE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.SpendingLimitTypeEnum.SpendingLimitType spending_limit_type = 8;</code>
     * @return int
     */
    public function getSpendingLimitType()
    {
        return $this->readOneof(8);
    }

    /**
     * The spending limit as a well-defined type, e.g. INFINITE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.SpendingLimitTypeEnum.SpendingLimitType spending_limit_type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setSpendingLimitType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\SpendingLimitTypeEnum_SpendingLimitType::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->whichOneof("end_time");
    }

    /**
     * @return string
     */
    public function getSpendingLimit()
    {
        return $this->whichOneof("spending_limit");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PendingAccountBudgetProposal::class, \Google\Ads\GoogleAds\V0\Resources\AccountBudget_PendingAccountBudgetProposal::class);

