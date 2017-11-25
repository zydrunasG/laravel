To reset click link <br>
<a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">{{ $link }}</a>