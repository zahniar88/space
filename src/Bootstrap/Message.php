<?php
namespace Space\Bootstrap;

/**
 * 
 */
trait Message
{
    
    /**
     * @param $icon = fontawesome icon
     */
    public static function success( $message, $icon = '' )
    {
        if ( $icon != '' ) {
            $iconSet = '
                <i class="fas fa-' . $icon . '"></i>
            ';
        } else {
            $iconSet = '<i class="fas fa-check-circle mr-2"></i>';
        }

        return '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                ' . $iconSet . $message . '
            </div>
        ';
    }

    /**
     * @param $icon = fontawesome icon
     */
    public static function danger($message, $icon = '')
    {
        if ($icon != '') {
            $iconSet = '
                <i class="fas fa-' . $icon . '"></i>
            ';
        } else {
            $iconSet = '<i class="fas fa-exclamation-triangle mr-2"></i>';
        }

        return '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                ' . $iconSet . $message . '
            </div>
        ';
    }

    /**
     * @param $icon = fontawesome icon
     */
    public static function warning($message, $icon = '')
    {
        if ($icon != '') {
            $iconSet = '
                <i class="fas fa-' . $icon . '"></i>
            ';
        } else {
            $iconSet = '<i class="fas fa-exclamation-triangle mr-2"></i>';
        }

        return '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                ' . $iconSet . $message . '
            </div>
        ';
    }

    /**
     * @param $icon = fontawesome icon
     */
    public static function info($message, $icon = '')
    {
        if ($icon != '') {
            $iconSet = '
                <i class="fas fa-' . $icon . '"></i>
            ';
        } else {
            $iconSet = '<i class="fas fa-info-circle mr-2"></i>';
        }

        return '
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                ' . $iconSet . $message . '
            </div>
        ';
    }
}
