<?php
if (!class_exists('SLP_Message_Manager')) {

    /**
     * Message Manager
     *
     * @package StoreLocatorPlus\Message\Manager
     * @author Lance Cleveland <lance@charlestonsw.com>
     * @copyright 2016 Charleston Software Associates, LLC
     *
     * @property-read   string[]        $messages   The messages stack.
     * @property        string          $slug       The transient name.
     */
    class SLP_Message_Manager  extends SLPlus_BaseClass_Object {
        private $messages = array();
        public  $slug;
        private $option_name;

	    /**
	     * Initialize this message manager and setup the related smart option.
	     */
        public function initialize() {
        	$this->option_name = 'log_'.$this->slug.'_messages';
        	$message_options[ $this->option_name ] = array(
        		'page'      => 'slp_general' ,
		        'section'   => 'admin',
		        'group'     => 'messages',
		        'type'      => 'checkbox',
		        'default'   => '1'
	        );
        	$this->slplus->smart_options->create_smart_options( $message_options );
        }

        /**
         * Add a message to the queue.
         *
         * @param string    $message
         * @param boolean   $nodate   if true skip the date/source tagging
         */
        function add_message( $message , $nodate = false ) {
            if ( $this->slplus->smart_options->{$this->option_name}->is_false ) { return; }
            if ( ! empty( $message ) ) {
                $this->set_messages();
                $date_source_tag = $nodate ? '' : current_time( 'mysql', true ) . ' :: ' . $this->slug . ' :: ' ;
                $this->messages[] = $date_source_tag . $message;
                $this->save_messages();
            }
        }

        /**
         * Clear the messages from memory and persistent storage.
         */
        function clear_messages() {
            delete_transient( $this->get_transient_name() , array() );
            $this->messages = array();
        }

        /*
         * Get the messages back in a formatted HTML div block.
         *
         * @return string HTML including message text.
         */
        function get_message_string() {
            $this->set_messages();

            if ( ! $this->exist() ) {
	            if ( $this->slplus->is_AddonActive( 'slp-power' ) || $this->slplus->is_AddonActive( 'slp-premier' ) ) {
		            $message_string = sprintf( __('There are no %s messages at this time. ', 'store-locator-le' ) , $this->slug );
	            } else {
	            	$message_string = __( 'Messages from scheduled tasks will appear here. ' , 'store-locator-le' );
	            	$message_string .= sprintf(
	            		__( 'Both the %s and %s add ons provided scheduled location management tasks.' , 'store-locator-le' ) ,
			            $this->slplus->text_manager->get_web_link( 'shop_for_premier' ) ,
			            $this->slplus->text_manager->get_web_link( 'shop_for_power' )
			            );
	            }

            } else {
                $message_string = '';
                foreach ( $this->messages as $message ) {
                    $message_string .=
                        sprintf( '<div class="%s">%s</div>',
                            $this->slug . '_message',
                            $message
                        );
                }

                if ( ! empty ( $message_string ) ) {
                    $message_string = sprintf( '<div class="%s">%s</div>', $this->slug . '_message_block', $message_string );
                }
            }

            return $message_string;
        }

        /**
         * Return the transient name for this message stack.  slp-<slug>-messages.
         * @return string
         */
        private function get_transient_name() {
            return 'slp-'.$this->slug.'-messages';
        }

        /**
         * Returns true if some messages exist
         * @return bool
         */
        public function exist() {
            return ! empty( $this->messages );
        }

        /**
         * Set the message stack, fetching from persistent storage.
         */
        function set_messages() {
            $this->messages = get_transient($this->get_transient_name() , array() );
        }

        /**
         * Save the messages in persistent storage.
         */
        function save_messages() {
            if ( count( $this->messages ) > 0 ) {
                set_transient( $this->get_transient_name(), $this->messages , 1 * WEEK_IN_SECONDS );
            }
        }
    }
}