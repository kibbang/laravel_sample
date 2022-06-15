<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>로그인폼</title>
    </head>
    <body>
        @isset($errors)
            <p style="color: red">{{  $errors->first('message') }}</p>
        @endisset
        <form name = "loginform" action="/login" method="post">
            {{ csrf_field() }}
            <dl>
                <dt>메일주소:</dt>
                <dd><input type="text" name="email" size="30" value="{{  old('email') }}"></dd>
            </dl>
            <dl>
                <dt>비밀번호:</dt>
                <dd><input type="password" name="password" size="30" value="{{  old('password') }}"></dd>
            </dl>
            <button type="submit" name="action" value="send">로그인</button>
        </form>
    </body>
</html>
