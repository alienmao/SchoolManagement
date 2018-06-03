@extends('society.template')

@section('content')
    <div class="hero-body">
        <div class="container">
            <form action="{{URL::to('/society/auth/authenticate')}}" method="post">
                <section class="container">
                    <h2 class="title is-2" style="text-align: center">学生登录</h2>
                    <div class="columns is-mobile">
                        <div class="column is-half is-offset-one-quarter">
                            {!! csrf_field() !!}
                            <div class="field">
                                <label class="label">用户名</label>
                                <div class="control">
                                    <input class="input" type="number" placeholder="e.g. 20151333"
                                           name="user_id">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-half is-offset-one-quarter">
                            <div class="field">
                                <label class="label">密码</label>
                                <div class="control">
                                    <input class="input" type="password" name="password">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="columns is-mobile">
                        <div class="column is-half is-offset-one-quarter">
                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-primary" type="submit">登录</button>
                                </div>
                                <div class="control">
                                    <button class="button is-warning">
                                        <a href="">忘记密码？</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
    @endsection