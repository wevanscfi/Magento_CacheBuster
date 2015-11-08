<?php

class Wevans_CacheBuster_Helper_Data extends Mage_Core_Helper_Abstract
{
  protected $_enabled;

  protected $_version;

  protected function getEnabled()
  {
    if (!isset($this->_enabled)) {
      $this->_enabled = Mage::getStoreConfig('system/cache_buster/enabled', Mage::app()->getStore());
    }
    return $this->_enabled;
  }

  protected function getVersion()
  {
    if (!isset($this->_version)) {
      $this->_version = Mage::getStoreConfig('system/cache_buster/version', Mage::app()->getStore());
    }
    return $this->_version;
  }

  protected function getVersionString()
  { 
    $versionNum = $this->getVersion();
    return "?v=" . $versionNum;
  }

  public function getVersionUrl($url)
  {
    if ($this->getEnabled()) {
      return $url . $this->getVersionString();
    } else {
      return $url;
    }
  }
}
