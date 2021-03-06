<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SearchTargets Controller
 *
 * @property \App\Model\Table\SearchTargetsTable $SearchTargets
 */
class SearchTargetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $searchTargets = $this->paginate($this->SearchTargets);

        $this->set(compact('searchTargets'));
        $this->set('_serialize', ['searchTargets']);
    }

    /**
     * View method
     *
     * @param string|null $id Search Target id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $searchTarget = $this->SearchTargets->get($id, [
            'contain' => []
        ]);

        $this->set('searchTarget', $searchTarget);
        $this->set('_serialize', ['searchTarget']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $searchTarget = $this->SearchTargets->newEntity();
        if ($this->request->is('post')) {
            $searchTarget = $this->SearchTargets->patchEntity($searchTarget, $this->request->data);
            //ここ独自に追記した部分
            $searchTarget->set('status', '1');

            if ($this->SearchTargets->save($searchTarget)) {
                $this->Flash->success(__('The search target has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The search target could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('searchTarget'));
        $this->set('_serialize', ['searchTarget']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Search Target id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $searchTarget = $this->SearchTargets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $searchTarget = $this->SearchTargets->patchEntity($searchTarget, $this->request->data);
            //ここ独自に追記した部分
            $searchTarget->set('status', '1');
            if ($this->SearchTargets->save($searchTarget)) {
                $this->Flash->success(__('The search target has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The search target could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('searchTarget'));
        $this->set('_serialize', ['searchTarget']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Search Target id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $searchTarget = $this->SearchTargets->get($id);
        if ($this->SearchTargets->delete($searchTarget)) {
            $this->Flash->success(__('The search target has been deleted.'));
        } else {
            $this->Flash->error(__('The search target could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
