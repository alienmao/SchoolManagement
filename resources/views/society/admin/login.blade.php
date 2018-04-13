@extends('society.admin.template')

@section('content')

    <div class="hero-body">
        <div class="container">
            <form action="" method="post">
                <section class="container">
                    <h2 class="title is-2" style="text-align: center">管理员登录</h2>
                    <div class="columns is-mobile">
                        <div class="column is-half is-offset-one-quarter">
                            <div class="field">
                                <label class="label">用户名</label>
                                <div class="control">
                                    <input class="input" type="number" placeholder=""
                                           name="username">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="columns is-mobile">
                        <div class="column is-half is-offset-one-quarter">
                            <div class="field">
                                <label class="label">密码</label>
                                <div class="control">
                                    <input class="input" type="password" name="password" title="密码">
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
                                    <button class="button is-link">
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