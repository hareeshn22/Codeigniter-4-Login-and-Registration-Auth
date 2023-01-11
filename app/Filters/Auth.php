<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\ResponseInterface as HTTPResponseInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('isLoggedIn'))
        {
            return redirect()->to('/login');
        }
        
    }

    public function after(RequestInterface $request, HTTPResponseInterface $response, $arguments = null)
    {
        
    }
}