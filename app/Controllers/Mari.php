<?php

namespace App\Controllers;

use App\Models\CompanyModel;
use App\Models\JobModel;
use App\Models\WorkerModel;

class Mari extends BaseController
{
  public $companyModel;
  public $jobModel;
  public $workerModel;
  public function __construct()
  {
    $this->companyModel = new CompanyModel();
    $this->workerModel = new WorkerModel();
    $this->jobModel = new JobModel();
  }

  public function index()
  {
    echo view('pages/home');
  }

  public function daftar()
  {
    session();
    $data = [
      'companys' => $this->companyModel->get_company(),
      'jobs' => $this->jobModel->get_job(),
      'validation' => \config\Services::validation()
    ];
    echo view('pages/daftar', $data);
  }

  public function about()
  {
    echo view('pages/about');
  }

  public function contact()
  {
    echo view('pages/contact');
  }

  public function admin()
  {
    $data = [
      'company' => $this->companyModel->get_company(),
      'worker' => $this->workerModel->get_worker(),
      'job' => $this->jobModel->get_job()
    ];

    echo view('pages/admin', $data);
  }

  public function delete($id)
  {
    $this->workerModel->delete($id);
    session()->setFlashdata('pesan', 'Data berhasil dihapus');
    return redirect()->to(base_url('/Mari/admin'));
  }

  public function save()
  {
    // validasi input
    if (!$this->validate([
      'worker-name' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama pelamar harus diisi'
        ]
      ],
      'worker-email' => [
        'rules' => 'required|valid_email|min_length[6]',
        'errors' => [
          'required' => 'Email harus diisi',
          'valid_email' => 'Isikan field email dengan benar',
          'min_length' => 'Minimal character adalah 6'
        ]
      ],
      'worker-company' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Perushaan yang ingin dituju harus diisi'
        ]
      ],
      'worker-job' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Pekerjaan yang diinginkan harus diisi'
        ]
      ]
    ])) {
      $validation = \config\Services::validation();
      // dd($validation);
      return redirect()->to(base_url('/daftar'))->withInput()->with('validation', $validation);
    }

    $this->workerModel->save([
      'worker_name' => $this->request->getVar('worker-name'),
      'worker_email' => $this->request->getVar('worker-email'),
      'company_id' => $this->request->getVar('worker-company'),
      'job_id' => $this->request->getVar('worker-job')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

    return redirect()->to(base_url('/admin'));
  }

  public function edit($id)
  {
    session();
    $data = [
      'companys' => $this->companyModel->get_company(),
      'jobs' => $this->jobModel->get_job(),
      'validation' => \config\Services::validation(),
      'worker' => $this->workerModel->get_worker($id)
    ];
    echo view('pages/edit', $data);
  }

  public function update($id)
  {
    // validasi input
    if (!$this->validate([
      'worker-name' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama pelamar harus diisi'
        ]
      ],
      'worker-email' => [
        'rules' => 'required|valid_email|min_length[6]',
        'errors' => [
          'required' => 'Email harus diisi',
          'valid_email' => 'Isikan field email dengan benar',
          'min_length' => 'Minimal character adalah 6'
        ]
      ],
      'worker-company' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Perushaan yang ingin dituju harus diisi'
        ]
      ],
      'worker-job' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Pekerjaan yang diinginkan harus diisi'
        ]
      ]
    ])) {
      $validation = \config\Services::validation();
      // dd($validation);
      return redirect()->to(base_url('Mari/edit/' . $id))->withInput()->with('validation', $validation);
    }
    $this->workerModel->save([
      'worker_id' => $id,
      'worker_name' => $this->request->getVar('worker-name'),
      'worker_email' => $this->request->getVar('worker-email'),
      'company_id' => $this->request->getVar('worker-company'),
      'job_id' => $this->request->getVar('worker-job')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil diganti');

    return redirect()->to(base_url('/admin'));
  }
}