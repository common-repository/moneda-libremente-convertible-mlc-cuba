<?php
/*
Plugin Name: Moneda Libremente Convertible(MLC) - Cuba
Plugin URI: https://github.com/bbadrian/moneda-libremente-convertible-cuba/
Description: Plugin que añade una nueva moneda en WooCommerce llamada "Moneda Libremente Convertible" con el código "MLC".
Version: 1.0
Author: bbadrian_dev
Author URI: https://twitter.com/bbadrian_dev/
*/

add_filter( 'woocommerce_currencies', 'mlc_add_currency' );
function mlc_add_currency( $currencies ) {
    $currencies['MLC'] = __( 'Moneda Libremente Convertible', 'woocommerce' );
    return $currencies;
}

add_filter( 'woocommerce_currency_symbol', 'mlc_add_currency_symbol', 10, 2 );
function mlc_add_currency_symbol( $currency_symbol, $currency ) {
    switch( $currency ) {
        case 'MLC':
            $currency_symbol = 'MLC ';
            break;
    }
    return $currency_symbol;
}
