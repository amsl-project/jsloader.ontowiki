<?php

/**
 * This file is part of the {@link http://ontowiki.net OntoWiki} project.
 *
 * @copyright Copyright (c) 2013, {@link http://aksw.org AKSW}
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License (GPL)
 */

/**
 * Helper class for the Fulltextsearch component.
 *
 * @category OntoWiki
 * @package Extensions_Fulltextsearch
 * @copyright Copyright (c) 2012, {@link http://aksw.org AKSW}
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License (GPL)
 */
class JsloaderHelper extends OntoWiki_Component_Helper
{
    
    /**
     * The module view
     *
     * @var Zend_View_Interface
     */
    public $view = null;
    
    public function init() {

        $owApp = OntoWiki::getInstance();

        // init view
        if (null === $this->view) {
            $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
            if (null === $viewRenderer->view) {
                $viewRenderer->initView();
            }
            $this->view = clone $viewRenderer->view;
            $this->view->clearVars();
        }

        $this->view->headScript()->appendFile($this->_config->urlBase . 'extensions/jsloader/templates/jsloader/js/nprogress.js');
        $this->view->headScript()->appendFile($this->_config->urlBase . 'extensions/jsloader/templates/jsloader/js/jsloader.js');
        $this->view->headLink()->appendStylesheet($this->_config->urlBase . 'extensions/jsloader/templates/jsloader/css/nprogress.css');
    }
}

