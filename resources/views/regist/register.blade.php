<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>사용자 등록폼</title>
    </head>
    <body>
        <form name="registForm" action="/register" method="post" id="registform">
            {{ csrf_field() }}
            <dl>
                <dt>이름:</dt>
                <dd><input type="text" name="name" size="30">
                    <span>{{ $errors->first('name') }}</span>
                </dd>
            </dl>
            <dl>
                <dt>메일주소:</dt>
                <dd><input type="text" name="email" size="30">
                    <span>{{ $errors->first('email') }}</span>
                </dd>
            </dl>
            <dl>
                <dt>비밀번호:</dt>
                <dd><input type="password" name="password" size="30">
                    <span>{{ $errors->first('password') }}</span>
                </dd>
            </dl>
            <dl>
                <dt>비밀번호(확인):</dt>
                <dd><input type="password" name="password_confirmation" size="30">
                    <span>{{ $errors->first('password_confirmation') }}</span>
                </dd>
            </dl>
            <button type="submit" name="action" value="send">보내기</button>
        </form>
    </body>
</html>
