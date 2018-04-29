@extends('society.admin.template')

@section('content')

    <div class="content">
        <h2>活动记录ID</h2>
        <p></p>
        <h2>社团名称</h2>
        <p></p>
        <h2>社团ID</h2>
        <p></p>
        <h2>联系人</h2>
        {{--<p>{{ $post->linkman_name }}</p>--}}
        <h2>活动时间</h2>
        <p>{{ $post->date }} {{ $post->time }}</p>
        <h2>活动地点</h2>
        <p>{{ $post->region }}</p>
        <h2>活动过程</h2>
        <p>{{ $post->process }}</p>
        <h2>活动内容</h2>
        <p>{{ $post->content }}</p>
        <h2>评价</h2>
        <p>{{ $post->assessment }}</p>
        <h2>感悟</h2>
        <p>{{ $post->feeling }}</p>
        <div class="">
            <form method="post" action="">
                <div class="field" hidden>
                    <label class="label">$postId</label>
                    <div class="control">
                    </div>
                </div>
                <div class="field">
                    <label class="label is-large">打分</label>
                    <div class="control">
                        <div class="select is-large">
                            <select name="Stars">
                                <option>
                                    1.0
                                </option>
                                <option>
                                    1.5
                                </option>
                                <option>
                                    2.0
                                </option>
                                <option>
                                    2.5
                                </option>
                                <option>
                                    3.0
                                </option>
                                <option>
                                    3.5
                                </option>
                                <option>
                                    4.0
                                </option>
                                <option>
                                    4.5
                                </option>
                                <option>
                                    5.0
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-primary" type="submit">提交分数</button>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-danger">删除</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @endsection