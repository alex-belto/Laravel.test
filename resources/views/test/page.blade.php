@extends('layout.layout')



@section('title')
    page
    @endsection


@section('main')


    <form action="" method="POST">
        @csrf

        <input name="dob">
        <input name="submit" type="submit">

    </form>

    @endsection
