<h1>Home画面</h1>

<p>ログインID: {{$login_user->id}}</p>
<p>ログインユーザー: {{$login_user->name}}</p>

<p>{{ $password[0]->password }}</p>
<p><a href="/user/profile/{{$login_user->id}}/{{$password[0]->password}}">プロフィール画面</a></p>