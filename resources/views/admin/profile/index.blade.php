@extends('layouts.admin')
@section('title', '登録済みプロフィールの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>プロフィール一覧</h2>
        </div>
        <div class="row py-2">
            <div class="col-md-4">
                <a href="{{ action('Admin\ProfileController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
        </div>
        <div class="row">
            <div class="list-profile col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="10%">氏名</th>
                                <th width="10%">性別</th>
                                <th width="20%">趣味</th>
                                <th width="40%">自己紹介</th>
                                <th width="10%">操作</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <th>{{ $profile->id }}</th>
                                    <td>{{ \Str::limit($profile->name, 100) }}</td>
                                    <td>{{ \Str::limit($profile->gender, 100) }}</td>
                                    <td>{{ \Str::limit($profile->hobby, 250) }}</td>
                                    <td>{{ \Str::limit($profile->introduction, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\ProfileController@edit', ['id' => $profile->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\ProfileController@delete', ['id' => $profile->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
