<?php

namespace App\Http\Controllers;
use App\chatroom;
use App\livechat;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class chat extends Controller
{
  public function post_chat(Request $request){

    $id = $request->get('id');
    $msg = $request->get('msg');
    $id = substr($id, 0, -1);
    
    if ($id!=""||$$msg!="") {
      $booking = DB::table('bookings')->where('request_ID', '=', $id)->latest()->get();
      if (Auth::user()->subscribtion=="seeker") {
      $reciever=$booking[0]->provider;
      $chatrm = new chatroom;
      $chatrm->sender =Auth::user()->email;
      $chatrm->reciever=$reciever;
      $chatrm->chat_ID=$id;
      $chatrm->msg=$msg;
      $chatrm->save();
      } else {
        $reciever=$booking[0]->seeker;
        $chatrm = new chatroom;
        $chatrm->sender =Auth::user()->email;
        $chatrm->reciever=$reciever;
        $chatrm->chat_ID=$id;
        $chatrm->msg=$msg;
        $chatrm->save();
      }
    }

  }
  public function reload(){
    $livechat = DB::table('livechats')->where('user', '=', Auth::user()->email)->get();
    $chats = DB::table('chatrooms')->where('chat_ID', '=', $livechat[0]->chat_id)->latest()->get();
    echo "<ul id='ldchat' class='chat-list'>";

  foreach ($chats->all() as $chats) {
    if ($chats->sender == Auth::user()->email) {
      echo "<li class='chat-item'>
          <div  class='chat-content'>
              <div class='box bg-light-info'>$chats->msg</div>
          </div>
          <div class='chat-time'>$chats->created_at</div>
      </li>";
    } else {
      echo "<li class='odd chat-item'>
          <div  class='chat-content'>
              <div class='box bg-light-inverse'>$chats->msg</div>
          </div>
          <div class='chat-time'>$chats->created_at</div>
      </li>";
    }

  }
    echo "</ul>";
    //return ['sub_cat'=> $subcart];



  }
  public function loadchat(Request $request){
    $id = $request->get('chat_ID');

    $chats = DB::table('chatrooms')->where('chat_ID', '=', $id)->latest()->get();
    DB::table('livechats')->where('user', '=', Auth::user()->email)->update(['chat_id' => $id]);
    echo "<div id='load_chat'>
    <div class='card'>
      <div class='card-body border-top'>
        <h4 class='card-title'>Chaters Name</h4>
          <div class='row'>
              <div class='col-9'>
                  <div class='input-field m-t-0 m-b-0'>
                      <input type='hidden' id='chat_ID' value='$id;'>
                      <textarea id='msg' name='msg' placeholder='start chat' class='form-control border-0'></textarea>
                  </div>
              </div>
              <div class='col-3'>
                  <a class='btn-circle btn-lg btn-cyan float-right text-white' onclick='submitchat();'><i class='fas fa-paper-plane'></i></a>
              </div>
          </div>
      </div>
        <div class='card-body'>
            <div class='chat-box scrollable ps-container ps-theme-default ps-active-y' style='height:475px;' >";
            echo "<div id='ldchat'>";
            echo "<ul class='chat-list'>";
            foreach ($chats->all() as $chats) {
              if ($chats->sender == Auth::user()->email) {
                echo "<li class='chat-item'>
                    <div  class='chat-content'>
                        <div class='box bg-light-info'>$chats->msg</div>
                    </div>
                    <div class='chat-time'>$chats->created_at</div>
                </li>";
              } else {
                echo "<li class='odd chat-item'>
                    <div  class='chat-content'>
                        <div class='box bg-light-inverse'>$chats->msg</div>
                    </div>
                    <div class='chat-time'>$chats->created_at</div>
                </li>";
              }


            }
                echo "</ul>";
            echo "</div>";
          echo "</div>";
  }

}
