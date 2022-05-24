<?php namespace app\helper;

    use app\controller\registerController;

    class help{
        public function hill()
        {
            $resRegister = new registerController();
            $resRegister->con();
        }
    }