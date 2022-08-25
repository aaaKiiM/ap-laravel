@component('mail::message')
Hai <strong>{{ $mailInfo['nama'] }}</strong>

Ini Token Verifikasi Toko Kamu <strong>{{ $mailInfo['body'] }}</strong>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Terima Kasih Telah Mendaftar Di <strong>Emperor Cake</strong><br>
@endcomponent
