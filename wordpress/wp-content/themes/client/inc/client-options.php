<?php 
// Check core class for avoid errors
if( class_exists( 'CSF' ) ) {

  // Set a unique slug-like ID
  $prefix = 'my_framework';

  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'my-framework',
  ) );

  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Simple Text',
      ),

    )
  ) );

  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

   // Create a metabox
  CSF::createMetabox( $prefix, array(
    'title'     => 'My Post Options',
    'post_type' => 'post',
    'context'   => 'side', // The context within the screen where the boxes should display. `normal`, `side`, `advanced`
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Simple Text',
      ),

    )
  ) );

}