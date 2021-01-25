<?php


class LauncherhelperController extends LauncherhelperAppController
{

    public function index() {
        // TODO
        $this->redirect('/');
    }

    public function admin_index()
    {
        if ($this->isConnected and $this->User->isAdmin()) {
            $this->loadModel('Launcherhelper.LauncherImage');
            $this->layout = 'admin';
            $datas = $this->LauncherImage->get();
            $this->set(compact($datas));
        } else {
            $this->redirect('/');
        }
    }

    public function admin_delete($id) {
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