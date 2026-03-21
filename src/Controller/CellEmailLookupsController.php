<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CellEmailLookups Controller
 *
 * @property \App\Model\Table\CellEmailLookupsTable $CellEmailLookups
 * @method \App\Model\Entity\CellEmailLookup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CellEmailLookupsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $cellEmailLookups = $this->paginate($this->CellEmailLookups);

        $this->set(compact('cellEmailLookups'));
    }

    /**
     * View method
     *
     * @param string|null $id Cell Email Lookup id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cellEmailLookup = $this->CellEmailLookups->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('cellEmailLookup'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cellEmailLookup = $this->CellEmailLookups->newEmptyEntity();
        if ($this->request->is('post')) {
            $cellEmailLookup = $this->CellEmailLookups->patchEntity($cellEmailLookup, $this->request->getData());
            if ($this->CellEmailLookups->save($cellEmailLookup)) {
                $this->Flash->success(__('The cell email lookup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cell email lookup could not be saved. Please, try again.'));
        }
        $this->set(compact('cellEmailLookup'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cell Email Lookup id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cellEmailLookup = $this->CellEmailLookups->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cellEmailLookup = $this->CellEmailLookups->patchEntity($cellEmailLookup, $this->request->getData());
            if ($this->CellEmailLookups->save($cellEmailLookup)) {
                $this->Flash->success(__('The cell email lookup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cell email lookup could not be saved. Please, try again.'));
        }
        $this->set(compact('cellEmailLookup'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cell Email Lookup id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cellEmailLookup = $this->CellEmailLookups->get($id);
        if ($this->CellEmailLookups->delete($cellEmailLookup)) {
            $this->Flash->success(__('The cell email lookup has been deleted.'));
        } else {
            $this->Flash->error(__('The cell email lookup could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
