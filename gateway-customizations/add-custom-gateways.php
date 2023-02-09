<?php 
/*
 *  Add Custom Give Gateways
 *
 * NOTE: This does not create gateway functionality, only Gateway labels
 * This is useful for adding custom external gateways for use with 
 * the Manual Donations Add-on.
 *
 */
 
 add_filter( 'give_payment_gateways', function( $gateways ) {
    
    $gateways['give_facebook'] = array(
        'admin_label'    => esc_attr__( 'Facebook Donations (DO NOT ENABLE)', 'give-free' ),
        'checkout_label' => esc_attr__( 'Facebook Donations (External)', 'give-free' )
    );

    $gateways['give_crowdrise'] = array(
        'admin_label'    => esc_attr__( 'Crowdrise Donations (DO NOT ENABLE)', 'give-free' ),
        'checkout_label' => esc_attr__( 'Crowdrise Donations (External)', 'give-free' )
    );

    return $gateways;
} );
