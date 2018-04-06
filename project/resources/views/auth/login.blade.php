<form id="login-form" class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div id="success-msg" class="hide">
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Success!</strong> Check your mail for login confirmation!!
        </div>
    </div>
    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
        <label for="username" class="col-md-4 control-label">Όνομα χρήστη</label>
        <div class="col-12">
            <input id="username"
                   type="text"
                   class="form-control"
                   name="username"
                   value="{{ old('username') }}"
                   placeholder="Εισάγετε το όνομα χρήστη"
                   required
                   autofocus
            >
            <span class="text-danger">
                <strong id="username-error"></strong>
            </span>
            @if ($errors->has('username'))
                <span class="help-block">
                   <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Συνθηματικό</label>
        <div class="col-12">
            <input id="password"
                   type="password"
                   class="form-control"
                   placeholder="Εισάγετε το συνθηματικό"
                   name="password"
                   required
            >

            <span class="text-danger">
                <strong id="password-error"></strong>
            </span>


            @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    Να με θυμάσαι
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-12">
            <button id="submit-login-btn" type="submit" class="btn btn-primary">
                Σύνδεση
            </button>
            <div id="login-spinner" class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>

        <div class="col-12">
            <a class="btn btn-link" href="{{ route('password.request') }}">
                Ξέχασες τον κωδικό σου;
            </a>
        </div>
    </div>
</form>
