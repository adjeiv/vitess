<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 0.9.4
// Source: mysqlctl.proto
//   Date: 2015-09-25 17:57:39

namespace mysqlctl {

  class StartRequest extends \DrSlump\Protobuf\Message {


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'mysqlctl.StartRequest');

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }
  }
}

namespace mysqlctl {

  class StartResponse extends \DrSlump\Protobuf\Message {


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'mysqlctl.StartResponse');

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }
  }
}

namespace mysqlctl {

  class ShutdownRequest extends \DrSlump\Protobuf\Message {

    /**  @var boolean */
    public $wait_for_mysqld = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'mysqlctl.ShutdownRequest');

      // OPTIONAL BOOL wait_for_mysqld = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "wait_for_mysqld";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <wait_for_mysqld> has a value
     *
     * @return boolean
     */
    public function hasWaitForMysqld(){
      return $this->_has(1);
    }
    
    /**
     * Clear <wait_for_mysqld> value
     *
     * @return \mysqlctl\ShutdownRequest
     */
    public function clearWaitForMysqld(){
      return $this->_clear(1);
    }
    
    /**
     * Get <wait_for_mysqld> value
     *
     * @return boolean
     */
    public function getWaitForMysqld(){
      return $this->_get(1);
    }
    
    /**
     * Set <wait_for_mysqld> value
     *
     * @param boolean $value
     * @return \mysqlctl\ShutdownRequest
     */
    public function setWaitForMysqld( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace mysqlctl {

  class ShutdownResponse extends \DrSlump\Protobuf\Message {


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'mysqlctl.ShutdownResponse');

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }
  }
}

namespace mysqlctl {

  class RunMysqlUpgradeRequest extends \DrSlump\Protobuf\Message {


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'mysqlctl.RunMysqlUpgradeRequest');

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }
  }
}

namespace mysqlctl {

  class RunMysqlUpgradeResponse extends \DrSlump\Protobuf\Message {


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'mysqlctl.RunMysqlUpgradeResponse');

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }
  }
}

