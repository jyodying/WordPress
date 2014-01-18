<?php





if (!class_exists('my_custom_fields')) {



    class my_custom_fields {



        /**

         * @var  string  $prefix  The prefix for storing custom fields in the postmeta table

         */

        var $prefix = 'my_';

        /**

         * @var  array  $customFields  Defines the custom fields available

         */

        var $customFields = array(

            array(

                "name" => "project_name",

                "title" => "The project name",

                "description" => "The project name",

                "scope" => array("post"),

                "capability" => "edit_post"

            ),

            array(

                "name" => "web_url",

                "title" => "URL for this work",

                "description" => "The URL for this work",

                "scope" => array("post"),

                "capability" => "edit_post"

            ),

            array(

                "name" => "portfolio_image",

                "title" => "Image for portfolio posts",

                "description" => "You can put here your image. ",

                "type" => "mytheme_upload",

                "scope" => array("post"),

                "capability" => "edit_post"

            )

        );



        /**

         * PHP 4 Compatible Constructor

         */

        function my_custom_fields() {

            $this->__construct();

        }



        /**

         * PHP 5 Constructor

         */

        function __construct() {

            add_action('admin_menu', array(&$this, 'createCustomFields'));

            add_action('save_post', array(&$this, 'saveCustomFields'));

            // Comment this line out if you want to keep default custom fields meta box

            //add_action( 'do_meta_boxes', array( &$this, 'removeDefaultCustomFields' ), 10, 3 );

        }



        /**

         * Remove the default Custom Fields meta box

         */

        function removeDefaultCustomFields($type, $context, $post) {

            foreach (array('normal', 'advanced', 'side') as $context) {

                remove_meta_box('postcustom', 'post', $context);

                remove_meta_box('pagecustomdiv', 'page', $context);

            }

        }



        /**

         * Create the new Custom Fields meta box

         */

        function createCustomFields() {

            if (function_exists('add_meta_box')) {

                //add_meta_box('my_custom_fields', 'Portfolio & Blog Fields', array(&$this, 'displayCustomFields'), 'post', 'side', 'high');

                //add_meta_box( 'my_custom_fields', 'Portfolio & Blog Fields', array( &$this, 'displayCustomFields' ), 'page', 'side', 'high' );

            }

        }



        /**

         * Display the new Custom Fields meta box

         */

        function displayCustomFields() {

            global $post;

?>

            <div class="form-wrap">            

<?php

            wp_nonce_field('my_custom_fields', 'my_custom_fields_wpnonce', false, true);

            foreach ($this->customFields as $customField) {

                // Check scope

                $scope = $customField['scope'];

                $output = false;

                foreach ($scope as $scopeItem) {

                    switch ($scopeItem) {

                        case "post": {

                                // Output on any post screen

                                if (basename($_SERVER['SCRIPT_FILENAME']) == "post-new.php" || $post->post_type == "post")

                                    $output = true;

                                break;

                            }

                        case "page": {

                                // Output on any page screen

                                if (basename($_SERVER['SCRIPT_FILENAME']) == "page-new.php" || $post->post_type == "page")

                                    $output = true;

                                break;

                            }

                    }

                    if ($output)

                        break;

                }

                // Check capability

                if (!current_user_can($customField['capability'], $post->ID))

                    $output = false;

                // Output if allowed

                if ($output) {

 ?>

                    <div class="form-field form-required">                

    <?php

                    switch ($customField['type']) {

                        case "checkbox": {

                                // Checkbox

                                echo '<label for="' . $this->prefix . $customField['name'] . '" style="display:inline;"><b>' . $customField['title'] . '</b></label>&nbsp;&nbsp;';

                                if ($customField['description'])

                                    echo '<p>' . $customField['description'] . '</p>';

                                echo '<input type="checkbox" name="' . $this->prefix . $customField['name'] . '" id="' . $this->prefix . $customField['name'] . '" value="yes"';

                                if (get_post_meta($post->ID, $this->prefix . $customField['name'], true) == "yes")

                                    echo ' checked="checked"';

                                echo '" style="width: auto;" />';

                                break;

                            }

                        case "textarea": {

                                // Text area

                                echo '<label for="' . $this->prefix . $customField['name'] . '"><b>' . $customField['title'] . '</b></label>';

                                if ($customField['description'])

                                    echo '<p>' . $customField['description'] . '</p>';

                                echo '<textarea name="' . $this->prefix . $customField['name'] . '" id="' . $this->prefix . $customField['name'] . '" columns="30" rows="3">' . ( get_post_meta($post->ID, $this->prefix . $customField['name'], true) ) . '</textarea>';

                                break;

                            }

                        case "mytheme_upload": {

                                // my-upload button

                                echo '<label for="' . $this->prefix . $customField['name'] . '"><b>' . $customField['title'] . '</b></label>';

                                if ($customField['description'])

                                    echo '<p>' . $customField['description'] . '</p>';

                                echo '<input type="text" style="width:185px;" size="6" class="newtag form-input-tip" name="' . $this->prefix . $customField['name'] . '" id="' . $this->prefix . $customField['name'] . '" value="' . ( get_post_meta($post->ID, $this->prefix . $customField['name'], true) ) . '" /><input type="button" style="width:45px;outline:none;padding:2px 0;" class="mytheme_upload_button ' . $this->prefix . $customField['name'] . ' button tagadd" value="upload" tabindex="3" />';

                                break;

                            }

                        default: {

                                // Plain text field

                                echo '<label for="' . $this->prefix . $customField['name'] . '"><b>' . $customField['title'] . '</b></label>';

                                if ($customField['description'])

                                    echo '<p>' . $customField['description'] . '</p>';

                                echo '<input type="text" name="' . $this->prefix . $customField['name'] . '" id="' . $this->prefix . $customField['name'] . '" value="' . ( get_post_meta($post->ID, $this->prefix . $customField['name'], true) ) . '" />';

                                break;

                            }

                    }

    ?>						

            

                </div>            

    <?php

                }

            }

    ?>

            </div>            

<?php

        }



        /**

         * Save the new Custom Fields values

         */

        function saveCustomFields($post_id) {

            global $post;

            if (!wp_verify_nonce($_POST['my_custom_fields_wpnonce'], 'my_custom_fields'))

                return $post_id;

            foreach ($this->customFields as $customField) {

                if (current_user_can($customField['capability'], $post_id)) {

                    if (isset($_POST[$this->prefix . $customField['name']]) && trim($_POST[$this->prefix . $customField['name']])) {

                        update_post_meta($post_id, $this->prefix . $customField['name'], $_POST[$this->prefix . $customField['name']]);

                    } else {

                        delete_post_meta($post_id, $this->prefix . $customField['name']);

                    }

                }

            }

        }



    }



    // End Class

} // End if class exists statement



$my_custom_fields_var = new my_custom_fields();

