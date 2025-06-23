<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Snap;
use App\Services\MidtransService;

class MidtransController extends Controller
{
    public function createInvoice(Request $request)
    {
        MidtransService::init(); // Lebih clean, DRY, dan mudah maintain

        // Data order dari request
         $orderId = 'INV-' . uniqid();
        $grossAmount = $request->amount ?? 100000;

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $grossAmount,
            ],
            'customer_details' => [
                'first_name' => auth()->user()->name ?? 'Guest',
                'email' => auth()->user()->email ?? 'guest@example.com',
                'phone' => auth()->user()->phone ?? '081234567890',
            ],
            // Optional: item_details, tambahkan jika butuh detail item
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}