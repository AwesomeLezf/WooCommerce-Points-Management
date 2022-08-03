<?php 

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( ! class_exists('WCP_Database_Menager') ) :

    class WCP_Database_Menager {

        //Contains points history table name
        private $points_history_table;
        //Contains current table charset
        private $table_charset;
        //Contains users table name
        private $users_table;


        /**
         *  __construct
         *
         *  Do nothing
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
        */
        public function __construct($database_name = 'wc_points_history', $table_charset = 'utf8mb4_polish_ci') { 
            global $wpdb;
            $prefix = $wpdb->prefix;
            $this->points_history_table = $prefix . $database_name;
            $this->table_charset = $table_charset;
            $this->users_table =  $prefix . 'users';
        }      

        /**
         * Create database
         *
         * Function response for crating all plugin databases
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @param	void
         * @return	void
         */
        public function create_databases() {
            global $wpdb;
            include_once ABSPATH . '/wp-admin/includes/upgrade.php';

            if ($wpdb->has_cap('collation')) {
                if (!empty($wpdb->charset)) {
                    $this->table_charset = "DEFAULT CHARACTER SET {$wpdb->charset}";
                }
                if (!empty($wpdb->collate)) {
                    $this->table_charset .= " COLLATE {$wpdb->collate}";
                }
            }

            $this->create_history_database();
            
        }

        /**
         * Create history database
         *
         * Function create table response for points  history
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @return	void
         */
        private function create_history_database() {
           
            $query = "CREATE TABLE {$this->points_history_table} (
                id int(11) NOT NULL auto_increment,
                user_id int(11) NOT NULL,
                points int(11) NOT NULL default 0,
                message text NOT NULL default '',
                status boolean NOT NULL default 0,
                time datetime NOT NULL default '0000-00-00 00:00:00',
                PRIMARY KEY (id),
                FOREIGN KEY (user_id) REFERENCES {$this->users_table}(ID)) ENGINE = MyISAM {$this->table_charset};
            ";
            maybe_create_table($this->points_history_table, $query);
        }

        /**
         * Get history 
         * 
         * Function get data form points history table for specified user
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @return	array
         */
        public function get_history($user_id) {
            global $wpdb;

            $query = "SELECT * FROM {$this->points_history_table} 
                WHERE `user_id`={$user_id} ORDER BY `time` DESC;
            ";
            $result = $wpdb->get_results($query);
            
            return $result;
        }

        /**
         * Insert data 
         * 
         * Function insert data too points history table
         *
         * @date	02/07/2022
         * @since	1.0.0
         *
         * @return	void
         */
        public function insert_data($user_id, $points, $message, $type) {
            global $wpdb;    
            $wpdb->insert( $this->points_history_table, array(
                "user_id" => $user_id,
                "points"  => $points,
                "message" => $message,
                "status"  => $type,
                "time"    => date('Y-m-d H:i')
            ));
        }


    }

endif; // class_exists check

?>