@extends('society.template')

@section('content')

    <section class="section">
        <div class="columns">
            <div class="column">
                <div class="tile is-ancestor">
                    <div class="tile is-vertical is-8">
                        <div class="tile">
                            <div class="tile is-parent is-vertical">
                                <article class="tile is-child notification is-primary">
                                    <p class="title">学号</p>
                                    <p class="subtitle">{{$user_id}}</p>
                                </article>
                                <article class="tile is-child notification is-warning">
                                    <p class="title">姓名</p>
                                    <p class="subtitle">{{$real_name}}</p>
                                </article>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child notification is-info">
                                    <p class="title">头像</p>
                                    <p class="subtitle">功能暂未开放</p>
                                    <figure class="image is-4by3">
                                        <img src="http://bulma.io/images/placeholders/640x480.png">
                                    </figure>
                                </article>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child notification is-danger">
                                <p class="title">个人介绍</p>
                                <p class="subtitle">建平人</p>
                                <div class="content">
                                    <!-- Content -->
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-success">
                            <div class="content">
                                <p class="title">最近通知</p>
                                <p class="subtitle">我的社团最近干了些什么？</p>
                                <div class="content">
                                    <!-- Content -->
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection