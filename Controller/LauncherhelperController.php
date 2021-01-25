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
            if ($this->request->is('ajax')) {
                $this->autoRender = null;
                $image = $this->request->data['image'];
                $this->LauncherImage->add($image);
                $this->response->body(json_encode(array('statut' => true, 'msg' => $this->Lang->get('GLOBAL__SUCCESS'))));
            } else {
                $this->layout = 'admin';
                $datas = $this->LauncherImage->get();
                $this->set(compact('datas'));
            }
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