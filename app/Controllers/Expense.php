<?php

namespace App\Controllers;

use App\Models\ExpenseModel;
//use CodeIgniter\Controller;

class Expense extends BaseController
{
    // montrer la iste des dépenses
    public function index()
    {
        $expModel = new ExpenseModel();
        $data['depenses'] = $expModel->orderBy('id', 'ASC')->findAll();
        return view('welcome', $data);
    }

    // formulaire d'ajout
    public function create()
    {
        return view('add_form');
    }

    // ajout d'une dépense 
    public function store()
    {
        $expModel = new ExpenseModel();
        $data = [
            'category' => $this->request->getVar('category'),
            'montant' => $this->request->getVar('montant'),
            'dateTr' => $this->request->getVar('dateTr'),
        ];
        $expModel->insert($data);
        return $this->response->redirect(site_url('welcome'));
    }

    // montrer une seule dépense
    public function singleExpense($id = null){
        $expModel = new ExpenseModel();
        $data['expense_item'] = $expModel->where('id', $id)->first();
        return view('edit_form', $data);
    }

    // modifier une transcation
    public function update(){
        $expModel = new ExpenseModel();
        $id = $this->request->getVar('id');
        $data = [
            'category' => $this->request->getVar('category'),
            'montant' => $this->request->getVar('montant'),
            'dateTr' => $this->request->getVar('dateTr'),
        ];
        $expModel->update($id, $data);
        return $this->response->redirect(site_url('welcome'));
    }

    // supprimer une transaction
    public function delete($id = null){
        $expModel = new ExpenseModel();
        $data['expense_item'] = $expModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('welcome'));
    } 

    // montrer les détails d'une catégorie
    public function singleCat($category = null){
        $expModel = new ExpenseModel();
        $data['depenses'] = $expModel->where('category', $category)->findAll();
        return view('stats/cat', $data);
    }

    public function traitementStatsCat() {
        $var = $this->request->getVar('category');
        $link = 'stats/cat/' . $var;
        return $this->response->redirect(site_url($link));
    }


}
