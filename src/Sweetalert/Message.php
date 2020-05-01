<?php 

namespace Space\Sweetalert;

/**
 * 
 */
trait Message
{

    /**
     * Display message success
     */
    public static function success($message)
    {
        echo "
            <script>
                Swal.fire('Sukses', '" . $message . "', 'success');
            </script>
        ";
    }

    /**
     * Display message warning
     */
    public static function warning($message)
    {
        echo "
            <script>
                Swal.fire('Peringatan', '" . $message . "', 'warning');
            </script>
        ";
    }

    /**
     * Display message error
     */
    public static function error($message)
    {
        echo "
            <script>
                Swal.fire('Gagal', '" . $message . "', 'error');
            </script>
        ";
    }

    /**
     * Display message info
     */
    public static function info($message)
    {
        echo "
            <script>
                Swal.fire('Pemberitahuan', '" . $message . "', 'info');
            </script>
        ";
    }
}
