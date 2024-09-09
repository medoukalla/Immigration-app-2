<?php

namespace App\Http\Livewire;

use App\Models\Notification;
use Livewire\Component;
use Auth;
use Carbon\Carbon;

class Notifications extends Component
{

    public $unreded_notifications = 0;


    public $now;

    public function mount() {
        // dd( Auth::user()->unreadNotifications );
        $this->unreded_notifications = Auth::user()->unreadNotifications->count();
    }
    
    public function render()
    {
        // if is client or other 
        if ( Auth::user()->role->id == 2 ) {
            $notifs = Notification::where([
                ['read_at', null],
            ])->orderBy('created_at', 'desc')->limit(10)->get();
        }else {
            $notifs = Notification::where([
                ['read_at', null]
            ])->orderBy('created_at', 'desc')->limit(10)->get();
        }

        $this->now = Carbon::now();
        return view('livewire.notifications',[
            'notifications' => $notifs
        ]);
    }


    public function mark_as_read( $id ) {
        $notif = Notification::where('id', $id)->first();
        $notif->read_at = now();
        $notif->save();

        $notification_data = json_decode($notif->data);
        if ( $notification_data->type == 'Achat' ) {
            return redirect()->route('voyager.orders.index');
        }elseif ( $notification_data->type == 'Vendre' ) {
            return redirect()->route('voyager.offers.index');
        }elseif ( $notification_data->type == 'Echange' ) {
            return redirect()->route('voyager.exchanges.index');
        }else {
            return redirect($notification_data->route);
        }
    }
}
