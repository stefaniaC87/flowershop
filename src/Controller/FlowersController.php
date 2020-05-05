<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Flowers Controller
 *
 * @property \App\Model\Table\FlowersTable $Flowers
 * @method \App\Model\Entity\Flower[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FlowersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Occasions'],
        ];
        $flowers = $this->paginate($this->Flowers);

        $this->set(compact('flowers'));
    }

    /**
     * View method
     *
     * @param string|null $id Flower id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flower = $this->Flowers->get($id, [
            'contain' => ['Occasions'],
        ]);

        $this->set('flower', $flower);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flower = $this->Flowers->newEmptyEntity();
        if ($this->request->is('post')) {
            $flower = $this->Flowers->patchEntity($flower, $this->request->getData());
            if ($this->Flowers->save($flower)) {
                $this->Flash->success(__('The flower has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flower could not be saved. Please, try again.'));
        }
        $occasions = $this->Flowers->Occasions->find('list', ['limit' => 200]);
        $this->set(compact('flower', 'occasions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Flower id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flower = $this->Flowers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flower = $this->Flowers->patchEntity($flower, $this->request->getData());
            if ($this->Flowers->save($flower)) {
                $this->Flash->success(__('The flower has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flower could not be saved. Please, try again.'));
        }
        $occasions = $this->Flowers->Occasions->find('list', ['limit' => 200]);
        $this->set(compact('flower', 'occasions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Flower id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flower = $this->Flowers->get($id);
        if ($this->Flowers->delete($flower)) {
            $this->Flash->success(__('The flower has been deleted.'));
        } else {
            $this->Flash->error(__('The flower could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
