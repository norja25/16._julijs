@extends('back')


@section('content')
    <div class="col-md-12">
        <div class="tabs tabs-vertical tabs-left">
            <ul class="nav nav-tabs col-sm-3 col-xs-5">
                <li class="active">
                    <a href="#messages" data-toggle="tab" aria-expanded="false"><i class="fa fa-star"></i> Conversations</a>
                </li>
                <li class="">
                    <a href="#newmessage" data-toggle="tab" aria-expanded="true">New message</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="messages" class="tab-pane active">
                    <h1>Conversations</h1>
                        <ul class="simple-post-list">
                            <li>
                                <div class="post-image">
                                    <div class="img-thumbnail">
                                        <a href="#">
                                            <img src="http://www.avatarpro.biz/avatar/post-thumb-1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-info">
                                    <a href="#">Nullam Vitae Nibh Un Odiosters</a>
                                    <div class="post-meta">
                                        Jan 10, 2013
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post-image">
                                    <div class="img-thumbnail">
                                        <a href="#">
                                            <img src="http://www.avatarpro.biz/avatar/post-thumb-2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-info">
                                    <a href="#">Vitae Nibh Un Odiosters</a>
                                    <div class="post-meta">
                                        Jan 10, 2013
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post-image">
                                    <div class="img-thumbnail">
                                        <a href="#">
                                            <img src="http://www.avatarpro.biz/avatar/post-thumb-3.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-info">
                                    <a href="#">Odiosters Nullam Vitae</a>
                                    <div class="post-meta">
                                        Jan 10, 2013
                                    </div>
                                </div>
                            </li>
                        </ul>

                </div>
                <div id="newmessage" class="tab-pane">
                   <h1>New message</h1>
                    <section class="simple-compose-box mb-xlg">
                        <form method="get" action="/">
                            <textarea name="message-text" data-plugin-textarea-autosize="" placeholder="Write your message?" rows="1" style="overflow: hidden; word-wrap: break-word; resize: none; height: 37px;"></textarea>
                        </form>
                        <div class="compose-box-footer">
                            <ul class="compose-toolbar">
                                <li>
                                    <a href="#"><i class="fa fa-camera"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-map-marker"></i></a>
                                </li>
                            </ul>
                            <ul class="compose-btn">
                                <li>
                                    <a class="btn btn-primary btn-xs">Send message</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@stop