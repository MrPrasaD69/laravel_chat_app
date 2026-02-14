@extends('layout.b4login')

@section('title', 'Login')

@section('content')
<h1>Login</h1>
    <div id="loginError"></div>
<form method="POST" action="{{ url('/attemptLogin') }}" id="loginForm">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" id="loginBtn">Login</button>
</form>
<script>
    $(document).ready(function() {

        $('#loginForm').on('submit', function(e) {
            e.preventDefault();

            let formData = $(this).serialize();

            $.ajax({
                url: "{{ url('/attemptLogin') }}",
                type: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                success: function(response) {

                    if (response.status === 'success') {
                        window.location.href = response.redirect;
                    } else {
                        $('#loginError').text(response.message);
                    }

                },
                error: function(xhr) {

                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        let errors = xhr.responseJSON.errors;
                        let firstError = Object.values(errors)[0][0];
                        $('#loginError').text(firstError);
                    } else {
                        $('#loginError').text("Something went wrong.");
                    }

                }
            });

        });

    });
</script>

@endsection