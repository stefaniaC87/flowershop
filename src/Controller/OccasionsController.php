<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Occasions Controller
 *
 * @property \App\Model\Table\OccasionsTable $Occasions
 * @method \App\Model\Entity\Occasion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OccasionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $occasions = $this->paginate($this->Occasions);

        $this->set(compact('occasions'));
    }

    /**
     * View method
     *
     * @param string|null $id Occasion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $occasion = $this->Occasions->get($id, [
            'contain' => ['Flowers'],
        ]);

        $this->set('occasion', $occasion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $occasion = $this->Occasions->newEmptyEntity();
        if ($this->request->is('post')) {
            $occasion = $this->Occasions->patchEntity($occasion, $this->request->getData());
            if ($this->Occasions->save($occasion)) {
                $this->Flash->success(__('The occasion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The occasion could not be saved. Please, try again.'));
        }
        $this->set(compact('occasion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Occasion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $occasion = $this->Occasions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $occasion = $this->Occasions->patchEntity($occasion, $this->request->getData());
            if ($this->Occasions->save($occasion)) {
                $this->Flash->success(__('The occasion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The occasion could not be saved. Please, try again.'));
        }
        $this->set(compact('occasion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Occasion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $occasion = $this->Occasions->get($id);
        if ($this->Occasions->delete($occasion)) {
            $this->Flash->success(__('The occasion has been deleted.'));
        } else {
            $this->Flash->error(__('The occasion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
