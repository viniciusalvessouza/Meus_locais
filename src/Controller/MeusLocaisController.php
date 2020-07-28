<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MeusLocais Controller
 *
 * @method \App\Model\Entity\MeusLocai[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MeusLocaisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $meusLocais = $this->paginate($this->MeusLocais);

        $this->set(compact('meusLocais'));
    }

    /**
     * View method
     *
     * @param string|null $id Meus Locai id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $meusLocai = $this->MeusLocais->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('meusLocai'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $meusLocai = $this->MeusLocais->newEmptyEntity();
        if ($this->request->is('post')) {
            $meusLocai = $this->MeusLocais->patchEntity($meusLocai, $this->request->getData());
            if ($this->MeusLocais->save($meusLocai)) {
                $this->Flash->success(__('The meus locai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The meus locai could not be saved. Please, try again.'));
        }
        $this->set(compact('meusLocai'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Meus Locai id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $meusLocai = $this->MeusLocais->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $meusLocai = $this->MeusLocais->patchEntity($meusLocai, $this->request->getData());
            if ($this->MeusLocais->save($meusLocai)) {
                $this->Flash->success(__('The meus locai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The meus locai could not be saved. Please, try again.'));
        }
        $this->set(compact('meusLocai'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Meus Locai id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $meusLocai = $this->MeusLocais->get($id);
        if ($this->MeusLocais->delete($meusLocai)) {
            $this->Flash->success(__('The meus locai has been deleted.'));
        } else {
            $this->Flash->error(__('The meus locai could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
