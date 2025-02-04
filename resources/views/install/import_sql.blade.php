@extends('install.layouts.master')

@section('template_title')
    Import SQL
@endsection
@section('title')
    Import SQL
@endsection

@section('container')
    <div class="text-center">
        <form method="POST" action="{{ route('install.database.run.sql') }}">
            @csrf
            <div class="buttons">
                <button class="button process-btn">
                    Import SQL
                </button>
            </div>
        </form>
    </div>
@endsection
