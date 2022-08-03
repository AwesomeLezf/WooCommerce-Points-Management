<?php
if( ! class_exists('Wc_Points_Menagment') ) :
    

    class Wc_Points_Menagment {
        //contains plugin slug
        public $plugin_slug;
        //Contains additional plugin fields
        private $additional_fields;
        //Contains WCP database menager object
        private $wcp_db;


        /**
         *  __construct
         *
         *  Initialize filters, action, variables and includes
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
         */
        public function __construct() {
            $this->wcp_db = new WCP_Database_Menager();
            $this->plugin_slug = 'wc-points-menagement';

            // Assing aditionals fields
            $this->additional_fields = [
                [
                    'meta_title' => __('Points', "wc-points-menagement"),
                    'meta_key'   => 'points',
                    'meta_value' => '0',
                    'meta_type'  => 'number',
                ],
                [
                    'meta_title' => __('Nip', "wc-points-menagement"),
                    'meta_key'   => 'nip',
                    'meta_value' => '',
                    'meta_type'  => 'text',
                ],
            ];

            // Actions
            $this->add_actions();
            // Filters
            $this->add_filters();
           
            // Add additional fields
            $this->add_field_to_existing_users();            
        }

        /**
         * Add actions
         *
         * Add actions to wordpress
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
         */
        public function add_actions() {
            // Add translations
            add_action( 'init', array($this, 'load_plugin_translations') );

           // Add scripts to admin
           add_action('admin_menu', array($this, 'add_points_page'));
           add_action('admin_enqueue_scripts', array($this, 'scripts_admin'));
           
           // Add fields to user show & edit page
           add_action( 'show_user_profile', array($this, 'add_fields_to_forms') );
           add_action( 'edit_user_profile', array($this, 'add_fields_to_forms') );
           add_action( 'user_new_form', array($this, 'add_fields_to_forms') );
           
           add_action( 'personal_options_update', array($this, 'update_additional_fields_on_form_save') );
           add_action( 'edit_user_profile_update', array($this, 'update_additional_fields_on_form_save') );
           add_action( 'user_register', array($this, 'update_additional_fields_on_form_save') );

        }

        /**
         * Add fields to existing users
         *
         * Add fields to existing users
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
         */
        public function add_field_to_existing_users() {
           $users = get_users( [
                'fields' => 'id', 
                'meta_key' => $this->additional_fields[0]['meta_key'], 
                'meta_compare' => 'NOT EXISTS'
            ] );
            if ( is_array($users) && count($users) )
            {
                foreach( $users as $user_id ) {
                    foreach($this->additional_fields as $field){
                        add_user_meta( $user_id, $field['meta_key'], $field['meta_value']);
                    }
                }
            }
        }

        /**
         * Add fields to form
         *
         * Add fields to user add & edit profile page form
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
         */
        public function add_fields_to_forms($user) {
            ?>
                <h3><?php echo __('Loyal points', 'wc-points-menagement'); ?></h3>
        
                <table class="form-table">
                    <?php
                    foreach($this->additional_fields as $field) :
                    ?>
                    <tr>
                        <th><label for="<?php echo $field['meta_key']; ?>"><?php echo $field['meta_title']; ?></label></th>
                        <td><input type="<?php echo $field['meta_type']; ?>" name="<?php echo $field['meta_key']; ?>" id="<?php echo $field['meta_key']; ?>" value="<?php echo esc_attr(get_user_meta($user->ID, $field['meta_key'] )[0]); ?>" class="regular-text" /></td>
                    </tr>
                    <?php
                    endforeach
                    ?>
                </table>
            <?php
        }

        /**
         * Add actions
         *
         * Add filters to wordpress
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
         */
        public function add_filters() {
           //Custom currency and currency symbol
            add_filter( 'woocommerce_currencies', function($currencies){
                $currencies['points'] = __( 'Points', 'wc-points-menagement' );
                return $currencies;
            } );

            add_filter('woocommerce_currency_symbol', function($currency_symbol, $currency){
                switch( $currency ) {
                    case 'points': $currency_symbol = 'pkt'; break;
                }
                return $currency_symbol;
            }, 10, 2);

            // Allo make order in Woocommerce without payments
            add_filter('woocommerce_cart_needs_payment', '__return_false');
        }

        /**
         * Add points page
         *
         * Add page to mange points to menu
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
         */
        public function add_points_page() {
            add_menu_page( __('Loyal points', 'wc-points-menagement'), __('Loyal points', 'wc-points-menagement'), 'administrator', 'points-menagment', array($this, 'points_menagment'), 'dashicons-superhero-alt', 32 );
        }


        /**
         * Assign points
         *
         * Assign point to user
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
         */
        private function assign_points($user_id, $new_points, $type, $message) {                            

            $points = (int)get_field('points', 'user_'.$user_id);

            if(empty($points)){ 
                if( $type === 0)
                    $new_points = 0;
                update_user_meta($user_id , 'points', $new_points);

            }
            else{
                if($type === 1){
                    $new_points = $points + $new_points;
                }
                else{
                    $new_points = $points - $new_points;
                }
                if($new_pointsts < 0 )
                    $new_points = 0;
                update_user_meta($user_id , 'points', $new_points);
            }         
            
            $this->wcp_db->insert_data($user_id, (int)$_POST['points'], $message, $type);            
        }

        /**
         * Display history
         *
         * Display history
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
         */
        private function display_history($user_id) {
            $history = $this->wcp_db->get_history($user_id);
            include dirname( __FILE__ ) . '/views/admin/history.php';
        }  
        
        /**
         * Load plugin translations
         *
         * Load plugin translations files
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
         */
        function load_plugin_translations() {
            $domain = $this->plugin_slug;
            $mo_file = WCP_LAND_DIR. $domain . '-' . get_locale() . '.mo';
            load_textdomain( $domain, $mo_file ); 
            load_plugin_textdomain( $domain, false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
        }


        /**
         * Points menagment
         *
         * Display main content of the points page
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
         */
        public function points_menagment() {
            if(!empty($_POST['assign-points'])){            
                $user_id    = $_POST['user'];
                $new_points = (int)$_POST['points'];
                $type       = (int)$_POST['type'];
                $message    = $_POST['message'];   
                $this->assign_points($user_id, $new_points, $type, $message);
            }
            if(!empty($_GET['history'])){
                $this->display_history($_GET['history']);
            }
            else{
                include dirname( __FILE__ ) . '/views/admin/users-list.php';
            }
        }

        
        /**
         * Scripts admin
         *
         * Enqueue scripts for admin
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
         */
        public function scripts_admin() {

            //Check if is plugin page            
            if (strpos($_SERVER['REQUEST_URI'], 'points-menagment') !== false) {
                wp_enqueue_style('wcp-admin-styles', plugin_dir_url( __FILE__ ) . '../admin/dist/main.bundle.css', false, null);
                wp_enqueue_script('wcp-admin-scripts', plugin_dir_url( __FILE__ ) .'../admin/dist/main.bundle.js', ['jquery'], null, true);
            }          
        }


        /**
         * Add fields to form
         *
         * Add fields to user add & edit profile page form
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
         */
        public function update_additional_fields_on_form_save($userId) {
            if(!current_user_can('manage_options'))
                return false;

            foreach($this->additional_fields as $field){
                if( isset($_POST[$field['meta_key']]) ) {                
                    update_user_meta( $userId, $field['meta_key'], sanitize_text_field( $_POST[$field['meta_key']]) );
                }
            }            
        }
        
    }

endif; // class_exists check