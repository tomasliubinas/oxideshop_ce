<?php
/* RRP = 300
 * Price enter mode: netto
 * Price view mode: brutto
 * Product count: 4
 * VAT info: 15
 * Discount number: 4
 *  1. shop; %
 */
$aData = array (
        'articles' => array (
                0 => array (
                        'oxid'            => '1000',
                        'oxprice'         => 0.05,
                        'oxtprice'        => 300
                ),
                1 => array (
                        'oxid'            => '1001',
                        'oxprice'         => 0.05,
                        'oxtprice'        => 300
                ),
                2 => array (
                        'oxid'            => '1002',
                        'oxprice'         => 0.05,
                        'oxtprice'        => 300
                ),
                3 => array (
                        'oxid'            => '1003',
                        'oxprice'         => 0.05,
                        'oxtprice'        => 300
                ),
        ),
        'discounts' => array (
                0 => array (
                        'oxid'             => 'percentFor1000',
                        'oxaddsum'         => 20,
                        'oxaddsumtype'     => '%',
                        'oxprice'          => 0,
                        'oxpriceto'        => 99999,
                        'oxamount'         => 0,
                        'oxamountto'       => 99999,
                        'oxactive'         => 1,
                        'oxarticles'       => array ( 1000 ),
                ),
                1 => array (
                        'oxid'         => 'percentFor1001',
                        'oxaddsum'     => -10,
                        'oxaddsumtype' => '%',
                        'oxprice'    => 0,
                        'oxpriceto' => 99999,
                        'oxamount' => 0,
                        'oxamountto' => 99999,
                        'oxactive' => 1,
                        'oxarticles' => array ( 1001 ),
                ),
                2 => array (
                        'oxid'             => 'percentFor1002',
                        'oxaddsum'         => -5.2,
                        'oxaddsumtype'     => '%',
                        'oxprice'          => 0,
                        'oxpriceto'        => 99999,
                        'oxamount'         => 0,
                        'oxamountto'       => 99999,
                        'oxactive'         => 1,
                        'oxarticles'       => array ( 1002 ),
                ),
                3 => array (
                        'oxid'         => 'percentFor1003',
                        'oxaddsum'     => 5.5,
                        'oxaddsumtype' => '%',
                        'oxprice'    => 0,
                        'oxpriceto' => 99999,
                        'oxamount' => 0,
                        'oxamountto' => 99999,
                        'oxactive' => 1,
                        'oxarticles' => array ( 1003 ),
                ),
        ),
        'expected' => array (
                1000 => array (
                        'base_price'        => '0,05',
                        'price'             => '0,05',
                        'rrp_price'         => '345,00',
                        'show_rrp'          => true
                ),
                1001 => array (
                        'base_price'        => '0,05',
                        'price'             => '0,07',
                        'rrp_price'         => '345,00',
                        'show_rrp'          => true
                ),
                1002 => array (
                        'base_price'        => '0,05',
                        'price'             => '0,06',
                        'rrp_price'         => '345,00',
                        'show_rrp'          => true
                ),
                1003 => array (
                        'base_price'        => '0,05',
                        'price'             => '0,06',
                        'rrp_price'         => '345,00',
                        'show_rrp'          => true
                ),
        ),
        'options' => array (
                'config' => array(
                        'blEnterNetPrice' => true,
                        'blShowNetPrice' => false,
                        'dDefaultVAT' => 15,
                ),
                'activeCurrencyRate' => 1,
        ),
);