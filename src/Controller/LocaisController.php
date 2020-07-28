<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Locais Controller
 *
 * @property \App\Model\Table\LocaisTable $Locais
 * @method \App\Model\Entity\Locai[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LocaisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $locais = $this->paginate($this->Locais);

        $this->set(compact('locais'));
    }

    /**
     * View method
     *
     * @param string|null $id Locai id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $locai = $this->Locais->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('locai'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $locai = $this->Locais->newEmptyEntity();
        if ($this->request->is('post')) {
            $locai = $this->Locais->patchEntity($locai, $this->request->getData());
            if ($this->Locais->save($locai)) {
                $this->Flash->success(__('The locai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The locai could not be saved. Please, try again.'));
        }
        $this->set(compact('locai'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Locai id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $locai = $this->Locais->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $locai = $this->Locais->patchEntity($locai, $this->request->getData());
            if ($this->Locais->save($locai)) {
                $this->Flash->success(__('The locai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The locai could not be saved. Please, try again.'));
        }
        $this->set(compact('locai'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Locai id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $locai = $this->Locais->get($id);
        if ($this->Locais->delete($locai)) {
            $this->Flash->success(__('The locai has been deleted.'));
        } else {
            $this->Flash->error(__('The locai could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
