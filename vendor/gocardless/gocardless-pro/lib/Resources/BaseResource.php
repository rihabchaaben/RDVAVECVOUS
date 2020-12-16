<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Resources;

use GoCardlessPro\Core\Exception\GoCardlessProException;

/**
 * Base class for resource responses in the API
 */
abstract class BaseResource
{
    private $data;
    public $api_response;

    /**
     * Initialise the model using an associative array. Will set values for all
     * valid properties, invalid or unrecognised properties will have no effect.
     *
     * @param \stdClass   $data         Data to populate the attributes
     * @param ApiResponse $api_response ApiResponse object.
     */
    public function __construct($data, $api_response = null)
    {
        $this->data = $data;

        foreach($data as $key => $value) {
            if (property_exists(get_class($this), $key)) {
                $this->{$key} = $value;
            }
        }
        $this->api_response = $api_response;
    }

    /**
     * Magic getter. If you try and access an unknown property, we
     * throw an exception. The default in PHP would be to return null, but
     * explicitly knowing when this is happening is more useful.
     *
     * @param  string $field the name of the field we're accessing
     * @throws Exception Throws an exception if the field is invalid.
     * @return mixed
     */
    public function __get( $field )
    {
        if (!property_exists(get_class($this), $field)) {
            throw new GoCardlessProException($field . ' is not a valid ' . $this->model_name . ' property');
        }
        return $this->{$field};
    }

    /**
     * Companion to the Magic getter.
     *
     * @param  string $field the name of the field we're accessing
     * @return bool
     */
    public function __isset( $field )
    {
        return property_exists(get_class($this), $field);
    }

    /**
     * Returns a string representation of the model
     *
     * @return string
     */
    public function __toString()
    {
        $ret = $this->model_name . " Class\n";
        $ret .= print_r($this->data, true);
        return $ret;
    }
}