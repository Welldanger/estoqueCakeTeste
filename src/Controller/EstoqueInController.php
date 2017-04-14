<?php
namespace Estoque\Controller;

use Estoque\Controller\AppController;

/**
 * EstoqueIn Controller
 *
 * @property \App\Model\Table\EstoqueInTable $EstoqueIn
 */
class EstoqueInController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Produtos']
        ];
        $estoqueIn = $this->paginate($this->EstoqueIn);

        $this->set(compact('estoqueIn'));
        $this->set('_serialize', ['estoqueIn']);
    }

    /**
     * View method
     *
     * @param string|null $id Estoque In id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estoqueIn = $this->EstoqueIn->get($id, [
            'contain' => ['Produtos']
        ]);

        $this->set('estoqueIn', $estoqueIn);
        $this->set('_serialize', ['estoqueIn']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estoqueIn = $this->EstoqueIn->newEntity();
        if ($this->request->is('post')) {
            $estoqueIn = $this->EstoqueIn->patchEntity($estoqueIn, $this->request->getData());
            if ($this->EstoqueIn->save($estoqueIn)) {
                $protuct_id = $this->request->data('produto_id');
                $produto = $this->EstoqueIn->Produtos->get($protuct_id);
                $this->EstoqueIn->stoqueIn($produto,$this->request->data('quantidade'));
                $this->Flash->success(__('The estoque in has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estoque in could not be saved. Please, try again.'));
        }
        $produtos = $this->EstoqueIn->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('estoqueIn', 'produtos'));
        $this->set('_serialize', ['estoqueIn']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estoque In id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */

}
