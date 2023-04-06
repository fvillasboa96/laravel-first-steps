<?php

namespace Database\Seeders;

use \App\Models\Productos;
use \App\Models\User;
use \App\Models\Order;
use \App\Models\Payment;
use \App\Models\Cart;
use \App\Models\Image;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $productos = Productos::factory(100)->create();
        $users = User::factory(20)->create();
        $orders = Order::factory(10)
            ->make()
            ->each(function($order) use ($users) {
                $order->customer_id = $users->random()->id;
                $order->save();

                $payment = Payment::factory()->make();

                //$payment->order_id = $order->id;
                $order->payment()->save($payment);
            });

        $carts = Cart::factory(20)->create();

        $productos = Productos::factory(50)
            ->create()
            ->each(function($producto) use ($orders, $carts) {
                $order = $orders->random();

                $order->productos()->attach([
                    $producto->id => ['cantidad' => mt_rand(1, 3)]
                ]);

                $cart = $carts->random();

                $cart->productos()->attach([
                    $producto->id => ['cantidad' => mt_rand(1,3)]
                ]);

                $images = Image::factory(mt_rand(2,4))->make();
                $producto->images()->saveMany($images);
            });

    }
}
