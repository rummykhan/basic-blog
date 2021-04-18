@if($successMessage = session()->get('success'))
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
@endif

@if($errorMessage = session()->get('error'))
    <div class="alert alert-danger">
        {{ $errorMessage }}
    </div>
@endif


@if($errors->any())
    <div class="alert alert-danger">
        Please check the form below for the errors

        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif
