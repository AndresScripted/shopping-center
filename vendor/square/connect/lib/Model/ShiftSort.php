<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * ShiftSort Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class ShiftSort implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'field' => 'string',
        'order' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'field' => 'field',
        'order' => 'order'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'field' => 'setField',
        'order' => 'setOrder'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'field' => 'getField',
        'order' => 'getOrder'
    );
  
    /**
      * $field The field to sort on. See [ShiftSortField](#type-shiftsortfield) for possible values
      * @var string
      */
    protected $field;
    /**
      * $order The order in which results are returned. Defaults to DESC. See [SortOrder](#type-sortorder) for possible values
      * @var string
      */
    protected $order;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["field"])) {
              $this->field = $data["field"];
            } else {
              $this->field = null;
            }
            if (isset($data["order"])) {
              $this->order = $data["order"];
            } else {
              $this->order = null;
            }
        }
    }
    /**
     * Gets field
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }
  
    /**
     * Sets field
     * @param string $field The field to sort on. See [ShiftSortField](#type-shiftsortfield) for possible values
     * @return $this
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }
    /**
     * Gets order
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }
  
    /**
     * Sets order
     * @param string $order The order in which results are returned. Defaults to DESC. See [SortOrder](#type-sortorder) for possible values
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
