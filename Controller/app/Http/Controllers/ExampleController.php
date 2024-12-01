<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function showMessage()
    {
        $message = "Hello from the Controller!";
        return view('message', ['message' => $message]);
    }
    public function showData()
    {
        $data = [
            'title' => 'Welcome to Laravel',
            'description' => 'This is a demo without a database.',
        ];
        return view('data', $data);
    }

    public function showList()
    {
        $items = [
            ['id' => 1, 'name' => 'Item 1', 'price' => 100],
            ['id' => 2, 'name' => 'Item 2', 'price' => 200],
            ['id' => 3, 'name' => 'Item 3', 'price' => 300],
        ];
        return view('showList', ['items' => $items]);
    }

    public function handleForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        return view('info', ['name' => $name, 'email' => $email, 'phone' => $phone, 'address' => $address]);
    }

    // Part 02 Have Started

    public function checkCondition()
    {
        $value = 15; // Static value for demonstration
        if ($value > 10) {
            $message = "The value is greater than 10.";
        } else {
            $message = "The value is 10 or less.";
        }
        return view('conditional_message', ['message' => $message]);
    }


    public function generateNumbers()
    {
        $numbers = [];
        for ($i = 1; $i <= 100; $i++) {
            $numbers[] = $i;
        }
        return view('numbers', ['numbers' => $numbers]);
    }
}
