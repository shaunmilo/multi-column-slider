    <?php 

    class MyModuleClass extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
        'name'            => __( 'Muli Column Slider', 'fl-builder' ),
        'description'     => __( 'A totally awesome module!', 'fl-builder' ),
        'group'           => __( 'Custom Modules', 'fl-builder' ),
        'category'        => __( 'Sliders', 'fl-builder' ),
        'dir'             => MY_MODULES_DIR . 'module/',
        'url'             => MY_MODULES_URL . 'module/',
        'icon'            => 'button.svg',
        'editor_export'   => true, 
        'enabled'         => true, 
        'partial_refresh' => false, 
        ));

    }     
    }

    FLBuilder::register_module('MyModuleClass', [
        'slides' => array(
            'title'    => __('Slides', 'fl-builder'),
            'sections' => array(
                'general' => array(
                    'title'  => __('General', 'fl-builder'),
                    'fields' => array(
                        'slides' => array(
                            'type'       => 'form',
                            'label'      => __('Slides', 'fl-builder'),
                            'form'       => 'multi_column_slider_form',
                            'preview'    => array(
                                'type'         => 'refresh',
                                'refresh_text' => __('Preview', 'fl-builder'),
                            ),
                            'multiple'   => true,
                        ),
                    ),
                ),
                'number_show'   => array(
                    'title'     => __( 'Number of Slides to Show', 'fl-builder' ),
                    'collapsed' => true,
                    'fields'    => array(
                        'grid_column'            => array(
                            'type'    => 'select',
                            'label'   => __( 'Desktop ', 'fl-builder' ),
                            'default' => '4',
                            'options' => array(
                                '1'  => __( '1 Column', 'fl-builder' ),
                                '2'  => __( '2 Columns', 'fl-builder' ),
                                '3'  => __( '3 Columns', 'fl-builder' ),
                                '4'  => __( '4 Columns', 'fl-builder' ),
                                '5'  => __( '5 Columns', 'fl-builder' ),
                                '6'  => __( '6 Columns', 'fl-builder' ),
                                '7'  => __( '7 Columns', 'fl-builder' ),
                                '8'  => __( '8 Columns', 'fl-builder' ),
                                '9'  => __( '9 Columns', 'fl-builder' ),
                                '10' => __( '10 Columns', 'fl-builder' ),
                            )
                        ),
                        'medium_grid_column'     => array(
                            'type'    => 'select',
                            'label'   => __( 'Medium Device', 'fl-builder' ),
                            'default' => '4',
                            'options' => array(
                                '1'  => __( '1 Column', 'fl-builder' ),
                                '2'  => __( '2 Columns', 'fl-builder' ),
                                '3'  => __( '3 Columns', 'fl-builder' ),
                                '4'  => __( '4 Columns', 'fl-builder' ),
                                '5'  => __( '5 Columns', 'fl-builder' ),
                                '6'  => __( '6 Columns', 'fl-builder' ),
                                '7'  => __( '7 Columns', 'fl-builder' ),
                                '8'  => __( '8 Columns', 'fl-builder' ),
                                '9'  => __( '9 Columns', 'fl-builder' ),
                                '10' => __( '10 Columns', 'fl-builder' ),
                            ),
                        ),
                        'responsive_grid_column' => array(
                            'type'    => 'select',
                            'label'   => __( 'Small Device', 'fl-builder' ),
                            'default' => '4',
                            'options' => array(
                                '1'  => __( '1 Column', 'fl-builder' ),
                                '2'  => __( '2 Columns', 'fl-builder' ),
                                '3'  => __( '3 Columns', 'fl-builder' ),
                                '4'  => __( '4 Columns', 'fl-builder' ),
                                '5'  => __( '5 Columns', 'fl-builder' ),
                                '6'  => __( '6 Columns', 'fl-builder' ),
                                '7'  => __( '7 Columns', 'fl-builder' ),
                                '8'  => __( '8 Columns', 'fl-builder' ),
                                '9'  => __( '9 Columns', 'fl-builder' ),
                                '10' => __( '10 Columns', 'fl-builder' ),
                            ),
                        ),
                    ),
                ),
                'slider_options'   => array( // Add a new section for slider options
                    'title'     => __( 'Slider Options', 'fl-builder' ),
                    'collapsed' => true,
                    'fields'    => array(
                        'arrows' => array(
                            'type'    => 'select',
                            'label'   => __( 'Enable Arrows', 'fl-builder' ),
                            'default' => 'true', // Default value is true, so arrows are enabled by default
                            'options' => array(
                                'true'  => __( 'Yes', 'fl-builder' ),
                                'false' => __( 'No', 'fl-builder' ),
                            ),
                        ),
                        'arrow_color' => array(
                            'type'    => 'color',
                            'label'   => __( 'Arrow Color', 'fl-builder' ),
                            'default' => '#000000',
                        ),
                        'dots' => array( // Add the dots option as well
                            'type'    => 'select',
                            'label'   => __( 'Enable Dots', 'fl-builder' ),
                            'default' => 'true', // Default value is true, so dots are enabled by default
                            'options' => array(
                                'true'  => __( 'Yes', 'fl-builder' ),
                                'false' => __( 'No', 'fl-builder' ),
                            ),
                        ),
                        'dot_color' => array(
                            'type'    => 'color',
                            'label'   => __( 'Dots Color', 'fl-builder' ),
                            'default' => '#000000',
                        ),
                    ),
                ),
            ),
        ),
        
    ]);

    FLBuilder::register_settings_form('multi_column_slider_form', [
        'title' => __('Slide Settings', 'fl-builder'),
        'tabs' => array(
            'general' => array(
                'title' => __('General', 'fl-builder'),
                'sections' => array(
                    'image' => array(
                        'title' => __('Image', 'fl-builder'),
                        'fields' => array(
                            'image' => array(
                                'type' => 'photo',
                                'label' => __('Image/Photo', 'fl-builder'),
                                'connections' => array('photo'),
                            ),
                        ),
                    ),
                    'single_line' => array(
                        'title' => __('Single Line Text', 'fl-builder'),
                        'fields' => array(
                            'single_line_text' => array(
                                'type' => 'text',
                                'label' => __('Single Line Text', 'fl-builder'),
                            ),
                        ),
                    ),
                    'description' => array(
                        'title' => __('Description', 'fl-builder'),
                        'fields' => array(
                            'description' => array(
                                'type' => 'editor',
                                'label' => __('Description Text', 'fl-builder'),
                            ),
                        ),
                    ),
                    'cta' => array(
                        'title' => __('CTA Link', 'fl-builder'),
                        'fields' => array(
                            'cta_link' => array(
                                'type' => 'link',
                                'label' => __('CTA Link', 'fl-builder'),
                            ),
                        ),
                    ),
                ),
            ),
            'number_show'   => array(
                'title'     => __( 'Number of Slides to Show', 'fl-builder' ),
                'collapsed' => true,
                'fields'    => array(
                    'grid_column'            => array(
                        'type'    => 'select',
                        'label'   => __( 'Desktop', 'fl-builder' ),
                        'default' => '4',
                        'options' => array(
                            '1'  => __( '1 Column', 'fl-builder' ),
                            '2'  => __( '2 Columns', 'fl-builder' ),
                            '3'  => __( '3 Columns', 'fl-builder' ),
                            '4'  => __( '4 Columns', 'fl-builder' ),
                            '5'  => __( '5 Columns', 'fl-builder' ),
                            '6'  => __( '6 Columns', 'fl-builder' ),
                            '7'  => __( '7 Columns', 'fl-builder' ),
                            '8'  => __( '8 Columns', 'fl-builder' ),
                            '9'  => __( '9 Columns', 'fl-builder' ),
                            '10' => __( '10 Columns', 'fl-builder' ),
                        ),
                    ),
                    'medium_grid_column'     => array(
                        'type'    => 'select',
                        'label'   => __( 'Medium Device', 'fl-builder' ),
                        'default' => '4',
                        'options' => array(
                            '1'  => __( '1 Column', 'fl-builder' ),
                            '2'  => __( '2 Columns', 'fl-builder' ),
                            '3'  => __( '3 Columns', 'fl-builder' ),
                            '4'  => __( '4 Columns', 'fl-builder' ),
                            '5'  => __( '5 Columns', 'fl-builder' ),
                            '6'  => __( '6 Columns', 'fl-builder' ),
                            '7'  => __( '7 Columns', 'fl-builder' ),
                            '8'  => __( '8 Columns', 'fl-builder' ),
                            '9'  => __( '9 Columns', 'fl-builder' ),
                            '10' => __( '10 Columns', 'fl-builder' ),
                        ),
                    ),
                    'responsive_grid_column' => array(
                        'type'    => 'select',
                        'label'   => __( 'Small Device', 'fl-builder' ),
                        'default' => '4',
                        'options' => array(
                            '1'  => __( '1 Column', 'fl-builder' ),
                            '2'  => __( '2 Columns', 'fl-builder' ),
                            '3'  => __( '3 Columns', 'fl-builder' ),
                            '4'  => __( '4 Columns', 'fl-builder' ),
                            '5'  => __( '5 Columns', 'fl-builder' ),
                            '6'  => __( '6 Columns', 'fl-builder' ),
                            '7'  => __( '7 Columns', 'fl-builder' ),
                            '8'  => __( '8 Columns', 'fl-builder' ),
                            '9'  => __( '9 Columns', 'fl-builder' ),
                            '10' => __( '10 Columns', 'fl-builder' ),
                        ),
                    ),
                ),
            ),
            'slider_options'   => array( 
                'title'     => __( 'Slider Options', 'fl-builder' ),
                'collapsed' => true,
                'fields'    => array(
                    'arrows' => array(
                        'type'    => 'select',
                        'label'   => __( 'Enable Arrows', 'fl-builder' ),
                        'default' => 'true', 
                        'options' => array(
                            'true'  => __( 'Yes', 'fl-builder' ),
                            'false' => __( 'No', 'fl-builder' ),
                        ),
                    ),
                    'arrow_color' => array(
                        'type'    => 'color',
                        'label'   => __( 'Arrow Color', 'fl-builder' ),
                        'default' => '#000000',
                    ),
                    'dots' => array( 
                        'type'    => 'select',
                        'label'   => __( 'Enable Dots', 'fl-builder' ),
                        'default' => 'true', 
                        'options' => array(
                            'true'  => __( 'Yes', 'fl-builder' ),
                            'false' => __( 'No', 'fl-builder' ),
                        ),
                    ),
                    'dot_color' => array(
                        'type'    => 'color',
                        'label'   => __( 'Dots Color', 'fl-builder' ),
                        'default' => '#000000',
                    ),
                ),
            ),
        ),

    ]);

?>