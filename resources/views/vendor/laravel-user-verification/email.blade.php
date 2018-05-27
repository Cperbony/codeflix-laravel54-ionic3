Click here to verify your account: <a href="{{ $link = route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) }}">{{ $link }}</a>
<h3>{{config('app.name')}}</h3>
<p>Sua conta na plataforma foi criada</p>
<p>
    Clique <a href="{{ $link = route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) }}">Aqui</a>
    para verificar sua conta!
</p>
<p>Obs. Email gerado automaticamente. Não responder este email!</p>

