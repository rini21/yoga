<?php namespace App\Controllers;

use App\Models\AuthModel;
use CodeIgniter\Controller;

class AuthDisplay extends Controller
{
    public function index()
    {
        $model = new AuthModel();
        $data = [
            'tests'  => $model->getTests(),
            'title' => 'Tests archive',
        ];
    
        echo view('templates/header', $data);
        echo view('auth/overview', $data);
        echo view('templates/footer', $data);
    }

    public function view($slug = null)
    {
        $model = new AuthModel();

        $data['tests'] = $model->getTests($slug);

        if (empty($data['tests']))
    {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
    }

    $data['title'] = $data['tests']['title'];

    echo view('templates/header', $data);
    echo view('auth/view', $data);
    echo view('templates/footer', $data);
    }
    public function signup()
{
    $model = new AuthModel();

    if ($this->request->getMethod() === 'post' && $this->validate([
            'email' => 'required|min_length[3]|max_length[255]',
            'password'  => 'required'
        ]))
    {
        $model->save([
            'email' => $this->request->getPost('email'),
            'slug'  => url_title($this->request->getPost('email'), '-', TRUE),
            'password'  => $this->request->getPost('password'),
        ]);

        echo view('auth/success');

    }
    else
    {
        echo view('templates/header', ['title' => 'Create a user']);
        echo view('auth/signup');
        echo view('templates/footer');
    }
}
}