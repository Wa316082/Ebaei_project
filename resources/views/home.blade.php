@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="my-auto">{{ __('Dashboard') }}</div>


                        <div>
                            <form  action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-secondary" type="submit"

                                            >
                                {{ __('Logout') }}
                                </button>

                            </form>
                        </div>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
