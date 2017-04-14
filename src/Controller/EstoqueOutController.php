<?php
namespace App\Controller;

use Estoque\Controller\AppController;

/**
 * EstoqueOut Controller
 *
 * @property \Estoque\Model\Table\EstoqueOutTable $EstoqueOut
 */
class EstoqueOutController extends AppController
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
        $estoqueOut = $this->paginate($this->EstoqueOut);

        $this->set(compact('estoqueOut'));
        $this->set('_serialize', ['estoqueOut']);
    }

    /**
     * View method
     *
     * @param string|null $id Estoque Out id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estoqueOut = $this->EstoqueOut->get($id, [
            'contain' => ['Produtos']
        ]);

        $this->set('estoqueOut', $estoqueOut);
        $this->set('_serialize', ['estoqueOut']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estoqueOut = $this->EstoqueOut->newEntity();
        if ($this->request->is('post')) {
            $estoqueOut = $this->EstoqueOut->patchEntity($estoqueOut, $this->request->getData());
            if ($this->EstoqueOut->save($estoqueOut)) {
                $protuct_id = $this->request->data['produto_id'];
                $produto = $this->EstoqueOut->Produtos->get($protuct_id);
                $this->EstoqueOut->stoqueOut($produto,$this->request->data['quantidade']);

                $this->Flash->success(__('The estoque out has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estoque out could not be saved. Please, try again.'));
        }
        $produtos = $this->EstoqueOut->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('estoqueOut', 'produtos'));
        $this->set('_serialize', ['estoqueOut']);
    }


}
