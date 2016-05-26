<?php

class DashboardV3ThemeHooks implements Gdn_IPlugin {

    /**
     * No setup required.
     */
    public function setup()
    {
    }

    /**
     * @param Gdn_Controller $sender
     */
    public function base_render_before($sender) {
        $sender->addJsFile('vendors/util.js', 'themes/dashboard3');
        $sender->addJsFile('vendors/dropdown.js', 'themes/dashboard3');
    }
}