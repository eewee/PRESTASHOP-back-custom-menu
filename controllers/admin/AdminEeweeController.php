<?php

class AdminEeweeController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function initContent()
    {
        parent::initContent();

        // INIT
        $smarty = $this->context->smarty;
        $smarty->assign('abc', 'lorem ipsum');

        // TEMPLATE
        // Ajouter le tpl dans /adminXXX/themes/default/template/controllers/eewee/eewee.tpl
        $this->setTemplate('eewee.tpl');
    }
}