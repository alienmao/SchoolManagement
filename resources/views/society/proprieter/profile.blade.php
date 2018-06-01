@extends('society.proprieter.template')

@section('content')
    <form action="" method="post">
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">社团名称</label>
                    <div class="control">
                        <input class="input" name="SocietyName">
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">社长姓名</label>
                    <div class="control is-expanded">
                        <input class="input" type="text" value="社长姓名" name="ProprieterName">
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">社长年级</label>
                    <div class="control is-expanded">
                        <div class="select" style="width:100%">
                            <select name="ProprieterGrade" style="width:100%;">
                                <option label="高一" value="1"></option>
                                <option label="高二" value="2"></option>
                                <option label="高三" value="3"></option>
                            </select>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">社长班级</label>
                    <div class="control is-expanded">
                        <div class="select" style="width:100%">
                            <select name="ProprieterClass" style="width:100%">
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
                    <label class="label">社长QQ</label>
                    <div class="control">
                        <input class="input" type="number" name="ProprieterQQ">
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">社团邮箱</label>
                    <div class="control">
                        <input class="input" type="email" name="SocietyEmail">
                    </div>
                </div>

            </div>
            <div class="column">
                <div class="field">
                    <label class="label">
                        是否招新
                    </label>
                    <div class="control">
                        <div class="control is-expanded">
                            <div class="select" style="width:100%">
                                <select name="Recruit" style="width:100%">
                                    <option label="是" value="1"></option>
                                    <option label="否" value="0"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">社团介绍</label>
                    <div class="control">
                        <textarea class="textarea" name="SocietyIntroduction">

                        </textarea>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">社团成就</label>
                    <div class="control">
                        <textarea class="textarea" name="SocietyAchievement">

                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="field">
                    <div class="control">
                        <button class="button is-link" style="height:50px;width:100%">提交</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection