@extends('society.template')

@section('content')
    <div class="container">
        <h3 class="title is-3" align="center">创建属于自己的社团</h3>
        <div class="field">
            <label class="label">社团名称</label>
            <div class="control">
                <input class="input" v-model="EstablishClubForm.ClubName">
            </div>
        </div>

        <div class="field">
            <label class="label">社长姓名</label>
            <div class="control">
                <input class="input" v-model="EstablishClubForm.ShezhangName">
            </div>
        </div>

        <div class="field">
            <label class="label">社长年级</label>
            <div class="control">
                <div class="select">
                    <select v-model="EstablishClubForm.ShezhangGrade">
                        <option value="1">高一</option>
                        <option value="2">高二</option>
                        <option value="3">高三</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label">社长班级</label>
            <div class="control">
                <div class="select">
                    <select v-model="EstablishClubForm.ShezhangClassroom">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label">社长QQ号</label>
            <div class="control">
                <input class="input" type="number" v-model="EstablishClubForm.ShezhangQQ">
            </div>
        </div>

        <div class="field">
            <label class="label">是否招新</label>
            <div class="control">
                <label class="checkbox">
                    <input type="checkbox" v-model="EstablishClubForm.IfRecruit">
                    是否招新
                </label>
            </div>
        </div>

        <div class="field" v-if="EstablishClubForm.IfRecruit">
            <label class="label">招新QQ群</label>
            <div class="control">
                <input class="input" type="number" v-model="EstablishClubForm.QQGroup">
            </div>
        </div>

        <div class="field">
            <label class="label">社团简介</label>
            <div class="control">
                <textarea class="textarea" v-model="EstablishClubForm.Introduction"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-primary" @click="submitForm">提交审核</button>
                <hr>
                <p align="center">提交审核后需要社团部批准方可开始招新</p>
            </div>
        </div>

    </div>
    @endsection