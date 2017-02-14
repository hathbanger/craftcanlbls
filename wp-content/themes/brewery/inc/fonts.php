<?php

if ( ! function_exists( 'brewery_fonts' ) ) :
/**
 * Register Google fonts for Brewery.
 *
 */
    function brewery_fonts() {
        $fonts_url = '';
        $fonts     = array();
        $subsets   = 'latin,latin-ext';
        /* translators: If there are characters in your language that are not supported by Playball, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Norican font: on or off', 'brewery' ) ) {
            $fonts[] = 'Norican';
        }
        /* translators: If there are characters in your language that are not supported by Playball, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Satisfy font: on or off', 'brewery' ) ) {
            $fonts[] = 'Satisfy';
        }
        /* translators: If there are characters in your language that are not supported by Playball, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Source Sans Pro font: on or off', 'brewery' ) ) {
            $fonts[] = 'Source Sans Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic';
        }
        /* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
        $subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'brewery' );
        if ( 'cyrillic' == $subset ) {
            $subsets .= ',cyrillic,cyrillic-ext';
        } elseif ( 'greek' == $subset ) {
            $subsets .= ',greek,greek-ext';
        } elseif ( 'devanagari' == $subset ) {
            $subsets .= ',devanagari';
        } elseif ( 'vietnamese' == $subset ) {
            $subsets .= ',vietnamese';
        }
        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $fonts ) ),
                'subset' => urlencode( $subsets ),
            ), '//fonts.googleapis.com/css' );
        }
        return esc_url( $fonts_url );
    }

endif;
