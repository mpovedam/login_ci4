<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Models\UserModel;

use CodeIgniter\API\ResponseTrait;

class UserController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        //dd($output);
        return view('User/user_list');
    }

    public function getUsersList()
    {
        $this->column_order = array('id', 'username', 'email');
        $this->order = array('id' => 'asc');

        $search = $this->request->getPost('search')['value'] ?? '';
        $length = $this->request->getPost('length');
        $order = $this->request->getPost('order');
        $no = $this->request->getPost('start');
        $draw = $this->request->getPost('draw');

        $userModel = model('UserModel');

        // search
        if ($search) {
            $kondisi_search = "email LIKE '%$search%' OR username LIKE '%$search%'";
        } else {
            $kondisi_search = "id != ''";
        }

        // order
        if ($order) {
            $result_order = $this->column_order[$order['0']['column']] ?? '';
            $result_dir = $order['0']['dir'];
        } else if ($this->order) {
            $order = $this->order;
            $result_order = key($order);
            $result_dir = $order[key($order)];
        }

        $users = $userModel
            ->where($kondisi_search)
            ->orderBy($result_order, $result_dir)
            ->limit($length, $no)
            ->findAll();


        $countAll = $userModel->countAll();
        $filteredAll = $userModel->filteredAll($search);

        $data = [];
        foreach ($users as $v) :
            $no++;
            $data[] = [
                'id'       => $v->id,
                'email'    => $v->email,
                'username' => $v->username,
                'activity' => $v->activity,
                'ban'      => $v->status,
                'roles'    => $v->roles,
                'active'   => $v->setActive, 
            ];
        endforeach;

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $countAll->jml,
            "recordsFiltered" => $filteredAll->jml,
            "data" => $data
        );

        return $this->setResponseFormat('json')->respond($output);
    }
}
