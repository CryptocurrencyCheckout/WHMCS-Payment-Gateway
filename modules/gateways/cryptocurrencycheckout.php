<?php

/**
 * CryptocurrencyCheckout WHMCS Payment Gateway Module
 *
 * This Payment Gateway module allows you to integrate the CryptocurrencyCheckout 
 * Platform into your WHMCS Platform.
 * 
 * Author: CryptocurrencyCheckout
 * Author URI: https://cryptocurrencycheckout.com/
 * Version: 1.1.3
 * 
 * @see https://cryptocurrencycheckout.com/guides/whmcs
 * 
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @copyright Copyright (c) 2018-2019 CryptocurrencyCheckout (support@cryptocurrencycheckout.com) and WHMCS
 */

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}
/**
 * Module Meta Data
 *
 * @return array
 */
function cryptocurrencycheckout_MetaData()
{
    return array(
        'DisplayName' => 'CryptocurrencyCheckout',
        'APIVersion' => '1.1', // Use API Version 1.1
        'DisableLocalCredtCardInput' => true,
        'TokenisedStorage' => false,
    );
}
/**
 * Define gateway configuration options.
 *
 * @return array
 */
function cryptocurrencycheckout_config()
{
    return array(
        'FriendlyName' => array(
            'Type' => 'System',
            'Value' => 'CryptocurrencyCheckout',
        ),

        'PayNow' => array(
            'FriendlyName' => 'Pay Button',
            'Type' => 'text',
            'Size' => '25',
            'Default' => 'Pay with Cryptocurrency',
            'Description' => 'Pay Now Button Text',
        ),

        'StoreName' => array(
            'FriendlyName' => 'Store Name',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Enter your Unique Store Identifier',
        ),

        'StoreID' => array(
            'FriendlyName' => 'Store ID',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Enter your Store ID here',
        ),

        'ConnectionID' => array(
            'FriendlyName' => 'Connection ID',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Enter your Connection ID  here',
        ),

        'btcAddress' => array(
            'FriendlyName' => 'BTC Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'ethAddress' => array(
            'FriendlyName' => 'ETH Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'ltcAddress' => array(
            'FriendlyName' => 'LTC Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'dashAddress' => array(
            'FriendlyName' => 'DASH Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'sendAddress' => array(
            'FriendlyName' => 'SEND Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'cdzcAddress' => array(
            'FriendlyName' => 'CDZC Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'arrrAddress' => array(
            'FriendlyName' => 'ARRR Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'colxAddress' => array(
            'FriendlyName' => 'COLX Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'znzAddress' => array(
            'FriendlyName' => 'ZNZ Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'thcAddress' => array(
            'FriendlyName' => 'THC Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'ecaAddress' => array(
            'FriendlyName' => 'ECA Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'pivxAddress' => array(
            'FriendlyName' => 'PIVX Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'nbrAddress' => array(
            'FriendlyName' => 'NBR Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'galiAddress' => array(
            'FriendlyName' => 'GALI Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'bitcAddress' => array(
            'FriendlyName' => 'BITC Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'okAddress' => array(
            'FriendlyName' => 'OK Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'ethploAddress' => array(
            'FriendlyName' => 'ETHplode Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'arkAddress' => array(
            'FriendlyName' => 'ARK Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'veilAddress' => array(
            'FriendlyName' => 'VEIL Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'dogeAddress' => array(
            'FriendlyName' => 'DOGE Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'nbxAddress' => array(
            'FriendlyName' => 'NBX Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'xnvAddress' => array(
            'FriendlyName' => 'XNV Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'sumoAddress' => array(
            'FriendlyName' => 'SUMO Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'rpdAddress' => array(
            'FriendlyName' => 'RPD Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'telosAddress' => array(
            'FriendlyName' => 'Transcendence Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'kmdAddress' => array(
            'FriendlyName' => 'Komodo Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'vrscAddress' => array(
            'FriendlyName' => 'Verus Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'banAddress' => array(
            'FriendlyName' => 'BAN Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'xbtxAddress' => array(
            'FriendlyName' => 'XBTX Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'sinAddress' => array(
            'FriendlyName' => 'SIN Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'xrpAddress' => array(
            'FriendlyName' => 'XRP Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'APIToken' => array(
            'FriendlyName' => 'API Token',
            'Type' => 'textarea',
            'Rows' => '3',
            'Cols' => '60',
            'Description' => 'Enter your API Token  here',
        ),
    );
}
/**
 * Payment link.
 *
 * @param array $params Payment Gateway Module Parameters
 *
 * @return string
 */
