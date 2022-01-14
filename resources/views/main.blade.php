@if (auth()->user()->level == "admin")
    {{  redirect()->to('products')->send(); }}
@else
    {{ redirect()->to('catalogue')->send(); }}
@endif
