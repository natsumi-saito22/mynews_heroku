@extends('layouts.front2')

@section('content')
<div class="container">
        <div class="row">
            <h2>プロフィール一覧</h2>
            <p>redeploy</p>
        </div>
        <div class="row">
            <div class="list-profile col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">名前</th>
                                <th width="20%">性別</th>
                                <th width="50%">趣味</th>
                                <th width="10%">自己紹介</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <th>{{ $profile->id }}</th>
                                    <td>{{ str_limit($profile->name, 50) }}</td>
                                    <td>{{ str_limit($profile->gender, 10) }}</td>
                                    <td>{{ str_limit($profile->hobby, 50) }}</td>
                                    <td>{{ str_limit($profile->introductino, 200) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
        
        