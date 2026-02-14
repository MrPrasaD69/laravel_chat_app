@extends('layout.main')

@section('title', 'Chat Home')

@section('content')
<script>
    window.jQuery || document.write('<script src="{{ asset("assets/js/vendor/jquery-slim.min.js") }}"><\/script>');
</script>

<!-- Swipe core CSS -->

<link href="{{url('assets/chat/css/swipe.min.css')}}" type="text/css" rel="stylesheet">
<script src="{{ url('assets/chat/js/swipe.min.js')}}"></script>

<div class="layout">
    
    @include('chat.navigation.index')

    @include('chat.sidebar.index')

    <!-- Start of Add Friends -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="requests">
                <div class="title">
                    <h1>Add your friends</h1>
                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close"><i class="material-icons">close</i></button>
                </div>
                <div class="content">
                    <form>
                        <div class="form-group">
                            <label for="user">Username:</label>
                            <input type="text" class="form-control" id="user" placeholder="Add recipient..." required>
                            <div class="user" id="contact">
                                <img class="avatar-sm" src="assets/img/avatars/avatar-female-5.jpg" alt="avatar">
                                <h5>Keith Morris</h5>
                                <button class="btn"><i class="material-icons">close</i></button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="welcome">Message:</label>
                            <textarea class="text-control" id="welcome" placeholder="Send your welcome message...">Hi Keith, I'd like to add you as a contact.</textarea>
                        </div>
                        <button type="submit" class="btn button w-100">Send Friend Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Add Friends -->
    <!-- Start of Create Chat -->
    <div class="modal fade" id="startnewchat" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="requests">
                <div class="title">
                    <h1>Start new chat</h1>
                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close"><i class="material-icons">close</i></button>
                </div>
                <div class="content">
                    <form>
                        <div class="form-group">
                            <label for="participant">Recipient:</label>
                            <input type="text" class="form-control" id="participant" placeholder="Add recipient..." required>
                            <div class="user" id="recipient">
                                <img class="avatar-sm" src="assets/img/avatars/avatar-female-5.jpg" alt="avatar">
                                <h5>Keith Morris</h5>
                                <button class="btn"><i class="material-icons">close</i></button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="topic">Topic:</label>
                            <input type="text" class="form-control" id="topic" placeholder="What's the topic?" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="text-control" id="message" placeholder="Send your welcome message...">Hmm, are you friendly?</textarea>
                        </div>
                        <button type="submit" class="btn button w-100">Start New Chat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Create Chat -->
     
    <!-- Right Chat Window -->
    @include('chat.window.index')
    <!-- Right Chat Window -->
     
</div>

@endsection