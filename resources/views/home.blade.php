@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
          <div id="list-left"></div>
        </div>
        <div class="col-md-8">
          <div class="stories-container">
            <div id="stories"></div>
            <div id="stories1"></div>
            <div id="stories2"></div>
            <div id="stories3"></div>
        </div>

        <div class="container-input">
          <input id="new-message-input" type="text" placeholder="A cosa stai pensando?" name="" value="">
          <button id="btn" type="button" name="button"><strong>Pubblica</strong></button>
       </div>

       <div id="template-message-sent">
        <div class="msg-sent">
          <img src="{{ asset('img/profile.jpg') }}" alt="">
          <span class="time"></span>
          <div class="">
            <span><strong>Me</strong></span>
          </div>
          <div class="">
            <span id="message-sent"></span>
          </div>

        </div>
    </div>
    <div class="scrollbar">

        <div id="target" class="messages scrollbar">

        </div>

      <div class="users">
        <img src="{{ asset('img/user1.png') }}" alt="">
        <span class="time"></span>
        <div id="newpost"></div>
      </div>

      <div class="users">
        <img src="{{ asset('img/user3.jpeg') }}" alt="">
        <span class="time1"></span>
        <div id="newpost1"></div>
      </div>
      <div class="users">
        <img src="{{ asset('img/user2.png') }}" alt="">
        <span class="time2"></span>
        <div id="newpost2"></div>
      </div>

    </div>

    <div class="col-md-2">

    </div>

</div>
@endsection
