<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmailModel; 

class Email extends BaseController
{
    
    public function __construct() {
        $this->emailModel = new EmailModel();   
    }

    public function index() {
        return view('emails/index');   
    }

    public function create($id=null)
    {
        try {
            $validate1 = $this->validate([
                'email' => 'required',
                'name' => 'required'
                ],
            );
            $validate2 = $this->validate([
                'email' => 'required|is_unique[emails.email]',
            ],
            );
        if(!$validate1) {
            return redirect()->to(previous_url());
        }elseif(!$validate2){
            return view('emails/gagal');
        }else{
            $data = [
                "id" => uniqid(),
                "email" => $this->request->getPost('email'),
                "name" => $this->request->getPost('name'),
                ];
        
                $this->emailModel->insert($data);
                return view('emails/berhasil');
            
            }
        }catch(\Exception $e) {
            return redirect()->to(previous_url());
        }
    }   

}


