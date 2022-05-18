<?php

namespace App\Models;

use CodeIgniter\Model;

class JobModel extends Model
{
  protected $table      = 'job';
  protected $primaryKey = 'job_id';


  public function get_job()
  {
    return $this->findAll();
  }
}
