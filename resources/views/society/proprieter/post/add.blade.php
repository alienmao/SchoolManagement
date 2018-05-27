@extends('society.proprieter.template')

@section('content')
    <p class="lead">社团活动记录</p>
    <form action="" method="post">
        <div class="columns is-mobile">
            <div class="column">
                <div class="field">
                    <label class="label">联系人年级</label>
                    <div class="control">
                        <div class="select" style="width:100%">
                            <select name="LinkmanGrade" style="width:100%;">
                                <option label="高一" value="1"></option>
                                <option label="高二" value="2"></option>
                                <option label="高三" value="3"></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">联系人班级</label>
                    <div class="control">
                        <div class="select" style="width:100%">
                            <select name="LinkmanClass" style="width:100%">
                                <option label="1" value="1"></option>
                                <option label="2" value="2"></option>
                                <option label="3" value="3"></option>
                                <option label="4" value="4"></option>
                                <option label="5" value="5"></option>
                                <option label="6" value="6"></option>
                                <option label="7" value="7"></option>
                                <option label="8" value="8"></option>
                                <option label="9" value="9"></option>
                                <option label="10" value="10"></option>
                                <option label="11" value="11"></option>
                                <option label="12" value="12"></option>
                                <option label="13" value="13"></option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">联系人姓名</label>
                    <div class="control">
                        <input class="input" name="LinkmanName">
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">联系人电话</label>
                    <div class="control">
                        <input name="LinkmanPhone" class="input">
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">联系人QQ</label>
                    <div class="control">
                        <input name="LinkmanQQ" class="input">
                    </div>
                </div>
            </div>
        </div>
        <div class="columns is-mobile">
            <div class="column">
                <div class="field">
                    <label class="label">活动日期</label>
                    <div class="control">
                        <input name="Date" class="input" type="date">
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">活动时间</label>
                    <div class="control">
                        <input name="Time" class="input" type="time">
                    </div>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label">活动地点</label>
            <div class="control">
                <textarea name="Region" class="textarea"></textarea>
            </div>
        </div>
        <div class="field">
            <label class="label">活动内容</label>
            <div class="control">
                <textarea name="Content" class="textarea"></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">活动过程</label>
            <div class="control">
                <textarea name="Process" class="textarea"></textarea>
            </div>
        </div>
        <div class="columns is-mobile">
            <div class="column">
                <div class="field">
                    <label class="label">活动评价</label>
                    <div class="control">
                        <textarea name="Assessment" class="textarea"></textarea>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">活动感悟</label>
                    <div class="control">
                        <textarea name="Feeling" class="textarea" placeholder=""></textarea>
                    </div>
                </div>
            </div>
        </div>


        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit" style="height:50px;width:100%">提交</button>
            </div>
        </div>
    </form>
@endsection