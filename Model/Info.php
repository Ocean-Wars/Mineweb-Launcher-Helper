<?php
class Info extends LauncherHelperAppModel
{
    public function get() {
        return $this->find('all');
    }

    public function _delete($id) {
        return $this->delete($id);
    }
}