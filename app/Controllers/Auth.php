<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'login')
    {
    if ( ! is_file(APPPATH.'/Views/auth/'.$page.'.php'))
    {
        // Whoops, we don't have a page for that!
        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter

    echo view('templates/header', $data);
    echo view('auth/'.$page, $data);
    echo view('templates/footer', $data);
    }
}