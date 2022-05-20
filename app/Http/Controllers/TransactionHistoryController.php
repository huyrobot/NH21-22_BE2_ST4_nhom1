<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionHistory;
class TransactionHistoryController extends Controller
{
    public function getHistory()
    {
        $history = TransactionHistory::paginate(5);
        return view('boxHistory.crudHistory',compact('history'))
        ->with('i',(request()->input('page',1) -1 * 5));
    }
    public function add()
    {
        return view('boxHistory.addHistory');
    }
    public function save(Request $request)
    {
       $user_id = $request->get('user_id');
       $listOfCart = $request->get('listOfCart');
       $total_payments = $request->get('total_payments');
       $dateOfPayment = $request->get('dateOfPayment');
       $address = $request->get('address');
       TransactionHistory::create([
           'user_id'=> $user_id,
           'listOfCart'=>$listOfCart,
           'total_payments'=> $total_payments,
           'dateOfPayment'=>$dateOfPayment,
           'address'=>$address,
       ]);

       return redirect()->route('boxHistory.crudHistory')
       ->with('thongbao','Them thanh cong!');
    }

    public function delete($id)
    {
        $value = TransactionHistory::findOrFail($id);
        $value->delete();
        return redirect()->route('boxHistory.crudHistory')
        ->with('thongbao','Xoa thanh cong!');
    }
    public function edit($id)
    {
        $value = TransactionHistory::findOrFail($id);
        return  view('/boxHistory/editHistory',['value'=>$value]);
    }
    public function update(Request $request,$id)
    {
        $value = TransactionHistory::findOrFail($id);
        $value->update([
            'user_id'=>$request->get('user_id'),
            'listOfCart'=>$request->get('listOfCart'),
            'total_payments'=>$request->get('total_payments'),
            'dateOfPayment'=>$request->get('dateOfPayment'),
            'address'=>$request->get('address'),
        ]);
        return redirect()->route('boxHistory.crudHistory')
        ->with('thongbao','Sua thanh cong!');
    }
}
