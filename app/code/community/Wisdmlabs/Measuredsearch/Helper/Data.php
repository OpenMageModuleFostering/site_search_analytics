<?php
/**
 * Measured Search
 */

class Wisdmlabs_Measuredsearch_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Config paths for using throughout the code
     */
    const XML_PATH_ACTIVE  = 'wdm_config/wdm_group/active';
    const XML_PATH_APIKEY = 'wdm_config/wdm_group/apikey';

    /**
     * Whether Universal GA is ready to use
     *
     * @param mixed $store
     * @return bool
     */
    public function ms_apikey()
    {
        $apikey = Mage::getStoreConfig('wdm_config/wdm_group/apikey',Mage::app()->getStore());
        return $apikey;
    }
    
    public function ismeasuredsearchavailable()
    {
        $status = Mage::getStoreConfig('wdm_config/wdm_group/active',Mage::app()->getStore());
        return $status;
    }
    
}
