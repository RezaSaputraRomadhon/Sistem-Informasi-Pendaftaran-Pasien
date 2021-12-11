<?php

class menuController
{


    public function header($pilihan)
    {

        if ($pilihan == 1) {
            require_once('view/menu/headerRegristrasi.php');
        } elseif ($pilihan == 2) {
            require_once('view/menu/headerObat.php');
        }
    }

    public function footer()
    {
        require_once('view/menu/footer.php');
    }
}
