<?php


class LauncherhelperController extends AppController
{

    public function index() {
        // TODO
        $this->redirect('/');
    }

    public function admin_index()
    {
        if ($this->isConnected and $this->User->isAdmin()) {
            $this->loadModel('Launcherhelper.Info');
            $datas = $this->Info->get();
            $this->set(compact($datas));
            $this->set('title_for_layout', 'Launcher Slider');
        } else {
            $this->redirect('/');
        }
    }

    public function admin_delete() {
        if ($this->isConnected and $this->User->isAdmin()) {
            $this->autoRender = null;

            $this->loadModel('Tutorial.Info');

            //J'utilise _delete() car delete() existe déjà avec cakephp
            $this->Info->_delete($id);

            //Redirection vers notre page
            $this->redirect('/admin/launcherhelper/slider');
        } else {
            $this->redirect('/');
        }
    }
}