<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Midtrans\Snap;
use Midtrans\Notification;

class PaymentController extends Controller
{
    // Menampilkan halaman pembayaran
    public function showPaymentPage()
    {
        // Ambil data yang diperlukan untuk halaman pembayaran
        $user = auth();

        // Mengarahkan ke tampilan pembayaran
        return view('pembayaran', compact('user'));
    }

    // Inisiasi pembayaran
    public function createPayment(Request $request)
    {
        // Data transaksi
        $order_id = 'ORDER-' . uniqid();
        $gross_amount = $request->input('price');

        $params = [
            'transaction_details' => [
                'order_id' => $order_id,
                'gross_amount' => $gross_amount,
            ],
            'customer_details' => [
                'first_name' => $request->input('first_name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
            ],
        ];

        // Simpan data transaksi ke database
        Transaction::create([
            'user_id' => auth(),
            'order_id' => $order_id,
            'gross_amount' => $gross_amount,
            'status' => 'pending',
        ]);

        // Generate Snap Token dari Midtrans
        $snapToken = Snap::getSnapToken($params);

        return response()->json(['snap_token' => $snapToken]);
    }

    // Notifikasi dari Midtrans
    public function handleNotification(Request $request)
    {
        // Ambil notifikasi dari Midtrans
        $notification = new Notification();

        $transaction = Transaction::where('order_id', $notification->order_id)->first();

        if (!$transaction) {
            return response()->json(['error' => 'Transaction not found'], 404);
        }

        // Update status berdasarkan notifikasi
        $transaction->status = $notification->transaction_status;
        $transaction->save();

        return response()->json(['status' => 'success']);
    }
}
