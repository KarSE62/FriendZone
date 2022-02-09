<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface as FiltersFilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

Class Auth implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null){
        if(!session()->get('logged_in')){
            return redirect()->to('/login');
        }
    }
    public function affter(RequestInterface $request,ResponseInterface $response, $arguments = null){
        //Do
    }
}