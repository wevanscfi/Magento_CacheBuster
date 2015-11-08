<?php

class Wevans_CacheBuster_Helper_Data extends Mage_Core_Helper_Abstract
{
  public function getVersion()
  { 
    if (Mage::getStoreConfig('system/cache_buster/enabled', Mage::app()->getStore())) {
      $versionNum = Mage::getStoreConfig('system/cache_buster/version', Mage::app()->getStore());
      return "?v=" . $versionNum;
    } else {
      return "";
    }
  }
}