function cryptocurrencycheckout_link($params)
{
    // Gateway Configuration Parameters
    $StoreID = $params['StoreID'];
    $StoreName = $params['StoreName'];
    $ConnectionID = $params['ConnectionID'];
    $APIToken = $params['APIToken'];
    $PayNow = $params['PayNow'];
    $btcAddress = $params['btcAddress'];
    $ethAddress = $params['ethAddress'];
    $ltcAddress = $params['ltcAddress'];
    $dashAddress = $params['dashAddress'];
    $sendAddress = $params['sendAddress'];
    $cdzcAddress = $params['cdzcAddress'];
    $arrrAddress = $params['arrrAddress'];
    $colxAddress = $params['colxAddress'];
    $znzAddress = $params['znzAddress'];
    $thcAddress = $params['thcAddress'];
    $ecaAddress = $params['ecaAddress'];
    $pivxAddress = $params['pivxAddress'];
    $nbrAddress = $params['nbrAddress'];
    $galiAddress = $params['galiAddress'];
    $bitcAddress = $params['bitcAddress'];
    $okAddress = $params['okAddress'];
    $ethploAddress = $params['ethploAddress'];
    $arkAddress = $params['arkAddress'];
    $veilAddress = $params['veilAddress'];
    $dogeAddress = $params['dogeAddress'];
    $nbxAddress = $params['nbxAddress'];
    $xnvAddress = $params['xnvAddress'];
    $sumoAddress = $params['sumoAddress'];
    $rpdAddress = $params['rpdAddress'];
    $telosAddress = $params['telosAddress'];
    $kmdAddress = $params['kmdAddress'];
    $vrscAddress = $params['vrscAddress'];
    $banAddress = $params['banAddress'];
    $xbtxAddress = $params['xbtxAddress'];
    $sinAddress = $params['sinAddress'];
    $xrpAddress = $params['xrpAddress'];

    // Invoice Parameters
    $CC_invoiceId = $params['invoiceid'];
    $CC_amount = $params['amount'];

    // POST Fields
    $url = 'https://cryptocurrencycheckout.com/validation';
    $postfields = array();
    $postfields['CC_STORE_NAME'] = $StoreName;
    $postfields['CC_STORE_ID'] = $StoreID;
    $postfields['CC_CONNECTION_ID'] = $ConnectionID;
    $postfields['CC_API_TOKEN'] = $APIToken;
    $postfields['CC_ORDER_ID'] = $CC_invoiceId;
    $postfields['CC_GRANDTOTAL'] = $CC_amount;
    $postfields['CC_BTC_ADDRESS'] = $btcAddress;
    $postfields['CC_ETH_ADDRESS'] = $ethAddress;
    $postfields['CC_LTC_ADDRESS'] = $ltcAddress;
    $postfields['CC_DASH_ADDRESS'] = $dashAddress;
    $postfields['CC_SEND_ADDRESS'] = $sendAddress;
    $postfields['CC_CDZC_ADDRESS'] = $cdzcAddress;
    $postfields['CC_ARRR_ADDRESS'] = $arrrAddress;
    $postfields['CC_COLX_ADDRESS'] = $colxAddress;
    $postfields['CC_ZNZ_ADDRESS'] = $znzAddress;
    $postfields['CC_THC_ADDRESS'] = $thcAddress;
    $postfields['CC_ECA_ADDRESS'] = $ecaAddress;
    $postfields['CC_PIVX_ADDRESS'] = $pivxAddress;
    $postfields['CC_NBR_ADDRESS'] = $nbrAddress;
    $postfields['CC_GALI_ADDRESS'] = $galiAddress;
    $postfields['CC_BITC_ADDRESS'] = $bitcAddress;
    $postfields['CC_OK_ADDRESS'] = $okAddress;
    $postfields['CC_ETHPLO_ADDRESS'] = $ethploAddress;
    $postfields['CC_ARK_ADDRESS'] = $arkAddress;
    $postfields['CC_VEIL_ADDRESS'] = $veilAddress;
    $postfields['CC_DOGE_ADDRESS'] = $dogeAddress;
    $postfields['CC_NBX_ADDRESS'] = $nbxAddress;
    $postfields['CC_XNV_ADDRESS'] = $xnvAddress;
    $postfields['CC_SUMO_ADDRESS'] = $sumoAddress;
    $postfields['CC_RPD_ADDRESS'] = $rpdAddress;
    $postfields['CC_TELOS_ADDRESS'] = $telosAddress;
    $postfields['CC_KMD_ADDRESS'] = $kmdAddress;
    $postfields['CC_VRSC_ADDRESS'] = $vrscAddress;
    $postfields['CC_BAN_ADDRESS'] = $banAddress;
    $postfields['CC_XBTX_ADDRESS'] = $xbtxAddress;
    $postfields['CC_SIN_ADDRESS'] = $sinAddress;
    $postfields['CC_XRP_ADDRESS'] = $xrpAddress;

    $htmlOutput = '<form method="POST" action="' . $url . '">';
    foreach ($postfields as $k => $v) {
        $htmlOutput .= '<input type="hidden" name="' . $k . '" value="' . $v . '">';
    }
    $htmlOutput .= '<input type="submit" value="' . $PayNow . '">';
    $htmlOutput .= '</form>';

    return $htmlOutput;
}
