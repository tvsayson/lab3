<?php

namespace App\Controllers;

use App\Models\GuestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Guests extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);


        $data = [
            'guests'  => $model->getGuests(),
            'title' => 'Guest List',
        ];

        return view('templates/guestheader', $data)
            . view('guests/index')
            . view('templates/guestfooter');


    }

    public function show($email = null)
    {
        $model = model(GuestModel::class);

        $data['guests'] = $model->getGuests($email);

        if (empty($data['guests'])) {
            throw new PageNotFoundException('Cannot find the guest item: ' . $email);
        }

        $data['title'] = $data['guests']['name'];

        return view('templates/guestheader', $data)
            . view('guests/view')
            . view('templates/guestfooter');
    }

public function new()
    {
        helper('form');

        return view('templates/guestheader', ['title' => 'Create a guest item'])
            . view('guests/create')
            . view('templates/guestfooter');
    }
public function create()
    {
        helper('form');

        $data = $this->request->getPost(['name', 'email', 'comment']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'name' => 'required|max_length[255]|min_length[3]',
            'email'  => 'required|max_length[255]|min_length[5]',
            'comment'  => 'required|max_length[5500]|min_length[10]',

        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(GuestModel::class);

        $model->save([
            'name' => $post['name'],
            'email'  => $post['email'],
            'comment'  => $post['comment'],


        ]);

        return view('templates/guestheader', ['title' => 'Create a guest item'])
            . view('guests/success')
            . view('templates/guestfooter');
    }




}