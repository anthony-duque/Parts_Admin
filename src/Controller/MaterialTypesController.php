<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MaterialTypes Controller
 *
 * @property \App\Model\Table\MaterialTypesTable $MaterialTypes
 * @method \App\Model\Entity\MaterialType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MaterialTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $materialTypes = $this->paginate($this->MaterialTypes);

        $this->set(compact('materialTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Material Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materialType = $this->MaterialTypes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('materialType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materialType = $this->MaterialTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $materialType = $this->MaterialTypes->patchEntity($materialType, $this->request->getData());
            if ($this->MaterialTypes->save($materialType)) {
                $this->Flash->success(__('The material type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The material type could not be saved. Please, try again.'));
        }
        $this->set(compact('materialType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Material Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materialType = $this->MaterialTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materialType = $this->MaterialTypes->patchEntity($materialType, $this->request->getData());
            if ($this->MaterialTypes->save($materialType)) {
                $this->Flash->success(__('The material type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The material type could not be saved. Please, try again.'));
        }
        $this->set(compact('materialType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Material Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materialType = $this->MaterialTypes->get($id);
        if ($this->MaterialTypes->delete($materialType)) {
            $this->Flash->success(__('The material type has been deleted.'));
        } else {
            $this->Flash->error(__('The material type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
