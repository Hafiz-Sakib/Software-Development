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


    public function chooseColor($color)
    {
        switch ($color) {
            case 'red':
                $message = "You chose Red.";
                $color = 'red';
                break;
            case 'blue':
                $message = "You chose Blue.";
                $color = 'blue';
                break;
            case 'green':
                $message = "You chose Green.";
                $color = 'green';
                break;
            case 'yellow':
                $message = "You chose Yellow.";
                $color = 'yellow';
                break;
            case 'purple':
                $message = "You chose Purple.";
                $color = 'purple';
                break;
            case 'orange':
                $message = "You chose Orange.";
                $color = 'orange';
                break;
            case 'pink':
                $message = "You chose Pink.";
                $color = 'pink';
                break;
            case 'brown':
                $message = "You chose Brown.";
                $color = 'brown';
                break;
            case 'black':
                $message = "You chose Black.";
                $color = 'black';
                break;
            case 'white':
                $message = "You chose White.";
                $color = 'white';
                break;
            case 'gray':
                $message = "You chose Gray.";
                $color = 'gray';
                break;
            case 'cyan':
                $message = "You chose Cyan.";
                $color = 'cyan';
                break;
            case 'magenta':
                $message = "You chose Magenta.";
                $color = 'magenta';
                break;
            case 'lime':
                $message = "You chose Lime.";
                $color = 'lime';
                break;
            case 'gold':
                $message = "You chose Gold.";
                $color = 'gold';
                break;
            case 'silver':
                $message = "You chose Silver.";
                $color = 'silver';
                break;
            case 'beige':
                $message = "You chose Beige.";
                $color = 'beige';
                break;
            case 'peach':
                $message = "You chose Peach.";
                $color = 'peach';
                break;
            case 'tan':
                $message = "You chose Tan.";
                $color = 'tan';
                break;
            case 'navy':
                $message = "You chose Navy.";
                $color = 'navy';
                break;
            case 'aqua':
                $message = "You chose Aqua.";
                $color = 'aqua';
                break;
            case 'ivory':
                $message = "You chose Ivory.";
                $color = 'ivory';
                break;
            case 'coral':
                $message = "You chose Coral.";
                $color = 'coral';
                break;
            case 'plum':
                $message = "You chose Plum.";
                $color = 'plum';
                break;
            case 'mint':
                $message = "You chose Mint.";
                $color = 'mint';
                break;
            case 'lavender':
                $message = "You chose Lavender.";
                $color = 'lavender';
                break;
            default:
                $message = "Invalid color.";
                $color = 'gray';  // Default color for invalid input
        }
        return view('color', ['message' => $message, 'color' => $color]);
    }

    public function showChooseColorForm()
    {
        return view('choose-color-form');
    }

    public function handleChooseColor(Request $request)
    {
        $request->validate([
            'color' => 'required|string',
        ]);

        return redirect('/color/' . strtolower($request->input('color')));
    }
}