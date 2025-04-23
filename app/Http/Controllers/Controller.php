<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function createdAtFormatter($data)
    {
        foreach ($data as $i) {
            $i->created_at_formatted = $i->created_at->format('d-m-Y');
        }
        return $data;
    }
}