<?php
/**
 * Initialize the custom Meta Boxes.
 */
add_action( 'admin_init', 'my_custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function my_custom_meta_boxes() {

  /**
   * Create a custom meta boxes array that we pass to
   * the OptionTree Meta Box API Class.
   */
  $service_meta_box = array(
    'id'          => 'services_meta_box',
    'title'       => __( 'Service Information', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'services' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'Service Icon', 'theme-text-domain' ),
        'id'          => 'service_icon',
        'type'        => 'text',
        'desc'        => __( 'Use Font awesome icon for this section.', 'theme-text-domain' )
      ),
      array(
        'label'       => __( 'Service Link', 'theme-text-domain' ),
        'id'          => 'service_link',
        'type'        => 'text',
        'desc'        => __( 'Use details link.', 'theme-text-domain' )
      )
    )
  );

  /**
   * Register our meta boxes using the
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $service_meta_box );


    /*jobs meta box*/
    $jobs_meta_box = array(
      'id'          => 'jobs_meta_box',
      'title'       => __( 'Jobs Information', 'theme-text-domain' ),
      'desc'        => '',
      'pages'       => array( 'jobs' ),
      'context'     => 'normal',
      'priority'    => 'high',
      'fields'      => array(
        array(
          'label'       => __( 'Job Link', 'theme-text-domain' ),
          'id'          => 'job_link',
          'type'        => 'text',
          'desc'        => __( 'Use details link.', 'theme-text-domain' )
        )
      )
    );

    /**
     * Register our meta boxes using the
     * ot_register_meta_box() function.
     */
    if ( function_exists( 'ot_register_meta_box' ) )
      ot_register_meta_box( $jobs_meta_box );

}
