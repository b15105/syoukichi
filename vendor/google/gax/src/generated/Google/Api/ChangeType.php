<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/config_change.proto

namespace Google\Api;

/**
 * Classifies set of possible modifications to an object in the service
 * configuration.
 *
 * Protobuf enum <code>Google\Api\ChangeType</code>
 */
class ChangeType
{
    /**
     * No value was provided.
     *
     * Generated from protobuf enum <code>CHANGE_TYPE_UNSPECIFIED = 0;</code>
     */
    const CHANGE_TYPE_UNSPECIFIED = 0;
    /**
     * The changed object exists in the 'new' service configuration, but not
     * in the 'old' service configuration.
     *
     * Generated from protobuf enum <code>ADDED = 1;</code>
     */
    const ADDED = 1;
    /**
     * The changed object exists in the 'old' service configuration, but not
     * in the 'new' service configuration.
     *
     * Generated from protobuf enum <code>REMOVED = 2;</code>
     */
    const REMOVED = 2;
    /**
     * The changed object exists in both service configurations, but its value
     * is different.
     *
     * Generated from protobuf enum <code>MODIFIED = 3;</code>
     */
    const MODIFIED = 3;
}

