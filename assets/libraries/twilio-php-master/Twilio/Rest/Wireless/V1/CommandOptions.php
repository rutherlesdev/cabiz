<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Wireless\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class CommandOptions {
    /**
     * @param string $sim The sim
     * @param string $status The status
     * @param string $direction The direction
     * @return ReadCommandOptions Options builder
     */
    public static function read($sim = Values::NONE, $status = Values::NONE, $direction = Values::NONE) {
        return new ReadCommandOptions($sim, $status, $direction);
    }

    /**
     * @param string $sim The sim
     * @param string $callbackMethod The callback_method
     * @param string $callbackUrl The callback_url
     * @param string $commandMode The command_mode
     * @param string $includeSid The include_sid
     * @return CreateCommandOptions Options builder
     */
    public static function create($sim = Values::NONE, $callbackMethod = Values::NONE, $callbackUrl = Values::NONE, $commandMode = Values::NONE, $includeSid = Values::NONE) {
        return new CreateCommandOptions($sim, $callbackMethod, $callbackUrl, $commandMode, $includeSid);
    }
}

class ReadCommandOptions extends Options {
    /**
     * @param string $sim The sim
     * @param string $status The status
     * @param string $direction The direction
     */
    public function __construct($sim = Values::NONE, $status = Values::NONE, $direction = Values::NONE) {
        $this->options['sim'] = $sim;
        $this->options['status'] = $status;
        $this->options['direction'] = $direction;
    }

    /**
     * The sim
     * 
     * @param string $sim The sim
     * @return $this Fluent Builder
     */
    public function setSim($sim) {
        $this->options['sim'] = $sim;
        return $this;
    }

    /**
     * The status
     * 
     * @param string $status The status
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * The direction
     * 
     * @param string $direction The direction
     * @return $this Fluent Builder
     */
    public function setDirection($direction) {
        $this->options['direction'] = $direction;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Wireless.V1.ReadCommandOptions ' . implode(' ', $options) . ']';
    }
}

class CreateCommandOptions extends Options {
    /**
     * @param string $sim The sim
     * @param string $callbackMethod The callback_method
     * @param string $callbackUrl The callback_url
     * @param string $commandMode The command_mode
     * @param string $includeSid The include_sid
     */
    public function __construct($sim = Values::NONE, $callbackMethod = Values::NONE, $callbackUrl = Values::NONE, $commandMode = Values::NONE, $includeSid = Values::NONE) {
        $this->options['sim'] = $sim;
        $this->options['callbackMethod'] = $callbackMethod;
        $this->options['callbackUrl'] = $callbackUrl;
        $this->options['commandMode'] = $commandMode;
        $this->options['includeSid'] = $includeSid;
    }

    /**
     * The sim
     * 
     * @param string $sim The sim
     * @return $this Fluent Builder
     */
    public function setSim($sim) {
        $this->options['sim'] = $sim;
        return $this;
    }

    /**
     * The callback_method
     * 
     * @param string $callbackMethod The callback_method
     * @return $this Fluent Builder
     */
    public function setCallbackMethod($callbackMethod) {
        $this->options['callbackMethod'] = $callbackMethod;
        return $this;
    }

    /**
     * The callback_url
     * 
     * @param string $callbackUrl The callback_url
     * @return $this Fluent Builder
     */
    public function setCallbackUrl($callbackUrl) {
        $this->options['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
     * The command_mode
     * 
     * @param string $commandMode The command_mode
     * @return $this Fluent Builder
     */
    public function setCommandMode($commandMode) {
        $this->options['commandMode'] = $commandMode;
        return $this;
    }

    /**
     * The include_sid
     * 
     * @param string $includeSid The include_sid
     * @return $this Fluent Builder
     */
    public function setIncludeSid($includeSid) {
        $this->options['includeSid'] = $includeSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Wireless.V1.CreateCommandOptions ' . implode(' ', $options) . ']';
    }
}