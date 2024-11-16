@extends('layout.master')

@section('title', 'ورود | ثبت نام')

@section('header')
    @include('home.navbar')
@endsection

@section('content')
    <div class="page-content-wrapper">
        <!-- Live Chat Intro-->
        <div class="live-chat-intro mb-3">
            <p>شروع گفتگو</p>
            <img src="img/avatar/mehdi.jpg" alt="">
            <div class="status online">در کم ترین زمان ممکن پاسخ میدیم</div>
            <!-- Use this code for "Offline" Status-->
            <!-- .status.offline We’ll be back soon-->
        </div>
        <!-- Support Wrapper-->
        <div class="support-wrapper py-3">
            <div class="container">
                <!-- Live Chat Wrapper-->
                <div class="live-chat-wrapper">
                    <!-- Agent Message Content-->
                    <div class="agent-message-content d-flex align-items-start">
                        <!-- Agent Thumbnail-->
                        <div class="agent-thumbnail me-2 mt-2"><img src="img/avatar/mehdi.jpg" alt=""></div>
                        <!-- Agent Message Text-->
                        <div class="agent-message-text">
                            <div class="d-block">
                                <p>سلام</p>
                            </div>
                            <div class="d-block">
                                <p>آیا میتونم کمک کنم؟</p>
                            </div><span>12:00</span>
                        </div>
                    </div>
                    <!-- User Message Content-->
                    <div class="user-message-content">
                        <!-- User Message Text-->
                        <div class="user-message-text">
                            <div class="d-block">
                                <p>چجوری میتونم این برنامه رو خریداری کنم</p>
                            </div><span>12:18</span>
                        </div>
                    </div>
                    <!-- Agent Message Content-->
                    <div class="agent-message-content d-flex align-items-start">
                        <!-- Agent Thumbnail-->
                        <div class="agent-thumbnail me-2 mt-2"><img src="img/avatar/mehdi.jpg" alt=""></div>
                        <!-- Agent Message Text-->
                        <div class="agent-message-text">
                            <div class="d-block">
                                <p>با ما تماس بگیرید (09902774517)</p>
                            </div><span>12:36</span>
                        </div>
                    </div>
                    <!-- User Message Content-->
                    <div class="user-message-content">
                        <!-- User Message Text-->
                        <div class="user-message-text">
                            <div class="d-block">
                                <p>تشکر</p>
                            </div><span>12:42</span>
                        </div>
                    </div>
                    <!-- Agent Message Content-->
                    <div class="agent-message-content d-flex align-items-start">
                        <!-- Agent Thumbnail-->
                        <div class="agent-thumbnail me-2 mt-2"><img src="img/avatar/mehdi.jpg" alt=""></div>
                        <!-- Agent Message Text-->
                        <div class="agent-message-text">
                            <div class="d-block">
                                <div class="writing-mode"><span class="dot"></span><span class="dot"></span><span
                                        class="dot"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Type Message Form-->
    <div class="type-text-form mb-5">
        <form action="#">
            <div class="form-group file-upload mb-0">
                <input type="file"><i class="ti ti-plus"></i>
            </div>
            <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Type your message"></textarea>
            <button type="submit">
                <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                    </path>
                </svg>
            </button>
        </form>
    </div>
@endsection
