<?php

/**
 * CryptocurrencyCheckout WHMCS Payment Gateway Module
 *
 * This Payment Gateway module allows you to integrate the CryptocurrencyCheckout 
 * Platform into your WHMCS Platform.
 * 
 * Author: CryptocurrencyCheckout
 * Author URI: https://cryptocurrencycheckout.com/
 * Version: 1.0.0
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

    $htmlOutput = '<form method="POST" action="' . $url . '">';
    foreach ($postfields as $k => $v) {
        $htmlOutput .= '<input type="hidden" name="' . $k . '" value="' . $v . '">';
    }
    $htmlOutput .= '<input type="submit" value="' . $PayNow . '">';
    $htmlOutput .= '</form>';

    return $htmlOutput;
}
