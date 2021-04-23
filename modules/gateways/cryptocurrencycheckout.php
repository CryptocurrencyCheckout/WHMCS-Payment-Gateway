<?php

/**
 * CryptocurrencyCheckout WHMCS Payment Gateway Module
 *
 * This Payment Gateway module allows you to integrate the CryptocurrencyCheckout 
 * Platform into your WHMCS Platform.
 * 
 * Author: CryptocurrencyCheckout
 * Author URI: https://cryptocurrencycheckout.com/
 * Version: 1.2.7
 * 
 * @see https://cryptocurrencycheckout.com/guides/whmcs
 * 
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @copyright Copyright (c) 2018-2020 CryptocurrencyCheckout (support@cryptocurrencycheckout.com) and WHMCS
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

        'upxAddress' => array(
            'FriendlyName' => 'UPX Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'adcAddress' => array(
            'FriendlyName' => 'ADC Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'ritoAddress' => array(
            'FriendlyName' => 'RITO Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'birAddress' => array(
            'FriendlyName' => 'BIR Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'axeAddress' => array(
            'FriendlyName' => 'AXE Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'hushAddress' => array(
            'FriendlyName' => 'HUSH Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'ccyAddress' => array(
            'FriendlyName' => 'CCY Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'motaAddress' => array(
            'FriendlyName' => 'MOTA Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'pgoAddress' => array(
            'FriendlyName' => 'PGO Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'bitgAddress' => array(
            'FriendlyName' => 'BITG Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'grtAddress' => array(
            'FriendlyName' => 'GRT Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'nulsAddress' => array(
            'FriendlyName' => 'NULS Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'audaxAddress' => array(
            'FriendlyName' => 'AUDAX Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'dmsAddress' => array(
            'FriendlyName' => 'DMS Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'dapsAddress' => array(
            'FriendlyName' => 'DAPS Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'idxAddress' => array(
            'FriendlyName' => 'IDX Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'burqAddress' => array(
            'FriendlyName' => 'BURQ Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'htmlAddress' => array(
            'FriendlyName' => 'HTML Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'ghostAddress' => array(
            'FriendlyName' => 'GHOST Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'fdrAddress' => array(
            'FriendlyName' => 'FDR Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'zerAddress' => array(
            'FriendlyName' => 'ZER Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'btczAddress' => array(
            'FriendlyName' => 'BTCZ Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'aliasAddress' => array(
            'FriendlyName' => 'ALIAS Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'xdnAddress' => array(
            'FriendlyName' => 'XDN Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'ethoAddress' => array(
            'FriendlyName' => 'ETHO Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'drgnAddress' => array(
            'FriendlyName' => 'DRGN Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'signaAddress' => array(
            'FriendlyName' => 'SIGNA Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'dvpnAddress' => array(
            'FriendlyName' => 'DVPN Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'tubeAddress' => array(
            'FriendlyName' => 'TUBE Address',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => 'Must Match CryptocurrencyCheckout Dashboard',
        ),

        'tnAddress' => array(
            'FriendlyName' => 'TN Address',
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
    $upxAddress = $params['upxAddress'];
    $adcAddress = $params['adcAddress'];
    $ritoAddress = $params['ritoAddress'];
    $birAddress = $params['birAddress'];
    $axeAddress = $params['axeAddress'];
    $hushAddress = $params['hushAddress'];
    $ccyAddress = $params['ccyAddress'];
    $motaAddress = $params['motaAddress'];
    $pgoAddress = $params['pgoAddress'];
    $bitgAddress = $params['bitgAddress'];
    $grtAddress = $params['grtAddress'];
    $nulsAddress = $params['nulsAddress'];
    $audaxAddress = $params['audaxAddress'];
    $dmsAddress = $params['dmsAddress'];
    $dapsAddress = $params['dapsAddress'];
    $idxAddress = $params['idxAddress'];
    $burqAddress = $params['burqAddress'];
    $htmlAddress = $params['htmlAddress'];
    $ghostAddress = $params['ghostAddress'];
    $fdrAddress = $params['fdrAddress'];
    $zerAddress = $params['zerAddress'];
    $btczAddress = $params['btczAddress'];
    $aliasAddress = $params['aliasAddress'];
    $xdnAddress = $params['xdnAddress'];
    $ethoAddress = $params['ethoAddress'];
    $drgnAddress = $params['drgnAddress'];
    $signaAddress = $params['signaAddress'];
    $dvpnAddress = $params['dvpnAddress'];
    $tubeAddress = $params['tubeAddress'];
    $tnAddress = $params['tnAddress'];

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
    $postfields['CC_UPX_ADDRESS'] = $upxAddress;
    $postfields['CC_ADC_ADDRESS'] = $adcAddress;
    $postfields['CC_RITO_ADDRESS'] = $ritoAddress;
    $postfields['CC_BIR_ADDRESS'] = $birAddress;
    $postfields['CC_AXE_ADDRESS'] = $axeAddress;
    $postfields['CC_HUSH_ADDRESS'] = $hushAddress;
    $postfields['CC_CCY_ADDRESS'] = $ccyAddress;
    $postfields['CC_MOTA_ADDRESS'] = $motaAddress;
    $postfields['CC_PGO_ADDRESS'] = $pgoAddress;
    $postfields['CC_BITG_ADDRESS'] = $bitgAddress;
    $postfields['CC_GRT_ADDRESS'] = $grtAddress;
    $postfields['CC_NULS_ADDRESS'] = $nulsAddress;
    $postfields['CC_AUDAX_ADDRESS'] = $audaxAddress;
    $postfields['CC_DMS_ADDRESS'] = $dmsAddress;
    $postfields['CC_DAPS_ADDRESS'] = $dapsAddress;
    $postfields['CC_IDX_ADDRESS'] = $idxAddress;
    $postfields['CC_BURQ_ADDRESS'] = $burqAddress;
    $postfields['CC_HTML_ADDRESS'] = $htmlAddress;
    $postfields['CC_GHOST_ADDRESS'] = $ghostAddress;
    $postfields['CC_FDR_ADDRESS'] = $fdrAddress;
    $postfields['CC_ZER_ADDRESS'] = $zerAddress;
    $postfields['CC_BTCZ_ADDRESS'] = $btczAddress;
    $postfields['CC_ALIAS_ADDRESS'] = $aliasAddress;
    $postfields['CC_XDN_ADDRESS'] = $xdnAddress;
    $postfields['CC_ETHO_ADDRESS'] = $ethoAddress;
    $postfields['CC_DRGN_ADDRESS'] = $drgnAddress;
    $postfields['CC_SIGNA_ADDRESS'] = $signaAddress;
    $postfields['CC_DVPN_ADDRESS'] = $dvpnAddress;
    $postfields['CC_TUBE_ADDRESS'] = $tubeAddress;
    $postfields['CC_TN_ADDRESS'] = $tnAddress;

    $htmlOutput = '<form method="POST" action="' . $url . '">';
    foreach ($postfields as $k => $v) {
        $htmlOutput .= '<input type="hidden" name="' . $k . '" value="' . $v . '">';
    }
    $htmlOutput .= '<input type="submit" value="' . $PayNow . '">';
    $htmlOutput .= '</form>';

    return $htmlOutput;
}
