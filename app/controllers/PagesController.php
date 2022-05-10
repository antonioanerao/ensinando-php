<?php

namespace App\Controllers;
use App\Core\App;
use Exception;

class PagesController {
    public function home() {
        try {
            $tasks = App::get('database')->selectAll('todos');
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return view('index', compact('tasks'));
    }

    public function contact() {
        return view('contact');
    }

    public function about() {
        $company_name = 'anerao.dev.br';
        return view('about', compact('company_name'));
    }
}