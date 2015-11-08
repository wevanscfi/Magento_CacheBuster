<?php 
/**
 * Cache Clear Observer
 *
 * @package    Wevans_CacheBuster
 * @author     wevanscfi
 */
class Wevans_CacheBuster_Model_Observer
{
  public function updateVersion()
  {
    if (Mage::getStoreConfig('system/cache_buster/auto', Mage::app()->getStore())) {
      $dateTime = date_timestamp_get(new DateTime());
      Mage::getConfig()->saveConfig('system/cache_buster/version', $dateTime);
    }
  }
}
