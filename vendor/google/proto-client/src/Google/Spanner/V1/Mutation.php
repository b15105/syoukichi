<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/mutation.proto

namespace Google\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A modification to one or more Cloud Spanner rows.  Mutations can be
 * applied to a Cloud Spanner database by sending them in a
 * [Commit][google.spanner.v1.Spanner.Commit] call.
 *
 * Generated from protobuf message <code>google.spanner.v1.Mutation</code>
 */
class Mutation extends \Google\Protobuf\Internal\Message
{
    protected $operation;

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\Mutation::initOnce();
        parent::__construct();
    }

    /**
     * Insert new rows in a table. If any of the rows already exist,
     * the write or transaction fails with error `ALREADY_EXISTS`.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Mutation.Write insert = 1;</code>
     * @return \Google\Spanner\V1\Mutation_Write
     */
    public function getInsert()
    {
        return $this->readOneof(1);
    }

    /**
     * Insert new rows in a table. If any of the rows already exist,
     * the write or transaction fails with error `ALREADY_EXISTS`.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Mutation.Write insert = 1;</code>
     * @param \Google\Spanner\V1\Mutation_Write $var
     * @return $this
     */
    public function setInsert($var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\Mutation_Write::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Update existing rows in a table. If any of the rows does not
     * already exist, the transaction fails with error `NOT_FOUND`.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Mutation.Write update = 2;</code>
     * @return \Google\Spanner\V1\Mutation_Write
     */
    public function getUpdate()
    {
        return $this->readOneof(2);
    }

    /**
     * Update existing rows in a table. If any of the rows does not
     * already exist, the transaction fails with error `NOT_FOUND`.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Mutation.Write update = 2;</code>
     * @param \Google\Spanner\V1\Mutation_Write $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\Mutation_Write::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Like [insert][google.spanner.v1.Mutation.insert], except that if the row already exists, then
     * its column values are overwritten with the ones provided. Any
     * column values not explicitly written are preserved.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Mutation.Write insert_or_update = 3;</code>
     * @return \Google\Spanner\V1\Mutation_Write
     */
    public function getInsertOrUpdate()
    {
        return $this->readOneof(3);
    }

    /**
     * Like [insert][google.spanner.v1.Mutation.insert], except that if the row already exists, then
     * its column values are overwritten with the ones provided. Any
     * column values not explicitly written are preserved.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Mutation.Write insert_or_update = 3;</code>
     * @param \Google\Spanner\V1\Mutation_Write $var
     * @return $this
     */
    public function setInsertOrUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\Mutation_Write::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Like [insert][google.spanner.v1.Mutation.insert], except that if the row already exists, it is
     * deleted, and the column values provided are inserted
     * instead. Unlike [insert_or_update][google.spanner.v1.Mutation.insert_or_update], this means any values not
     * explicitly written become `NULL`.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Mutation.Write replace = 4;</code>
     * @return \Google\Spanner\V1\Mutation_Write
     */
    public function getReplace()
    {
        return $this->readOneof(4);
    }

    /**
     * Like [insert][google.spanner.v1.Mutation.insert], except that if the row already exists, it is
     * deleted, and the column values provided are inserted
     * instead. Unlike [insert_or_update][google.spanner.v1.Mutation.insert_or_update], this means any values not
     * explicitly written become `NULL`.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Mutation.Write replace = 4;</code>
     * @param \Google\Spanner\V1\Mutation_Write $var
     * @return $this
     */
    public function setReplace($var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\Mutation_Write::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Delete rows from a table. Succeeds whether or not the named
     * rows were present.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Mutation.Delete delete = 5;</code>
     * @return \Google\Spanner\V1\Mutation_Delete
     */
    public function getDelete()
    {
        return $this->readOneof(5);
    }

    /**
     * Delete rows from a table. Succeeds whether or not the named
     * rows were present.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Mutation.Delete delete = 5;</code>
     * @param \Google\Spanner\V1\Mutation_Delete $var
     * @return $this
     */
    public function setDelete($var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\Mutation_Delete::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

