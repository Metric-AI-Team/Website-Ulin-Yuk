@extends('landingpage::layouts.master')
@section('content')
<style>
    .chat-container {
        font-family: 'Ubuntu', sans-serif;

        font-size: 12px;
    }
</style>

<link href="{{asset('css')}}/Chatroom.css" rel="stylesheet">

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Chatbot</h4>

        </div>
        <div class="chat-container"></div>
        </div>
    </div>
</div>
<script src="{{asset('js')}}/Chatroom.js"></script>
<script type="text/javascript">
    var chatroom = window.Chatroom({
        host: {!! json_encode($config->config_value) !!},
        title: "Metricbot",
        fontFamily: 'Ubuntu',
        container: document.querySelector(".chat-container"),
        welcomeMessage: "Hi I am Metricbot, How may I Help you?",
        speechRecognition: "en-US",
        height: "50px",
        fontSize: "10px"
    });
    console.log(chatroom);

    $(document).ready(function() {
        setTimeout(function(){
            console.log(chatroom);
            chatroom.openChat();
        }, 1000);
        document.getElementById("input_text").value = "Hi";
        document.getElementById("submit_input").click();
    });
</script>
@endsection
