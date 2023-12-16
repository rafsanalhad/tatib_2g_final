<?php

class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe,
        ];
    }
    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            $alertType = $_SESSION['flash']['tipe'];
            $alertMessage = $_SESSION['flash']['pesan'];
            $alertAction = $_SESSION['flash']['aksi'];

            if ($alertType == 'success') {
                $alertType = 'green';
            } else if ($alertType == 'danger') {
                $alertType = 'red';
            } else if ($alertType == 'warning') {
                $alertType = 'yellow';
            } else if ($alertType == 'info') {
                $alertType = 'blue';
            }


            echo '<div class="bg-' . $alertType . '-100 border-' . $alertType . '-400 text-' . $alertType . '-700 px-4 py-2 rounded-md alert-dismissible fade show">
                <strong> ' . $alertAction . '</strong>
              </div>';

            unset($_SESSION['flash']);
        }
    }
}
