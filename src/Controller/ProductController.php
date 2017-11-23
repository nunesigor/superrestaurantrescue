<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Controller\Component\UploadComponent;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

/**
 * Product Controller
 *
 * @property \App\Model\Table\ProductTable $Product
 *
 * @method \App\Model\Entity\Product[] paginate($object = null, array $settings = [])
 */
class ProductController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Upload');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function adminIndex() {
        $product = $this->paginate($this->Product);

        $this->set(compact('product'));
        $this->set('_serialize', ['product']);
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function adminView($id = null) {
        $product = $this->Product->get($id, [
            'contain' => []
        ]);

        $this->set('product', $product);
        $this->set('_serialize', ['product']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function adminAdd() {
        $product = $this->Product->newEntity();
        if ($this->request->is('post')) {
            //carrega atributos
            $product = $this->Product->patchEntity($product, $this->request->getData());
            //upload antes de salvar
            $product = $this->upload($product);
            //salva
            if ($this->Product->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'admin_index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function adminEdit($id = null) {
        $product = $this->Product->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Product->patchEntity($product, $this->request->getData());
            if ($this->Product->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'admin_index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function adminDelete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Product->get($id);
        if ($this->Product->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'admin_index']);
    }

    public function index() {
        return $this->redirect(['action' => 'admin_index']);      
    }

    public function upload($product) {
        if (!empty($this->request->data['photo1']['name'])) {
            $product->photo1 = $this->Upload->upload($this->request->data['photo1']);
        } else {
            unset($product->photo1);
        }

        if (!empty($this->request->data['photo2']['name'])) {
            $product->photo2 = $this->Upload->upload($this->request->data['photo2']);
        } else {
            unset($product->photo2);
        }

        if (!empty($this->request->data['photo3']['name'])) {
            $product->photo3 = $this->Upload->upload($this->request->data['photo3']);
        } else {
            unset($product->photo3);
        }

        if (!empty($this->request->data['photo4']['name'])) {
            $product->photo4 = $this->Upload->upload($this->request->data['photo4']);
        } else {
            unset($product->photo4);
        }

        if (!empty($this->request->data['photo5']['name'])) {
            $product->photo5 = $this->Upload->upload($this->request->data['photo5']);
        } else {
            unset($product->photo5);
        }

        return $product;
    }

    function admindeletephoto1($param1) {
        $product = $this->Product->get($param1, [
            'contain' => []
        ]);
        $photo = $product->photo1;
        $product = $this->Product->patchEntity($product, $this->request->getData());
        $product->photo1 = null;
        $file = new File(WWW_ROOT.'/img/upload/'.$photo, false, 0777);
        if ($this->Product->save($product) && $file->delete()) {
            $this->Flash->success(__('Photo 1 removed'));
        } else {
            $this->Flash->error(__('Photo could not be removed. Please, try again.'));
        }
        return $this->redirect(['action' => 'adminedit',$product->id]);
    }
    
    function admindeletephoto2($param1) {
        $product = $this->Product->get($param1, [
            'contain' => []
        ]);
        $photo = $product->photo2;
        $product = $this->Product->patchEntity($product, $this->request->getData());
        $product->photo2 = null;
        $file = new File(WWW_ROOT.'/img/upload/'.$photo, false, 0777);
        if ($this->Product->save($product) && $file->delete()) {
            $this->Flash->success(__('Photo 2 removed'));
        } else {
            $this->Flash->error(__('Photo could not be removed. Please, try again.'));
        }
        return $this->redirect(['action' => 'adminedit',$product->id]);
    }
    
    function admindeletephoto3($param1) {
        $product = $this->Product->get($param1, [
            'contain' => []
        ]);
        $photo = $product->photo3;
        $product = $this->Product->patchEntity($product, $this->request->getData());
        $product->photo3 = null;
        $file = new File(WWW_ROOT.'/img/upload/'.$photo, false, 0777);
        if ($this->Product->save($product) && $file->delete()) {
            $this->Flash->success(__('Photo 3 removed'));
        } else {
            $this->Flash->error(__('Photo could not be removed. Please, try again.'));
        }
        return $this->redirect(['action' => 'adminedit',$product->id]);
    }
    
    function admindeletephoto4($param1) {
        $product = $this->Product->get($param1, [
            'contain' => []
        ]);
        $photo = $product->photo4;
        $product = $this->Product->patchEntity($product, $this->request->getData());
        $product->photo4 = null;
        $file = new File(WWW_ROOT.'/img/upload/'.$photo, false, 0777);
        if ($this->Product->save($product) && $file->delete()) {
            $this->Flash->success(__('Photo 4 removed'));
        } else {
            $this->Flash->error(__('Photo could not be removed. Please, try again.'));
        }
        return $this->redirect(['action' => 'adminedit',$product->id]);
    }
    
    function admindeletephoto5($param1) {
        $product = $this->Product->get($param1, [
            'contain' => []
        ]);
        $photo = $product->photo5;
        $product = $this->Product->patchEntity($product, $this->request->getData());
        $product->photo5 = null;
        $file = new File(WWW_ROOT.'/img/upload/'.$photo, false, 0777);
        if ($this->Product->save($product) && $file->delete()) {
            $this->Flash->success(__('Photo 5 removed'));
        } else {
            $this->Flash->error(__('Photo could not be removed. Please, try again.'));
        }
        return $this->redirect(['action' => 'adminedit',$product->id]);
    }
    
    function adminaddaphotos($param1){
        $product = $this->Product->get($param1, [
            'contain' => []
        ]);
        $product = $this->upload($product);
        if ($this->Product->save($product)) {
            $this->Flash->success(__('Photos added with success.'));
            return $this->redirect(['action' => 'adminedit',$product->id]);
        }
        $this->Flash->error(__('The photos could not be added. Please, try again.'));
    }

    function listall($param1){
        $product = $this->Product;
        $query = $product->find('all')
            ->where(['Product.is_new =' => $param1]);
        $results = $query->all();
        $data = $results->toArray();
        $this->set('product',$data);
        $this->set('_serialize', ['product']);
    }
    
    function detail($id){
        $product = $this->Product->get($id, [
            'contain' => []
        ]);

        $this->set('product', $product);
        $this->set('_serialize', ['product']);
    }
    
}
