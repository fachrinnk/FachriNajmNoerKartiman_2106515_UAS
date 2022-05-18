<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkerModel extends Model
{
  protected $table      = 'worker';
  protected $primaryKey = 'worker_id';
  protected $allowedFields = ['worker_name', 'worker_email', 'company_id', 'job_id'];

  // protected $createdField  = 'created_at';
  // protected $updatedField  = 'updated_at';
  // protected $deletedField  = 'deleted_at';

  public function get_worker($id = false)
  {
    if ($id == false) {
      $builder = $this->db->table('company');
      $builder->select('*');
      $builder->join('worker', 'company.company_id = worker.company_id');
      $builder->join('job', 'job.job_id = worker.job_id');
      return $builder->get()->getResultArray();
    }

    return $this->where(['worker_id' => $id])->first();
  }
}