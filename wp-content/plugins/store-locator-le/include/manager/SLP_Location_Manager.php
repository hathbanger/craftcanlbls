<?php

if ( ! class_exists( 'SLP_Location_Manager' ) ):


	/**
	 * Class SLP_Location_Manager
	 *
	 * Generic Location manager
	 *
	 * @package   StoreLocatorPlus\Location\Manager
	 * @author    Lance Cleveland <lance@charlestonsw.com>
	 * @copyright 2016 Charleston Software Associates, LLC
	 *
	 * @since     4.6
	 *
	 */
	class SLP_Location_Manager extends SLPlus_BaseClass_Object {

		/**
		 * Recalculate the initial distance for all locations.
		 *
		 * @param    SLP_Message_Manager    $messages
		 * @param    string                 $where      SQL where clause
		 */
		public function recalculate_initial_distance( $messages = null , $where = null ) {
			$logging_enabled = ! is_null( $messages) && defined( 'DOING_CRON' ) && $this->slplus->smart_options->log_schedule_messages->is_true;

			if ( ! $this->slplus->currentLocation->is_valid_lat( $this->slplus->smart_options->map_center_lat->value ) ) {
				if ( $logging_enabled ) {
					$messages->add_message(
						sprintf( __( 'Recalculate initial distance needs map center to have a valid latitude. ( %s )' , 'store-locator-le' ) ,
							$this->slplus->smart_options->map_center_lat->value
						) );
				}
				return;
			}
			if ( ! $this->slplus->currentLocation->is_valid_lng( $this->slplus->smart_options->map_center_lng->value ) ) {
				if ( $logging_enabled ) {
					$messages->add_message(
						sprintf( __( 'Recalculate initial distance needs map center to have a valid longitude. ( %s )' , 'store-locator-le' ) ,
							$this->slplus->smart_options->map_center_lng->value
						) );
				}
				return;
			}

			if ( is_null( $where ) ) {
				$where = '';
			}

			$location_table = $this->slplus->database->info['table'];
			$prepared_sql =	$this->slplus->database->db->prepare(
				"UPDATE {$location_table} SET sl_initial_distance =  ( %d * acos( cos( radians( %f ) ) * cos( radians( sl_latitude ) ) * cos( radians( sl_longitude ) - radians( %f ) ) + sin( radians( %f ) ) * sin( radians( sl_latitude ) ) ) ) {$where}",
				( $this->slplus->smart_options->distance_unit->value === 'miles' ) ? SLPlus::earth_radius_mi : SLPlus::earth_radius_km,
				$this->slplus->smart_options->map_center_lat->value ,
				$this->slplus->smart_options->map_center_lng->value ,
				$this->slplus->smart_options->map_center_lat->value
				);

			$this->slplus->database->db->query( $prepared_sql );

			if ( $logging_enabled ) {
				$messages->add_message( __( 'Recalculate initial distance finished.' , 'store-locator-le' ) );
			}
		}

		/**
		 * Recalculate initial distance where distance is zero.
		 *
		 * @param    SLP_Message_Manager    $messages
		 */
		public function recalculate_initial_distance_where_zero( $messages = null ) {
			$this->recalculate_initial_distance( $messages , 'WHERE sl_initial_distance = 0 or sl_initial_distance IS NULL');
		}
	}

endif;