<?php

namespace Space\Sweetalert;

trait Toast
{
    /**
     * General script
     */
    public static function defaultToast()
    {
        return "
           const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });
        ";
    }

    /**
     * Show Toast
     */
    public static function toastMessage($message, $type = 'success')
    {
        return "
            <script>
                " . self::defaultToast() . "

                Toast.fire({
                    icon: '" . $type . "',
                    title: '" . $message . "'
                });
            </script>
        ";
    }
}