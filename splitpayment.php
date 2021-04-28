function wc_pagarme_slip_rules( $data, $order ) {

    /*  WOOCOMMERCE OWNER CONFIGURATION VARIABLES */
    $id_receiver_owner= 'ID_1111';
    $porcentage_owner = '15';

    /*  VENDOR CONFIGURATION VARIABLES */
    $id_receiver_vendor = 'ID_0000';
    $porcentage_vendor = '85';

    /*    SPLIT RULES     */
    $data['split_rules'] = array(
			
    	/*   SPLIT OWNER RECEIVER */
        array(
            'recipient_id'          => $id_receiver_owner,
            'percentage'            => $porcentage_owner,
            'liable'                => true,
            'charge_processing_fee' => true,
        ),

        /*   SPLIT VENDOR RECEIVER */
        array(
            'recipient_id'          => $id_receiver_vendor,
            'percentage'            => $porcentage_vendor,
            'liable'                => true,
            'charge_processing_fee' => true,
        ),
     );
     /*    SPLIT RULES [END]   */

    return $data;
}

add_action( 'wc_pagarme_transaction_data', 'wc_pagarme_slip_rules', 10, 2 );
