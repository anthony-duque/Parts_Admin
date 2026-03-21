<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StageHeadings Controller
 *
 * @property \App\Model\Table\StageHeadingsTable $StageHeadings
 * @method \App\Model\Entity\StageHeading[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StageHeadingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $stageHeadings = $this->paginate($this->StageHeadings);

        $this->set(compact('stageHeadings'));
    }

    /**
     * View method
     *
     * @param string|null $id Stage Heading id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stageHeading = $this->StageHeadings->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('stageHeading'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stageHeading = $this->StageHeadings->newEmptyEntity();
        if ($this->request->is('post')) {
            $stageHeading = $this->StageHeadings->patchEntity($stageHeading, $this->request->getData());
            if ($this->StageHeadings->save($stageHeading)) {
                $this->Flash->success(__('The stage heading has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stage heading could not be saved. Please, try again.'));
        }
        $this->set(compact('stageHeading'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Stage Heading id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stageHeading = $this->StageHeadings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stageHeading = $this->StageHeadings->patchEntity($stageHeading, $this->request->getData());
            if ($this->StageHeadings->save($stageHeading)) {
                $this->Flash->success(__('The stage heading has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stage heading could not be saved. Please, try again.'));
        }
        $this->set(compact('stageHeading'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Stage Heading id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stageHeading = $this->StageHeadings->get($id);
        if ($this->StageHeadings->delete($stageHeading)) {
            $this->Flash->success(__('The stage heading has been deleted.'));
        } else {
            $this->Flash->error(__('The stage heading could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
