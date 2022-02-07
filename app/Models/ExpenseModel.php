<?php 
namespace App\Models;
use CodeIgniter\Model;

class ExpenseModel extends Model
{
    protected $table = 'depenses';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['category', 'montant', 'dateTr'];
}