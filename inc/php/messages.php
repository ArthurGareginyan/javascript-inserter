<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Hello message - Bootstrap Modal
 */
function spacexchimp_p015_hello_message() {

    $options = get_option( SPACEXCHIMP_P015_SETTINGS . '_settings' );

    if ( !empty( $options ) ) {
        return;
    }

    ?>
        <div id="hello-message" class="modal fade hello-message" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="<?php echo SPACEXCHIMP_P015_URL . 'inc/img/spacexchimp-logo.png'; ?>">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <p><?php _e( 'Hello. We are the team of Space X-Chimp.', SPACEXCHIMP_P015_TEXT ); ?></p>
                        <p><?php printf(
                                        __( 'Thank you for installing our plugin! We hope you will love it! %s', SPACEXCHIMP_P015_TEXT ),
                                        '&#x1F603;'
                                        );
                            ?></p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            jQuery(document).ready(function($) {

                // Show the message
                $("#hello-message").modal();

                // Hide the message after 7 seconds
                setTimeout(function() {
                    $('#hello-message').modal('hide');
                }, 7000);
            });
        </script>
    <?php
}

/**
 * Successfull message
 */
function spacexchimp_p015_successfull_message() {

    // After settings updated
    if ( isset( $_GET['settings-updated'] ) ) {
        ?>
            <div id="message" class="updated">
                <p><?php _e( 'JavaScript code updated successfully.', SPACEXCHIMP_P015_TEXT ); ?></p>
            </div>
        <?php
    }
}
